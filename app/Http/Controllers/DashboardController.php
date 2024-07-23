<?php

namespace App\Http\Controllers;

use App\Http\Requests\DatabaseRequest;
use Inertia\Inertia;

class DashboardController extends Controller
{
    public function index()
    {
        return Inertia::render('Dashboard', [
            'databases' => [
                'bagarote_nfce',
                'db_sync',
                'meuteste',
                'postgres',
                'template0',
                'template1'
            ]
        ]);
    }

    public function store(DatabaseRequest $request)
    {
//        sleep(5);

        return back()->with(['messageApi' => 'Minha mensagem personalizada']);

        return back()->withErrors([
                'databaseSelected' => 'Store funcionando'
            ]);
    }
}
