<?php //membuat koneksi

	//mengambil data dari database
    $con= mysqli_connect("localhost","root","", "datapegawai");

    //cek koneksi
    if(mysqli_connect_error()){ //jika eror tampilkan
        echo "failed to connect to Mysql: " . mysqli_connect_error();
       exit();
    }
?>
