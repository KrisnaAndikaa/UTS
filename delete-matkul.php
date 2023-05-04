<?php

$kode = $_GET['kode_matkul'];
include "koneksi.php";

$qry = "DELETE FROM matkul WHERE kode_matkul = '$kode'";
$exec = mysqli_query($con, $qry);
if($exec){
    echo "<script>alert('Data berhasil dihapus'); 
    window.location = 'form-matkul.php';</script>";
}else{
    echo "<script>alert('Data gagal dihapus');</script>";
}