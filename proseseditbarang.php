<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nm_brg'];
$hrg = $_POST['hrg'];

// update data ke database
mysqli_query($conn,"update tbbarang set nm_brg='$nama', hrg='$hrg' where id='$id'");
echo "<script>window.location.href='content.php?page=dtbrg'</script>";
?>