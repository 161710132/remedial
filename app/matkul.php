<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class matkul extends Model
{
    protected $table = 'matkuls';
    protected $fillable = array('nama_matkul','kkm');

        public function mahasiswa()
    {
    	return $this->belongsToMany('App\mahasiswa','matkul_mahasiswas','id_matkul','id_mahasiswa');
    }
}
