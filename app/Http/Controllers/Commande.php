<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Commande extends Controller
{
    public function display() 
    {
        $results = DB::table('recipes')
            ->select('recipes.name as rn', 'recipes.description as rd', 'recipes.price as rp', 'teas.image_url as ti', 'teas.name as tn', 'poppings.image_url as pi', 'poppings.name as pn', 'milks.name as mn', 'purees.name as pun')
            ->join('teas', 'recipes.teaId', '=', 'teas.id')
            ->join('poppings', 'recipes.poppingId', '=', 'poppings.id')
            ->join('purees', 'recipes.pureeId', '=', 'purees.id')
            ->join('milks', 'recipes.milkId', '=', 'milks.id')
            ->get();

        return view('commande_user', compact('results'));
    }
}
