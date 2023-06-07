<?php

session_start();

include "koneksi_database.php";

@$username = $_POST['username'];
@$password = $_POST['password'];

$sql_login = "SELECT * FROM admin where username_admin = '$username' AND password_admin = '$password'";
$login = mysqli_query($host, $sql_login);

$data = mysqli_fetch_array($login);

if ($data){
    $_SESSION['id_admin'] = $data['id_admin']; 
    $_SESSION['username_admin'] = $data['username_admin'];
    $_SESSION['password_admin'] = $data['password_admin'];
    echo "<script>
            alert('Login berhasil, Selamat Datang $username');
            document.location = 'customer.php';
        </script>";
}else{
    echo "<script>
            alert('Login Failed, check username and password');
            document.location = 'login_admin.php';
        </script>";

}

?>