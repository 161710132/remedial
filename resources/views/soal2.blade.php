<!DOCTYPE html>
<html>
	<head>

		<title>Soal 2</title>

	</head>
	<body class="container">
		<center><h4><big>Soal 2</big></h4><h3><small>One To One</small></h3></center>
			@foreach ($wali as $dendi)
				<h3> <small>Nama Wali: {{$dendi->nama}}</small><br>
					<li>Nama Mahasiswa :{{$dendi->mahasiswa->nama_mahasiswa}}
					</li>
				</h3>
				<hr/>
			@endforeach
		</div>
	</body>
</html>