<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$tgl = $_POST['tgl'];
$nm_brg = $_POST['nm_brg'];
$qty = $_POST['qty'];
$hrg = $_POST['hrg'];
 
// menginput data ke database
mysqli_query($conn,"insert into tbpengeluaran values('','$tgl','$nm_brg','$qty','$hrg')");
 
// mengalihkan halaman kembali ke index.php
echo "<script>window.location.href='content.php?page=tmbp'</script>";
 
?>  