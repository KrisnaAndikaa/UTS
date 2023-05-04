<?php

$kode = $_GET['kode_matkul'];
include "koneksi.php";
$qry = "SELECT * FROM matkul WHERE kode_matkul = '$kode'";
$exec = mysqli_query($con,$qry);
$data = mysqli_fetch_assoc($exec);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Matakuliah</title>
  <style>
    body {
    font-family: Helvetica, Arial, sans-serif;
    }

    ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
    }

    li {
    float: left;
    }

    li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    }

    li a:hover:not(.active) {
    background-color: #111;
    }

    .active {
    background-color: #04AA6D;
    }

    input[type=text], [type=email], select, textarea {
    width: 300%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    }

    input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    }

    input[type=submit]:hover {
    background-color: #45a049;
    }

    div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
    }

    .table table {
    border-collapse: collapse;
    width: 100%;
    }

    .table th {
    text-align: left;
    padding: 8px;
    }

    .table td {
    text-align: left;
    padding: 5px; 
    }

    .table tr:nth-child(even){background-color: #f2f2f2}

    .table th {
    background-color: #04AA6D;
    color: white;
    }

    button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 10px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 15px;
    margin: 4px 2px;
    cursor: pointer;
    }
  </style>
</head>
<body>
  <ul>
    <li><a href="form.php">Data Mahasiswa</a></li>
    <li><a class="active" href="form-matkul.php">Data Matakuliah</a></li>
    <li style="float: right;"><a href="index.php">Logout</a></li>
  </ul>
  <div>
    <fieldset>
      <legend>Form Input Data Matakuliah</legend>
    <form action="proses_update_matkul.php" method="POST">
      <table>
        <b>lengkapi Data dengan benar</b><br>
          <tr>
            <td>Kode Matakuliah</td>
            <td>:</td>
            <td><input type="text" name="kode_matkul" value="<?= $data['kode_matkul'] ?>"></td>
          </tr>
          <tr>
            <td>Nama Matakuliah</td>
            <td>:</td>
            <td><input type="text" name="nama" value="<?= $data['nama'] ?>"></td>
          </tr>
          <tr>
            <td>Jurusan</td>
            <td>:</td>
            <td><select name="jurusan">
              <option hidden><?= $data['jurusan'] ?></option>
              <option value="Sistem Komputer">Sistem Komputer</option>
              <option value="Teknologi Informasi">Teknologi Informasi</option>
              <option value="Sistem Informasi">Sistem Informasi</option>
              <option value="Bisnis Digital">Bisnis Digital</option>
              <option value="Manajemen Informatika">Manajemen Informatika</option>
            </select></td>
          </tr>
          <tr>
            <td>SKS</td>
            <td>:</td>
            <td><select name="sks">
              <option hidden><?= $data['sks'] ?></option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
            </select></td>
          </tr>
          <tr>
            <td>Semester</td>
            <td>:</td>
            <td><select name="semester">
              <option hidden><?= $data['semester'] ?></option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
            </select></td>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td><input type="submit" value="Simpan"></td>
          </tr>
        </table>
      </form>
    </fieldset>
  </div>
</body>
</html>