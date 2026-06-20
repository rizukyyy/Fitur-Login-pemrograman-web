<?php

session_start();
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($conn,
"SELECT * FROM pegawai
WHERE username='$username'
AND password='$password'");

$data = mysqli_fetch_assoc($query);

if($data){

    $_SESSION['id_pegawai'] = $data['id_pegawai'];
    $_SESSION['nama'] = $data['nama'];

    header("Location: dashboard.php");

}else{

    echo "
    <script>
        alert('Username atau Password Salah');
        window.location='login.php';
    </script>";
}
?>