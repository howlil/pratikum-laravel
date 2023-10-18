<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $table = 'mahasiswa';
    protected $primaryKey = 'nim';
    public $incrementing = false;
    protected $KeyType = 'string';
    protected $fillable = ['nim','nama','jenis_kelamin','alamat'];

    public function krs(){
        return $this->belongsToMany(krs::class, 'kelas', 'nim_mhs', 'id_krs');

    }
}
