<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$nm_brg = $_POST['nm_brg'];
$hrg = $_POST['hrg'];
 
// menginput data ke database
mysqli_query($conn,"insert into tbbarang values('','$nm_brg','$hrg')");
 
// mengalihkan halaman kembali ke index.php
echo "<script>window.location.href='content.php?page=tmbbrg'</script>";
 
?>  