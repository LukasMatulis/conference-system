<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $conferences = [
            ['id' => 1, 'name' => 'Laravel Workshop', 'date' => '2026-03-10'],
            ['id' => 2, 'name' => 'PHP Conference', 'date' => '2026-04-05'],
        ];

        return view('client.conferences', compact('conferences'));
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
            ],
            2 => [
                'id' => 2,
                'name' => 'PHP Conference',
                'description' => 'Discuss modern PHP development practices.',
                'date' => '2026-04-05',
                'location' => 'Kaunas, LT',
            ],
        ];

        if (!isset($allConferences[$id])) {
            abort(404);
        }

        $conference = $allConferences[$id];

        return view('client.show', compact('conference'));
    }
}