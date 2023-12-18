<?php

namespace App\Http\Controllers;

use App\Pegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PegawaiController extends Controller
{
    public function tes(){
        return view('pegawai.tes');
    }
    
    public function index()
    {
        $pegawais = Pegawai::all();

        return response()->json([
            'success' => true,
            'message' => "Berhasil mengambil list semua Pegawai!",
            'record' => $pegawais
        ], 200);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama'     => 'required',
            'jabatan'   => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Silahkan isi parameter yang masih kosong!',
                'data'    => $validator->errors()
            ], 400);
        }

        $pegawai = new Pegawai();
        $pegawai->nama = $request->nama;
        $pegawai->jabatan = $request->jabatan;
        $saved = $pegawai->save();

        if($saved){
            return response()->json([
                'success' => true,
                'message' => 'Berhasil menambah data pegawai!',
                'data' => $pegawai
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Gagal menambah data pegawai!',
                'data' => $pegawai
            ], 500);
        }
    }

    public function show($id)
    {
        $pegawai = Pegawai::findOrFail($id);

        if ($pegawai) {
            return response()->json([
                'success' => true,
                'message' => 'Detail Pegawai!',
                'data'    => $pegawai
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Pegawai Tidak Ditemukan!',
                'data'    => ''
            ], 404);
        }
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'nama'     => 'required',
            'jabatan'   => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Silahkan isi parameter yang masih kosong!',
                'data'    => $validator->errors()
            ], 400);
        }

        $pegawai = Pegawai::findOrFail($id);
        $pegawai->nama = $request->nama;
        $pegawai->jabatan = $request->jabatan;
        $saved = $pegawai->save();

        if($saved){
            return response()->json([
                'success' => true,
                'message' => 'Berhasil mengubah data pegawai!',
                'data' => $pegawai
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Gagal mengubah data pegawai!',
                'data' => $pegawai
            ], 500);
        }
    }

    public function destroy($id)
    {
        $pegawai = Pegawai::findOrFail($id);
        $pegawai->delete();

        return response()->json([
            'success' => true,
            'message' => 'berhasil menghapus data pegawai!',
            'data' => $pegawai
        ], 200);
    }
}
