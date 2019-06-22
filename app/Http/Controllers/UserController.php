<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::All();

        return view('layouts.pegawai.index', [
            'users' => $users
        ]);
    }

    public function create()
    {
        return view('welcome');
    }

    public function store(Request $request)
    {
        $findUser = User::where('email', $request->email)->get();
        if (sizeof($findUser)!=0) {
            return abort(400);
        }

        try {
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'alamat' => $request->alamat,
                'no_telp' => $request->no_telp,
            ]);
        } catch (\Throwable $th) {
            return abort(500, $th);
        }

        return redirect()->route('pegawai');
    }


    public function edit($id)
    {
        try {
            $user = User::find($id);
        } catch (\Throwable $th) {
            return abort(500, $th);
        }

        return view('welcome', [
            'user' => $user,
        ]);
    }

    public function update(Request $request, $id)
    {
        $findUser = User::find($id);
        if ($findUser==null) {
            return abort(404);
        }

        try {
            $findUser->update([
                'name' => $request->name,
                'email' => $request->email,
                'alamat' => $request->alamat,
                'no_telp' => $request->no_telp,
            ]);
        } catch (\Throwable $th) {
            return abort(500, $th);
        }

        return redirect()->route('pegawai');
    }

    public function destroy($id)
    {
        try {
            User::destroy($id);
        } catch (\Throwable $th) {
            return abort(500, $th);
        }

        return redirect()->route('pegawai');
    }
}
