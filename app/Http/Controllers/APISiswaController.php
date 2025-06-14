<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa; // 1. penggunaaan model siswa

class APISiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // 2. method untuk merespon permintaan baca data siswa

        $siswa = Siswa::get();
        return response()->json($siswa, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // 3. method untuk merespon permintaan create data siswa baru

        $siswa = new Siswa();
        $siswa->nama = $request->nama;
        $siswa->nis = $request->nis;
        $siswa->gender = $request->gender;
        $siswa->alamat = $request->alamat;
        $siswa->kontak = $request->kontak;
        $siswa->email = $request->email;
        $siswa->status_lapor_pkl = $request->status_lapor_pkl;
        $siswa->foto = $request->foto;
        $siswa->save();
        return response()->json($siswa, 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // 4. method untuk respon proses baca data salah satu siswa

        $siswa = Siswa::find($id);
        return response()->json($siswa, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // 5. method untuk respon update data siswa

        $siswa = Siswa::find($id);
        $siswa->nama = $request->nama;
        $siswa->nis = $request->nis;
        $siswa->gender = $request->gender;
        $siswa->alamat = $request->alamat;
        $siswa->kontak = $request->kontak;
        $siswa->email = $request->email;
        $siswa->status_lapor_pkl = $request->status_lapor_pkl;
        $siswa->foto = $request->foto;
        $siswa->save();
        return response()->json($siswa, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // 6. method untuk respon proses hapus data salah satu siswa

        Siswa::destroy($id);
        return response()->json(["message"=>"behasil terhapus"], 200);
    }
}
