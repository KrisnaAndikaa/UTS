<html>
    <head>
        <title>Data Mahasiswa</title>
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
        font-size: 10px;
        margin: 4px 2px;
        cursor: pointer;

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
        <fieldset>
            <legend>Form Input Data Mahasiswa</legend>
        <form action="proses.php" method="POST">
        <table>
            <b>lengkapi data dengan benar</b><br>
            <tr>
                <td>NIM (Nomer Induk Mahasiswa)</td>
                <td>:</td>
                <td><input type="text" name="nim"></td>
            </tr>
            <tr>
                <td>Nama Mahasiswa</td>
                <td>:</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td>:</td>
                <td><select name="jurusan">
                        <option hidden>-- Pilih Jurusan --</option>
                        <option value="Sistem Komputer">Sistem Komputer</option>
                        <option value="Teknologi Informasi">Teknologi Informasi</option>
                        <option value="Sistem Informasi">Sistem Informasi</option>
                        <option value="Bisnis Digital">Bisnis Digital</option>
                        <option value="Manajemen Informatika">Manajemen Informatika</option>
                    </select></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td><label><input type="radio" name="jk" value="Laki-laki">Laki-laki</label>
                <label><input type="radio" name="jk" value="Perempuan">Perempuan</label></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><textarea name="alamat"></textarea></td>
            </tr>
            <tr>
                <td>No. HP</td>
                <td>:</td>
                <td><input type="text" name="nohp"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td><input type="email" name="email"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="Simpan"></td>
            </tr>
        </table>
        </form>
        </fieldset>
    </div><br>
        <div class="table">
            <table>
                <tr>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Jurusan</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>No. HP</th>
                    <th>Email</th>
                    <th>Aksi</th>
                </tr>

                <?php
                    include "koneksi.php";
                    $qry = "SELECT * FROM mahasiswa";
                    $exec = mysqli_query($con, $qry);
                    while($data = mysqli_fetch_assoc($exec))
                    {
                ?>
                <tr>
                    <td><?= $data['nim']?></td>
                    <td><?= $data['nama']?></td>
                    <td><?= $data['jurusan']?></td>
                    <td><?= $data['jk']?></td>
                    <td><?= $data['alamat']?></td>
                    <td><?= $data['nohp']?></td>
                    <td><?= $data['email']?></td>
                    <td><a href="edit.php?nim=<?= $data['nim']?>">
                            <button>Edit</button>
                        </a>
                        <a href="delete.php?nim=<?= $data['nim']?>">
                            <button>Hapus</button>
                        </a>
                    </td>
                </tr>
                <?php } ?>
            </table>
        </div>
    </body>
</html>