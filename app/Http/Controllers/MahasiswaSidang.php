<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaSidang extends Controller
{
    public function index()
    {
        $mahasiswa = \App\Models\TabelMahasiswa::all();
        return response()->json($mahasiswa);
    }
    public function detail($id)
    {
        $mahasiswa = \App\Models\TabelMahasiswa::find($id);
        return response()->json($mahasiswa);
    }
    public function update($id, Request $request)
    {
        $mahasiswa = \App\Models\TabelMahasiswa::find($id);
//        feedback, nilai, status
        $mahasiswa->feedback = $request->feedback;
        $mahasiswa->nilai = $request->nilai;
        $mahasiswa->status = $request->status;
        $mahasiswa->save();
        return response()->json($mahasiswa);
    }
}
