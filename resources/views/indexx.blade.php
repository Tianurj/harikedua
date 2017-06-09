<!DOCTYPE html>
<html>
<head>
	<title>Ini Halaman Baru</title>
</head>
<body>
	<h1>Daftar Nama: </h1>

	@foreach ($data as $datas)
		<li>{{ $datas }}</li>
	@endforeach

</body>
</html>