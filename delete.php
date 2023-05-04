<?php

$nim = $_GET['nim'];
include "koneksi.php";

$qry = "DELETE FROM mahasiswa WHERE nim = '$nim'";
$exec = mysqli_query($con, $qry);
if($exec){
    echo "<script>alert('Data berhasil dihapus'); 
    window.location = 'form.php';</script>";
}else{
    echo "<script>alert('Data gagal dihapus');</script>";
}