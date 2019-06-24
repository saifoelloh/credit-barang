<?php

namespace App\Http\Controllers;

use App\Barang;
use App\Distributor;
use Illuminate\Http\Request;

class BarangController extends Controller
{

    public function index()
    {
        $barangs = Barang::with('distributor')->get();

        return view('layouts.barang.index', [
            'barangs' => $barangs
        ]);
    }

    public function create()
    {
        $distributors = Distributor::All();

        return view('layouts.barang.tambah', [
          'distributors' => $distributors,
        ]);
    }

    public function store(Request $request)
    {
        $findItem = Barang::where('kode', $request->kode)->get();
        if (sizeof($findItem)) {
            return abort(404);
        }

        dd($request->distributorId);
        $findDistributor = Distributor::find($request->distributorId);

        try {
            $findDistributor->barangs()->create([
                'kode' => $request->kode,
                'nama' => $request->nama,
                'harga' => $request->harga,
                'jumlah' => $request->jumlah,
            ]);
        } catch (\Throwable $th) {
            return abort(500, $th);
        }

        return redirect()->route('barang');
    }

    public function edit($id)
    {
        try {
            $result = Barang::find($id);
        } catch (\Throwable $th) {
            return abort(500, $th);
        }

        return view('barang.edit', [
            'barang' => $result
        ]);
    }

    public function update(Request $request, $id)
    {
        $findItem = Barang::where('kode', $id)-get();
        if (sizeof($findItem)) {
            return abort(404);
        }

        $findDistributor = Distributor::find($request->distributorId);
        if ($findItem[0]->id!=$findDistributor->id) {
            return abort(403);
        }

        try {
            $findDistributor->barang()->update([
                'kode' => $request->kode,
                'nama' => $request->nama,
                'harga' => $request->harga,
                'jumlah' => $request->kode,
            ]);
        } catch (\Throwable $th) {
            return abort(500, $th);
        }

        return redirect()->route('barang');
    }

    public function destroy($id)
    {
        $findItem = Barang::where('kode', $id)-get();
        if (sizeof($findItem)) {
            return abort(404);
        }

        try {
            $findItem->delete();
        } catch (\Throwable $th) {
            return abort(500, $th);
        }

        return redirect()->action('barang');
    }
}
