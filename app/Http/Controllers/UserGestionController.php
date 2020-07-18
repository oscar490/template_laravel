<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserGestionController extends Controller
{
    public function create() {
        return view('users.create.create');
    }

    public function store(Request $request) {
        dd($request->all());
    }
}
