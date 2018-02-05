<?php

use Illuminate\Database\Seeder;
use App\dosen;
use App\jurusan;
use App\mahasiswa;
use App\matkul;
use App\wali;

class UlanganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dosens')->delete();
        DB::table('jurusans')->delete();
        DB::table('mahasiswas')->delete();
        DB::table('walis')->delete();
        DB::table('matkuls')->delete();
        DB::table('matkul_mahasiswas')->delete();

        $dosen1 = dosen::create(array(
        	'nama' => 'melan','nipd'=>'111','alamat'=>'Cupu','mata_kuliah'=>'ipa'
        ));
        $dosen2 = dosen::create(array(
        	'nama' => 'udin','nipd'=>'222','alamat'=>'Ranca kasiat','mata_kuliah'=>'ips'
        ));
        $this->command->info('Dosen Parantos Diisi !');

        $rpl = jurusan::create(array(
         	'nama_jurusan'=>'Rekayasa Perangkat Lunak'
         ));
        $tkr = jurusan::create(array(
         	'nama_jurusan'=>'Teknik Kendaraan Ringan'
         ));
        $elt = jurusan::create(array(
         	'nama_jurusan'=>'Elektro'
         ));
        $this->command->info('Jurusan Telah Diisi !');

        $melon = mahasiswa::create(array(
        'nama_mahasiswa'=> 'melon','nis'=>'00001','id_dosen'=>$dosen1->id,'id_jurusan'=> $rpl->id
        ));

        $iin = mahasiswa::create(array(
        'nama_mahasiswa'=> 'iin','nis'=>'00002','id_dosen'=>$dosen1->id,'id_jurusan'=> $tkr->id
        ));
        $batur = mahasiswa::create(array(
        'nama_mahasiswa'=> 'batur','nis'=>'00003','id_dosen'=>$dosen2->id,'id_jurusan'=> $elt->id
        ));

        $this->command->info('Mahasiswa Telah Diisi!');

        wali::create(array(
        'nama'=>'Bpk.sandi',
        'alamat'=>'rancamanyar',
        'id_mahasiswa'=>$melon->id
        ));
        wali::create(array(
        'nama'=>'Bpk.candra',
        'alamat'=>'bandung poek',
        'id_mahasiswa'=>$iin->id
        ));
        wali::create(array(
        'nama'=>'Bpk.Agung',
        'alamat'=>'baleendah',
        'id_mahasiswa'=>$batur->id
        ));

		$this->command->info('Wali Telah Diisi !');

		$ipa = matkul::create(array('nama_matkul'=>'ipa','kkm'=>'80'));
		$ips = matkul::create(array('nama_matkul'=>'ips','kkm'=>'85'));

		$melon->matkul()->attach($ipa->id);
        $melon->matkul()->attach($ips->id);
		$iin->matkul()->attach($ips->id);
		$batur->matkul()->attach($ipa->id);

		$this->command->info('Mahasiswa dan Mata Kuliah Telah Diisi !'); 
    }
}
