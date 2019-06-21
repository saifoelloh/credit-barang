<?php

namespace App\Http\Controllers;

use App\Custommer;
use Illuminate\Http\Request;

class CustommerController extends Controller
{

    public function index()
    {
        try {
            $result = Custommer::All();
        } catch (\Throwable $th) {
            return abort(500, $th);
        }

        return view('custommer.index', [
            'custommers' => $result
        ]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $findCustommer = Custommer::where('email', $request->email)->get();
        if (sizeof($findCustommer)!=0) {
            return abort(400);
        }

        try {
            $result = Custommer::create([
                'nama' => $request->nama,
                'alamat' => $request->alamat,
                'no_telp' => $request->no_telp,
            ]);
        } catch (\Throwable $th) {
            return abort(500, $th);
        }

        return redirect()->route('custommer');
    }

    public function edit($id)
    {
        try {
            $result = Custommer::find($id);
        } catch (\Throwable $th) {
            return abort(500, $th);
        }

        if ($result==null) {
            return abort(404);
        }

        return view('custommer.edit', [
            'custommer' => $result
        ]);
    }

    public function update(Request $request, $id)
    {
        $findCustommer = Custommer::where('email', $request->email)->get();
        if (sizeof($findCustommer)!=1) {
            return abort(400);
        }

        try {
            $findCustommer->update([
                'nama' => $request->nama,
                'alamat' => $request->alamat,
                'no_telp' => $request->no_telp,
            ]);
        } catch (\Throwable $th) {
            return abort(500, $th);
        }

        return redirect()->route('custommer');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Custommer  $custommer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            Custommer::delete($id);
        } catch (\Throwable $th) {
            return abort(500, $th);
        }

        return redirect()->route('custommer');
    }
}
