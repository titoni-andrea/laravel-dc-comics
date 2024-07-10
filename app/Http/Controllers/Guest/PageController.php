<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Fumetto;

class PageController extends Controller
{
    public function home() {

        $fumetti = Fumetto::all();
        
        $dati = [
            "fumetti" => $fumetti
        ];

        return view('home', $dati);
    }
}
