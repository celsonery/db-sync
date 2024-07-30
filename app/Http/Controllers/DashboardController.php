<?php

namespace App\Http\Controllers;

use App\Http\Requests\DatabaseRequest;
use Illuminate\Process\Pipe;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Process;
use Inertia\Inertia;

class DashboardController extends Controller
{
    public function __construct(
//        private array $databases = [],
        private string $pgHost = '',
        private string $pgUser = ''
    ){
        $this->pgHost = env('PGHOST');
        $this->pgUser = env('PGUSERNAME');
    }

    public function index(): \Inertia\Response
    {
        $result = Process::pipe(function (Pipe $pipe) {
            $pipe->command("/usr/bin/psql -h {$this->pgHost} -U {$this->pgUser} -l");
            $pipe->command("awk '{print $1}'");
            $pipe->command("egrep -v 'List|Name|--|\||\(|dev|hml|__|_2'");
        });

        $total = preg_split('/\n/', $result->output());

        foreach ($total as $p) {
            if (strlen($p)) {
                $this->databases[] = $p;
            }
        }

        return Inertia::render('Dashboard', [
            'databases' => $total
        ]);
    }

    public function store(DatabaseRequest $request)
    {

        return back()->with(['messageApi' => 'Minha mensagem personalizada']);

        return back()->withErrors([
            'databaseSelected' => 'Store funcionando'
        ]);
    }
}
