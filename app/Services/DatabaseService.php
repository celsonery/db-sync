<?php

namespace App\Services;

use Illuminate\Process\Pipe;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Process;

class DatabaseService
{
    public function __construct(
        protected string $pgHost = '',
        protected string $pgUser = ''
    ) {
        $this->pgHost = env('PGHOST');
        $this->pgUser = env('PGUSERNAME');
    }

    public function index(): array
    {
        logs()->debug('Iniciando busca por databases');
        $result = Process::pipe(function (Pipe $pipe) {
            $pipe->command("/usr/bin/psql -h {$this->pgHost} -U {$this->pgUser} -l");
            $pipe->command("awk '{print $1}'");
            $pipe->command("egrep -v 'List|Name|--|\||\(|dev|hml|__|_2'");
        });

        $total = preg_split('/\n/', $result->output());
        $total = array_filter($total);

        logs()->debug('Total de databases encontrados em ' . $this->pgHost . ': ' . count($total) . ' com o usuário: ' . $this->pgUser);

        return $total;
    }

    public function execute(string $database): string
    {
        logs()->debug("Inciando sincronização da base: {$database}");

        if ($this->dropOrCreate($database)) {
            $this->sync($database);
        }

        return redirect()->back()
            ->with([
                'message' => "Datadase {$database} sincronizao com {$database}_dev com sucesso!",
            ]);
    }

    private function dropOrCreate(string $database): bool
    {
        Log::debug("Procurando se banco {$database}_dev já existe...");

        $process = Process::pipe(function (Pipe $pipe) use ($database) {
            $pipe->command("/usr/bin/psql -h {$this->pgHost} -U {$this->pgUser} -l");
            $pipe->command("grep {$database}_dev");
        });

        if ($process->successful()) {
            logs()->debug('Database encontrado, removendo!: ' . $process->output());
            Process::run("/usr/bin/psql -h {$this->pgHost} -U {$this->pgUser} -c \"DROP DATABASE {$database}_dev with (force)\"");
        }

        logs()->debug('Criando Database: ' . $process->output());
        $result = Process::run("/usr/bin/psql -h {$this->pgHost} -U {$this->pgUser} -c \"CREATE DATABASE {$database}_dev\"");

        return $result->successful();

        return false;
    }

    private function sync(string $database): void
    {
        $process = Process::pipe(function (Pipe $pipe) use ($database) {
            $pipe->command("/usr/bin/pg_dump -h {$this->pgHost} -U {$this->pgUser} -v {$database}");
            $pipe->command("/usr/bin/psql -h {$this->pgHost} -U {$this->pgUser} {$database}_dev");
        });

        $process->successful()
            ? logs()->debug('Sincronização executada com sucesso')
            : logs()->debug('Erro ao tentar sincronizar!');
    }
}
