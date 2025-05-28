<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // 1. penggunaaan model user

class APIUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // 2. method untuk merespon permintaan baca data user

        $user = User::get();
        return response()->json($user, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // 3. method untuk merespon permintaan create data user baru

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();
        return response()->json($user, 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // 4. method untuk respon proses baca data salah satu user

        $user = User::find($id);
        return response()->json($user, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // 5. method untuk respon update data user

        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();
        return response()->json($user, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // 6. method untuk respon proses hapus data salah satu user

        User::destroy($id);
        return response()->json(["message"=>"behasil terhapus"], 200);
    }
}
