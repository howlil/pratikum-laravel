<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Krs;
use App\Models\Mahasiswa;
use App\Models\MataKuliah;
use App\Models\Kelas;
use Illuminate\Database\Eloquent\Builder;

class KrsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $krs = Krs::All();
        $matkul = MataKuliah::All();

        return view('user.study', compact('krs','matkul'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validasi = $request->validate([
            'kode_matkul'=>'required',
            'nama_dosen'=>'required',
            'ruang'=>'required',
            'jadwal'=>'required',
            'periode'=>'required',


        ]);
            Krs::create($validasi);
            return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $krs = Krs::find($id);

        $list_mhs_kelas = Mahasiswa::whereHas('krs', function(Builder $query) use($id){
            $query->where('krs.id', '=',$id);
        })->get();

        $list_mhs_blm_terdaftar =Mahasiswa::whereDoesntHave('krs', function($query) use($id){
            $query->where('krs.id',$id);
        })->get();

        return view('user.detail', compact('krs', 'list_mhs_kelas', 'list_mhs_blm_terdaftar'));

    }

    public function store_mhs(Request $request){

            $validasi = $request->validate([
           'id_krs'=>'required',
            'nim_mhs'=>'required',


        ]);
        Kelas::create($validasi);
         return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy_mhs($id_krs, $nim_mhs)
    {
        Kelas::where('id_krs',$id_krs)->where('nim_mhs',$nim_mhs)->delete();
        return redirect()->back();
    }
}
