<?php
    session_start();
?>
<style>
img {
    width: 90%;
    height: 20%;
}
</style>
<body>
  

<div class="row">
        
        <div class="box box-info">
        <div class="box-header with-border">

        </div>
        <h1 align="center"><b>
        Hallo <?php echo $_SESSION['username'];?>  Selamat Datang 
</b>  </h1>
        <div class="box-footer">
       <center> <img src="logo.png" width="700" height="500"> </center>
        </div>
    </div>
    
<?php 
include "koneksi.php";
if($_SESSION){ ?>

<?php }else{}?>
</div>

</body>

