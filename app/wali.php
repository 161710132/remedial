<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class wali extends Model
{
    protected $table = 'walis';
    protected $fillable = array('nama','alamat','id_mahasiswa');

        public function mahasiswa()
    {
    	return $this->belongsTo('App\mahasiswa','id_mahasiswa');
    }
}
