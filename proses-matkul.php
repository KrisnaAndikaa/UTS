<?php

$kode = $_POST['kode_matkul'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$sks = $_POST['sks'];
$semester = $_POST['semester'];

include "koneksi.php";

$qry = "INSERT INTO matkul VALUE (
    '$kode', '$nama', '$jurusan', '$sks', '$semester'
)";

$exec = mysqli_query($con, $qry) or die (mysqli_error($con));

if($exec){
    echo "<script>alert('Data Berhasil Disimpan');
    window.location = 'form-matkul.php';</script>";
}
else{
    echo "<script>alert('Data Gagal Disimpan');</script>";
}

?>