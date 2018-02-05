<!DOCTYPE html>
<html>
	<head>

		<title>Soal 1</title>
		
	</head>
	<body class="container">
		<center><h4><big>Soal 1</big></h4><h3><small>One To Many</small></h3></center>
			@foreach ($dosen as $temp)
				<h3> <small>Nama Dosen: {{$temp->nama}}</small><br>
					<li>Nama Mahasiswa : 
					@foreach($temp->mahasiswa as $tampung) 
					{{$tampung->nama_mahasiswa}},
					@endforeach
					</li>
				</h4>
				<hr/>
			@endforeach
		</div>
	</body>
</html>