<?php

$kode = $_POST['kode_matkul'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$sks = $_POST['sks'];
$semester = $_POST['semester'];

include "koneksi.php";

$qry = "UPDATE matkul SET 
        nama = '$nama',
        jurusan = '$jurusan',
        sks = '$sks',
        semester = '$semester'
        WHERE kode_matkul = '$kode'
        ";

$exec = mysqli_query($con, $qry) or die(mysqli_error($con));

if($exec){
    echo "<script>alert('Data berhasil diupdate'); 
    window.location = 'form-matkul.php';</script>";
}else{
    echo "<script>alert('Data gagal diupdate');</script>";
}
