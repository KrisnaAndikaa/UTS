<?php

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$jk = $_POST['jk'];
$alamat = $_POST['alamat'];
$nohp = $_POST['nohp'];
$email = $_POST['email'];

include "koneksi.php";

$qry = "INSERT INTO mahasiswa VALUE (
    '$nim', '$nama', '$jurusan', '$jk', '$alamat', '$nohp', '$email'
)";

$exec = mysqli_query($con, $qry) or die (mysqli_error($con));

if($exec){
    echo "<script>alert('Data Berhasil Disimpan');
    window.location = 'form.php';</script>";
}
else{
    echo "<script>alert('Data Gagal Disimpan');</script>";
}

?>