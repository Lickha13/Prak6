  <?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$notelp = $_POST['notelp'];
$alamat = $_POST['alamat'];
$departemen = $_POST['departemen'];
 
// update data ke database
mysqli_query($con,"UPDATE tb_pegawai SET nama='$nama', notelp='$notelp', alamat='$alamat', departemen='$departemen' WHERE id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location: index.php");
?>
