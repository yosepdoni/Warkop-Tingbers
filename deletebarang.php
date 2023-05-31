<?php
    session_start();
?>
<span hidden><?php echo $_SESSION['username'];?> </span>
<?php 
include "koneksi.php";
if($_SESSION){ ?>

<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$d = $_GET['id'];
 
 
// menghapus data dari database
mysqli_query($conn,"delete from tbbarang where id='$d'");

echo "<script>window.location.href='content.php?page=dtbrg'</script>";
 
?>
<?php }else{}?>