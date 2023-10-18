<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MataKuliah;

class MataKuliahKontroller extends Controller
{
    public function index()
    {
        $matkul = MataKuliah::all();
        return view('user.matkul', compact('matkul'));

    }
}
