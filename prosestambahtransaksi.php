<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$nm_brg = $_POST['nm_brg'];
$hrg = $_POST['hrg'];
$qty = $_POST['qty'];
$tgl = $_POST['tgl'];
$total = $_POST['total'];
 
// menginput data ke database
mysqli_query($conn,"insert into tbtransaksiview values('','$nm_brg','$hrg','$qty','$tgl','$total')");
 
// mengalihkan halaman kembali ke index.php
echo "<script>window.location.href='content.php?page=trs'</script>";
 
?>
<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$nm_brg = $_POST['nm_brg'];
$hrg = $_POST['hrg'];
$qty = $_POST['qty'];
$tgl = $_POST['tgl'];
$total = $_POST['total'];
 
// menginput data ke database
mysqli_query($conn,"insert into tbtransaksi values('','$nm_brg','$hrg','$qty','$tgl','$total')");
 
// mengalihkan halaman kembali ke index.php
echo "<script>window.location.href='content.php?page=trs'</script>";
?>
