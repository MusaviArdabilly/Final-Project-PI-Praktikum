<?php

namespace App\Http\Controllers;

use App\Models\Prodi;

class ProdiController extends Controller
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

    public function getProdi(){
        $prodis = Prodi::get()->all();

        return response()->json([
            'success' => true,
            'message' => 'retrieve all prodi',
            'prodi' => $prodis,
        ], 200);
    }
}
