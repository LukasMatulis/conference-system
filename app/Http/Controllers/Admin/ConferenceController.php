<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConferenceController extends Controller
{
    private $conferences = [
        1 => ['id'=>1, 'name'=>'Laravel Workshop', 'description'=>'Learn Laravel basics', 'date'=>'2026-03-10', 'location'=>'Vilnius, LT'],
        2 => ['id'=>2, 'name'=>'PHP Conference', 'description'=>'Discuss PHP practices', 'date'=>'2026-04-05', 'location'=>'Kaunas, LT'],
    ];

    public function index()
    {
        $conferences = $this->conferences;
        return view('admin.conferences.index', compact('conferences'));
    }

    public function create()
    {
        return view('admin.conferences.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'description'=>'required',
            'date'=>'required',
            'location'=>'required',
        ]);

        return redirect()->route('conferences.index');
    }

    public function edit($id)
    {
        $conference = $this->conferences[$id] ?? abort(404);
        return view('admin.conferences.edit', compact('conference'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required',
            'description'=>'required',
            'date'=>'required',
            'location'=>'required',
        ]);

        return redirect()->route('conferences.index');
    }

    public function destroy($id)
    {
        return redirect()->route('conferences.index');
    }
}