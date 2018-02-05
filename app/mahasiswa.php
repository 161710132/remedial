<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    protected $table =  'mahasiswas' ;

    protected $fillable = array('nama_mahasiswa','nis','id_dosen','id_jurusan');

    public function wali()
    {
    	return $this->hasOne('App\wali','id_mahasiswa');
    }
        public function dosen()
    {
    	return $this->belongsTo('App\dosen','id_dosen');
    }
        public function jurusan()
    {
    	return $this->belongsTo('App\jurusan','id_jurusan');
    }
        public function matkul()
    {
    	return $this->belongsToMany('App\matkul','matkul_mahasiswas','id_mahasiswa','id_matkul');
    }
}
