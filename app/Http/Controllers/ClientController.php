<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        // pvz duomenu masyvs
        $conferences = [
            ['id' => 1, 'name' => 'Konferencija 1', 'date' => '2024-10-15'],
            ['id' => 2, 'name' => 'Konferencija 2', 'date' => '2024-11-01'],
        ];
    
        return view('client.conferences.index', ['conferences' => $conferences]);
    }

    // fukcija grazina konferencijos stuff
    public function show($id)
    {
        // Pavyzdinis konferencijos duomenų masyvas
    $conference = [
        'id' => $id,
        'name' => 'Konferencija ' . $id,
        'description' => 'aprasymas :D',
        'date' => '2024-10-15',
        'location' => 'Vilnius, Lietuva'
    ];

    return view('client.conferences.show', ['conference' => $conference]);
    }

    // fukncija registracijai
    public function register($id)
    {
        
        return redirect('/client')->with('success', 'Sėkmingai užsiregistravote į konferenciją su ID: ' . $id);
    }
    
}
