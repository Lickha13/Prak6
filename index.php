 <html>
<head>
	<title></title>
</head>
<body>
    
	<h2>SELAMAT DATANG</h2>
    <!--membuat link -->
    <a href="tambah.php">Tambah Data Pegawai</a><BR></BR>
	<br/>
    <!--membuat tabel dengan border 1-->
	<table border="1">
		<tr>  <!--tabel pegawai-->
			<th>NO</th>
			<th>Nama</th>
			<th>No. Telpun</th>
			<th>Alamat</th>
			<th>Departemen</th>
		</tr>
		<?php 
		include 'koneksi.php';//koneksi
		$no = 1;//untuk id 
		$data = mysqli_query($con,"SELECT * FROM tb_pegawai"); //membuat printah ke mysql
		while($d = mysqli_fetch_array($data)){ //menangkap data
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['notelp']; ?></td>
				<td><?php echo $d['alamat']; ?></td>
                <td><?php echo $d['departemen']; ?></td>
				<td> <!--membuat link-->
                <a href="edit.php?id=<?php echo $d['id']; ?>">Edit</a>
                <a href="hapus.php?id=<?php echo $d['id']; ?>">Hapus</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>
