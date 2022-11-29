<?php

namespace App\Http\Controllers;

use App\Models\Matakuliah;

class MataKuliahController extends Controller
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

    public function getMatakuliah(){
        $matakuliahs = Matakuliah::all();

        return response()->json([
            'success' => true,
            'message' => 'retrieve all prodi',
            'matakuliah' => $matakuliahs,
        ], 200);
    }
}
