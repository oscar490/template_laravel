<?php

namespace App\Http\Controllers;

use App\User;
use App\Rol;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserGestionController extends Controller
{
    public function create() {
        $roles = Rol::all();
        return view('users.create.create', ['roles' => $roles]);
    }

    public function store(Request $request) {
        $datos = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            'role_id' => ['required', 'exists:roles,id']
        ]);



        $datos['password'] = Hash::make($datos['password']);

        User::create($datos);

        return redirect()->back();
    }

    public function index() {
        $users = User::all();

        return view('users.index.index', ['users' => $users]);
    }
}
