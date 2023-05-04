<?php
include "koneksi.php";
?>

<html lang="en">
  <head>
    <style>
    body{
    color: black;
    background-color: #e7e7e7;
    }

    input[type=text], select {
    width: 100%;
    padding: 12px 100px 10px 12px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    }

    input[type=password], select {
    width: 100%;
    padding: 12px 100px 10px 12px;
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
    background-color: #45A049;
    }

    div {
    border-radius: 5px;
    background-color: #9AF59E;
    padding: 100px;
    margin: 5px 400px 20px;
    }

    table {
    border-collapse: collapse;
    width: 100%;
    }      
    
    th, td {
    text-align: left;
    padding: 8px;
    }
        
    th {
    background-color: #04AA6D;
    color: white;
    }
    </style>
    <meta charset="UTF-8">
    <title>Login Page</title>
  </head>
  <body>
  <div>
    <h2><p align="center">LOGIN FORM</p></h2>
      <form method="POST">
        <table align="center">
          <tr>
            <td>
              <input type="text" placeholder="USERNAME" name="username">
            </td>
          </tr>
          <tr>
            <td>
              <input type="password" placeholder="PASSWORD" name="password">
            </td>
          </tr>
          <tr>
            <td><input type="submit" class="btn btn-outline btn-primary" name="proseslog"></td>
          </tr>
        </table>
      </form>
    </div>
  </body>
</html>

<?php
if(isset($_POST['proseslog'])){
    $sql = mysqli_query($con, "select * from login where username = '$_POST[username]' and 
    password = '$_POST[password]'");

    $cek = mysqli_num_rows($sql);
    if($cek > 0){
        $_SESSION['username'] = $_POST['username'];
        echo "<meta http-equiv=refresh content=0;URL='form.php'>";
    } else {
        echo "<p align=center><b> Username dan/atau Password Salah </b></p>";
        echo "<meta http-equiv=refresh content=2;URL='index.php'>";
    }
}
?>