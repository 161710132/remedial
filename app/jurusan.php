<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jurusan extends Model
{
    protected $table = 'jurusans';
	protected $fillable = array('nama_jurusan');

	public function mahasiswa()
	{
		return $this->hasMany('App\mahasiswa','id_jurusan');
	}
}
