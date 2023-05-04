<?php

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$jk = $_POST['jk'];
$alamat = $_POST['alamat'];
$nohp = $_POST['nohp'];
$email = $_POST['email'];

include "koneksi.php";

$qry = "UPDATE mahasiswa SET 
        nama = '$nama',
        jurusan = '$jurusan',
        jk = '$jk',
        alamat = '$alamat',
        nohp = '$nohp',
        email = '$email'
        WHERE nim = '$nim'
        ";

$exec = mysqli_query($con, $qry) or die(mysqli_error($con));

if($exec){
    echo "<script>alert('Data berhasil diupdate'); 
    window.location = 'form.php';</script>";
}else{
    echo "<script>alert('Data gagal diupdate');</script>";
}
