<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $conferences = [
            [
                'id' => 1,
                'name' => 'Laravel Workshop',
                'date' => '2026-03-10',
                'clients' => ['Jonas', 'Petras']
            ],
            [
                'id' => 2,
                'name' => 'PHP Conference',
                'date' => '2026-04-05',
                'clients' => ['Ona', 'Maryte']
            ],
        ];

        return view('employee.conferences', compact('conferences'));
    }

    public function show($id)
    {
        $allConferences = [
            1 => [
                'id' => 1,
                'name' => 'Laravel Workshop',
                'description' => 'Learn Laravel basics and advanced topics.',
                'date' => '2026-03-10',
                'location' => 'Vilnius, LT',
                'clients' => ['Jonas', 'Petras']
            ],
            2 => [
                'id' => 2,
                'name' => 'PHP Conference',
                'description' => 'Discuss modern PHP development practices.',
                'date' => '2026-04-05',
                'location' => 'Kaunas, LT',
                'clients' => ['Ona', 'Maryte']
            ],
        ];

        if (!isset($allConferences[$id])) {
            abort(404);
        }

        $conference = $allConferences[$id];

        return view('employee.show', compact('conference'));
    }
}