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
            'tanggal' => date('Y-m-d'),
        ]);

        return response()->json([
            'message' => 'Data ditambahkan'
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $presensi = Presensi::findOrFail($id);
        $presensi->update([
            'nis' => $request->nis ?? $presensi->nis,
            'nama' => $request->nama ?? $presensi->nama,
            'tanggal' => $request->tanggal ?? $presensi->tanggal,
        ]);
        $presensi->save();

        return response()->json([
            'message' => 'Data diperbarui',
            'presensi' => $presensi,
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $presensi = Presensi::findOrFail($id);
        $presensi->delete();

        return response()->json([
            'message' => 'Data dihapus',
        ], 200);
    }
}
