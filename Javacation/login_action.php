<?php

session_start();

include "koneksi_database.php";

@$username = $_POST['username'];
@$password = $_POST['password'];

$sql_login = "SELECT * FROM customer where username = '$username' AND password = '$password'";
$login = mysqli_query($host, $sql_login);

$data = mysqli_fetch_array($login);

if ($data){
    $_SESSION['id_cust'] = $data['id_cust']; 
    $_SESSION['username'] = $data['username'];
    $_SESSION['password'] = $data['password'];
    echo "<script>
            alert('Login berhasil, Selamat Datang $username');
            document.location = 'beranda.php';
        </script>";
}else{
    echo "<script>
            alert('Login Failed, check username and password');
            document.location = 'login.php';
        </script>";

}

?>