<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function store(Request $request) {
        $name = $request->input('name');
        $cif = $request->input('cif');
        $tel = $request->input('telephone');
        $request->validate(['name' => 'required|min:3']);

        echo $name . "<br>" . $cif . "<br>" . $tel;
    }

}
