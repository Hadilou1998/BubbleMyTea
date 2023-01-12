<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InscriptionUser extends Controller
{
    public function show($id)
    {
        dd($id);
        return view('user' ,[ 
        'name' => 'NomClient'

    
        ]);
    }
}
