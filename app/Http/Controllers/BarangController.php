<?php

namespace App\Http\Controllers;

use App\Barang;
use App\Distributor;
use Illuminate\Http\Request;

class BarangController extends Controller
{

    public function index()
    {
        $barangs = Barang::All();
        $barangs->each(function($item, $key) {
            return $item->distributor;
        });

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
        $findDistributor = Distributor::find($request->distrib);

        try {
            $findDistributor->barangs()->create([
                'kode' => $request->kode,
                'nama' => $request->nama,
                'harga' => $request->harga,
                'jumlah' => $request->jumlah,
            ]);
        } catch (\Throwable $th) {
            dd($th);
            return abort(500, $th);
        }

        return redirect()->route('barang');
    }

    public function edit($id)
    {
        $distributors = Distributor::All();
        try {
            $result = Barang::find($id);
        } catch (\Throwable $th) {
            return abort(500, $th);
        }

        return view('layouts.barang.edit', [
            'barang' => $result,
            'distributors' => $distributors,
        ]);
    }

    public function update(Request $request, $id)
    {
        $findItem = Barang::find($id);
        if ($findItem==null) {
            return abort(404);
        }

        try {
            $findItem->update([
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
