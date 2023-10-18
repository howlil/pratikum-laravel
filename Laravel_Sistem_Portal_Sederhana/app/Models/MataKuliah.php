<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MataKuliah extends Model
{
    use HasFactory;

    protected $table = 'mata_kuliah';
    protected $primaryKey = 'kode';
    public $incrementing = false;
    protected $KeyType = 'string';
    protected $fillable = ['kode','nama','sks'];

    public function Krs(){
        return $this->hasMany(Krs::class,'kode_matkul','kode');

    }
}
