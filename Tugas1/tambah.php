<!DOCTYPE html>
<html>
<head>
	<title>Muhammad Ramadana</title>
</head>
<body>
 
	<h2>DAFTAR DATA PEGAWAI</h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>TAMBAH DATA PEGAWAI</h3>
	<form method="post" action="tambah_aksi.php">
		<table>
			<tr>			
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>NIP</td>
				<td><input type="number" name="nip"></td>
			</tr>
			<tr>
				<td>NoHp</td>
				<td><input type="number" name="nohp"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
</body>
</html>