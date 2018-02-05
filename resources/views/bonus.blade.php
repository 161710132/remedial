<!DOCTYPE html>
<html>
	<head>

		<title>Bonus</title>

	</head>
	<body class="container">
			<center><strong>Bonus</strong></h3></center>
			@foreach ($mahasiswa as $dendi)
				<h3> <small><strong>Nama Mahasiswa : </strong>{{$dendi->nama_mahasiswa}}</small><br>
				<small><strong>Nis :</strong> [{{$dendi->nis}}]</small></h3>


					<li><strong>Nama Wali :</strong> {{$dendi->wali->nama}}</li>
					<li><strong>Alamat Wali : </strong>{{$dendi->wali->alamat}}</li>					

				</h4>
				<hr/>
				<h4>
					<li><strong>Nama Dosen :</strong> {{$dendi->dosen->nama}}</li>
					<li><strong>Jurusan : </strong>{{$dendi->jurusan->nama_jurusan}}</li>
					<li><strong>Mata Kuliah :</strong> 
					@foreach($dendi->matkul as $navi) 
					{{$navi->nama_matkul}},
					@endforeach
					</li>
					

				</h4>
				<hr/>
			@endforeach
		</div>
	</body>
</html>