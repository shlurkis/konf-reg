<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index() {
        // Laikinas konferencijų sąrašas
        $conferences = [
            ['id' => 1, 'name' => 'Konferencija 1', 'description' => 'Aprašymas 1'],
            ['id' => 2, 'name' => 'Konferencija 2', 'description' => 'Aprašymas 2'],
        ];
        return view('employee.conferences', compact('conferences'));
    }
    
    public function show($id) {
        // Laikina konferencijos informacija
        $conference = ['id' => $id, 'name' => 'Konferencija ' . $id, 'description' => 'Aprašymas ' . $id];
        // Laikinas registruotų dalyvių sąrašas
        $participants = [
            ['name' => 'Jonas Jonaitis'],
            ['name' => 'Petras Petraitis'],
        ];
        return view('employee.conference', compact('conference', 'participants'));
    }
    
}
