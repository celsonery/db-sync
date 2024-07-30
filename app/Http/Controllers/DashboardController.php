<?php

namespace App\Http\Controllers;

use App\Http\Requests\DatabaseRequest;
use App\Services\DatabaseService;
use Illuminate\Http\RedirectResponse;
use Inertia\Inertia;
use Inertia\Response;

class DashboardController extends Controller
{
    public function __construct(private DatabaseService $service)
    {}

    public function index(): Response
    {
        $databases = $this->service->index();

        return Inertia::render('Dashboard', [
            'databases' => $databases,
        ]);
    }

    public function store(DatabaseRequest $request): RedirectResponse
    {
        $result = $this->service->execute($request['databaseSelected']);

        return back()->with([
            'message' => $result
        ]);
    }
}
