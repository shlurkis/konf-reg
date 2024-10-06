<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    // Metodas, kuris grąžina visų konferencijų sąrašą
    public function index()
    {
        // Pavyzdinis duomenų masyvas
        $conferences = [
            ['id' => 1, 'name' => 'Konferencija 1', 'date' => '2024-10-15'],
            ['id' => 2, 'name' => 'Konferencija 2', 'date' => '2024-11-01'],
        ];

        return view('client.conferences.index', ['conferences' => $conferences]);
    }

    // Metodas, kuris grąžina vienos konferencijos informaciją
    public function show($id)
    {
        // Pavyzdinis konferencijos duomenų masyvas
        $conference = [
            'id' => $id,
            'name' => 'Konferencija ' . $id,
            'description' => 'Konferencijos aprašymas.',
            'date' => '2024-10-15',
        ];

        return view('client.conferences.show', ['conference' => $conference]);
    }

    // Metodas konferencijai užsiregistruoti
    public function register($id)
    {
        // Čia bus užsiregistravimo logika
        return "Užsiregistravote į konferenciją su ID: " . $id;
    }
}
