<?php
    session_start();
    include "koneksi.php";

    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $cek = mysqli_query($conn,"select * from akun where username='$username' and password='$password' ");
    if(mysqli_num_rows($cek)>0){
        
        $_SESSION['username'] = "$username";
        echo "<script>window.location.href='content.php?page=home'</script>";

    }else{
        echo "<script>alert('username belum terdaftar');window.history.go(-1);</script>";
    }

?>