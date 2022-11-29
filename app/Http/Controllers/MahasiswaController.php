<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MahasiswaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function getAllMahasiswa()
    {
        $mahasiswas = Mahasiswa::with('prodi')->get();

        return response()->json([
            'success' => true,
            'message' => 'retrieve all mahasiswa',
            'mahasiswa' => $mahasiswas,
        ], 200);
    }

    public function getMahasiswaByToken(Request $request)
    {
        $idMahasiswa = Mahasiswa::where('token', $request->header('token'))->first(['nim']);
        $dataMahasiswa = Mahasiswa::find($idMahasiswa);

        if(!$dataMahasiswa){
            return response()->json([
                'success' => false,
                'message' => "failed to retrieve mahasiswa: " . $request->token . " by token",
            ], 200);
        }
        return response()->json([
            'success' => true,
            'message' => 'retrieve mahasiswa by token',
            'mahasiswa' => $dataMahasiswa,
        ], 200);
    }

    // public function getMahasiswaByToken(Request $request)
    // {

    //     $mahasiswa = Mahasiswa::where('token', $token)->first();
    //     return response()->json([
    //         'success' => true,
    //         'message' => 'retrieve mahasiswa by token',
    //         'mahasiswa' => $mahasiswa,
    //     ], 200);
    // }

    public function getMahasiswaByNim(Request $request){
        $mahasiswa = Mahasiswa::with('matakuliah')->find($request->nim);

        return response()->json([
            'success' => true,
            'message' => 'Retrieve Mahasiswa By Nim',
            'mahasiswa' => $mahasiswa,
        ]);
    }

    public function addMatakuliah(Request $request){
        $mahasiswa = Mahasiswa::find($request->nim);

        $mahasiswa->matakuliah()->attach($request->mkId);

        return response()->json([
            'success' => true,
            'message' => 'Matakuliah added to Mahasiswa'
        ]);
    }

    public function deleteMatakuliah(Request $request){
        $mahasiswa = Mahasiswa::find($request->nim);

        $mahasiswa->matakuliah()->detach($request->mkId);

        return response()->json([
            'success' => true,
            'message' => 'Matakuliah deleted from Mahasiswa'
        ]);
    }
}
