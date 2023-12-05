<?php

namespace App\Http\Controllers;

use App\Models\Pengawas;
use Illuminate\Http\Request;

class PengawasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pengawas = Pengawas::get();
        return view('pengawas.index', compact('pengawas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pengawas.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Pengawas::create([
            'nis' => $request->nis,
            'nama' => $request->nama,
            'tanggal' => $request->tanggal,
        ]);

        return redirect()->route('pengawas.index');
    }

    public function edit(string $id)
    {
        $pengawas = Pengawas::findOrFail($id);
        return view('pengawas.edit', compact('pengawas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pengawas = Pengawas::findOrFail($id);
        $pengawas->update([
            'nis' => $request->nis,
            'nama' => $request->nama,
            'tanggal' => $request->tanggal,
        ]);
         return redirect()->route('pengawas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pengawas = Pengawas::findOrFail($id);
        $pengawas->delete();
        return redirect()->route('pengawas.index');
    }
}
