<?php

namespace App\Http\Controllers;

use App\Models\Presensi;
use Illuminate\Http\Request;

class PresensiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $presensi = Presensi::all();
        return response()->json([
            'presensi' => $presensi,
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Presensi::create([
            'nis' => $request->nis,
            'nama' => $request->nama,
            'tanggal' => $request->tanggal,
        ]);

        return redirect()->route('presensi.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $presensi = Presensi::findOrFail($id);
        return view('presensi.edit', compact('presensi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $presensi = Presensi::findOrFail($id);
        $presensi->update([
            'nis' => $request->nis,
            'nama' => $request->nama,
            'tanggal' => $request->tanggal,
        ]);

        return redirect()->route('presensi.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $presensi = Presensi::findOrFail($id);
        $presensi->delete();

        return redirect()->route('presensi.index');
    }
}
