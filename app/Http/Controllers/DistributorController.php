<?php

namespace App\Http\Controllers;

use App\Distributor;
use Illuminate\Http\Request;

class DistributorController extends Controller
{

    public function index()
    {
        try {
            $result = Distributor::All();
        } catch (\Throwable $th) {
            return abort(500, $th);
        }

        return view('distributor', [
            'distributor' => $result
        ]);
    }

    public function create()
    {
        return view('distributor.create');
    }

    public function store(Request $request)
    {
        $findDistributor = Distributor::where('nama', $request->nama)->get();
        if (sizeof($findDistributor)!=0) {
            return abort(400);
        }

        try {
            $result = Distributor::create([
                'nama' => $request->nama,
                'alamat' => $request->alamat,
            ]);
        } catch (\Throwable $th) {
            return abort(500, $th);
        }

        return redirect()->route('distributor');
    }

    public function edit($id)
    {
        try {
            $result = Distributor::find($id);
        } catch (\Throwable $th) {
            return abort(500, $th);
        }

        if ($result==null) {
            return abort(404);
        }

        return view('distributor.edit', [
            'distributor' => $result
        ]);
    }

    public function update(Request $request, $id)
    {
        $findDistributor = Distributor::where('nama', $request->nama)->get();
        if (sizeof($findDistributor)!=1) {
            return abort(400);
        }

        try {
            $findDistributor->update([
                'nama' => $request->nama,
                'alamat' => $request->alamat,
            ]);
        } catch (\Throwable $th) {
            return abort(500, $th);
        }

        return redirect()->route('distributor');
    }

    public function destroy($id)
    {
        try {
            Distributor::destroy($id);
        } catch (\Throwable $th) {
            return abort(500, $th);
        }

        return redirect()->route('distributor');
    }
}
