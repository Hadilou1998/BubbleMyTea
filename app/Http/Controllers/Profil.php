<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Hash;
use App\Models\User;


// use App\Http\Controllers\DB;

class Profil extends Controller
{
    public function profil(){
        $users = DB::table('users')
            ->select('*')
            ->where('id', '=', 2)
            ->get();

        $phoneNumbers = DB::table('phones')
            ->join('users','phones.id','=','users.telephoneId')
            ->select('*')
            ->get();
        return view('profil', compact('users','phoneNumbers'));

    }

    public function update(Request $request){
        $update = DB::table('users')
              ->where('id', 2)
              ->update(['first_name' => $request->fname, 'last_name' => $request->lname, 'email' => $request->email]);

        $users = DB::table('users')
              ->select('*')
              ->where('id', '=', 2)
              ->get();

        $phoneNumbers = DB::table('phones')
              ->join('users','phones.id','=','users.telephoneId')
              ->select('*')
              ->get();

        return view('profil', compact('users','phoneNumbers'));

    
            // Profil.profil();

    }
}
