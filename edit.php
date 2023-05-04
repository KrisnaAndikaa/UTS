<?php

$nim = $_GET['nim'];
include "koneksi.php";
$qry = "SELECT * FROM mahasiswa WHERE nim = '$nim'";
$exec = mysqli_query($con,$qry);
$data = mysqli_fetch_assoc($exec);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mahasiswa</title>
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
    </style>
</head>
<body>
<ul>
    <li><a class="active" href="form.php">Data Mahasiswa</a></li>
    <li><a href="form-matkul.php">Data Matakuliah</a></li>
    <li style="float: right;"><a href="index.php">Logout</a></li>
</ul>
<div>
<form action="proses_update.php" method="POST">
    <fieldset>
        <legend>Form Edit Data Mahasiswa</legend>
        <b>lengkapi data dengan benar</b>
            <table>
                <tr>
                    <td>NIM (Nomor induk mahasiswa)</td>
                    <td>:</td>
                    <td><input type="text" name="nim" value="<?= $data['nim'] ?>"></td>
                </tr>
                <tr>
                    <td>Nama mahasiswa</td>
                    <td>:</td>
                    <td><input type="text" name="nama" value="<?= $data['nama'] ?>"></td>
                </tr>
                <tr>
                    <td>Jurusan</td>
                    <td>:</td>
                    <td><select name="jurusan">
                        <option hidden><?= $data['jurusan']?></option>
                        <option value="Sistem Komputer">Sistem Komputer</option>
                        <option value="Teknologi Informasi">Teknologi Informasi</option>
                        <option value="Sistem Informasi">Sistem Informasi</option>
                        <option value="Bisnis Digital">Bisnis Digital</option>
                        <option value="Manajemen Informatika">Manajemen Informatika</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td><label><input type="radio" name="jk" value="Laki-laki" <?= $data["jk"] == "Laki-laki" ? "checked" : '' ?>>Laki-laki</label>
                    <label><input type="radio" name="jk" value="Perempuan" <?= $data["jk"] == "Perempuan" ? "checked" : '' ?>>Perempuan</label></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><textarea name="alamat"><?php echo $data['alamat'] ?></textarea></td>
                </tr>
                <tr>
                    <td>No. HP</td>
                    <td>:</td>
                    <td><input type="text" name="nohp" value="<?= $data['nohp'] ?>"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td><input type="email" name="email" value="<?= $data['email'] ?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" value="Simpan"></td>
                </tr>
            </table>
    </fieldset>
</form>
</div>
</body>
</html>