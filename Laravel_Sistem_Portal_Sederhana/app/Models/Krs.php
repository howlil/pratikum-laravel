<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Krs extends Model
{
    use HasFactory;

    protected $table = 'krs';
    protected $guarded = ['id'];


    public function mata_kuliah(){

        return $this->belongsTo(MataKuliah::class,'kode_matkul', 'kode');
    }


    public function mahasiswa()
    {
        return $this-> belongsToMany(Mahasiswa::class, 'kelas' , 'id_krs' , 'nim_mhs');
    }

}
