<!DOCTYPE html>
<html>
<head>
	<title>Muhammad Ramadana</title>
</head>
<body>
 
	<h2>DAFTAR DATA PEGAWAI </h2>
	<br/>
	<a href="tambah.php">+ TAMBAH PEGAWAI</a>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>NO</th>
			<th>Nama</th>
			<th>NIP</th>
			<th>NoHp</th>
			<th>Email</th>
			<th>OPSI</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from pegawai");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['nip']; ?></td>
				<td><?php echo $d['nohp']; ?></td>
				<td><?php echo $d['email']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
					<a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>