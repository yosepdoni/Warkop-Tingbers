<?php
    session_start();
?>
<span hidden><?php echo $_SESSION['username'];?> </span>

<?php
if($_SESSION){ ?>
<?php
    include "header.php";
?>
    <!-- Main content -->
    <section class="content">
    <?php

        error_reporting(0);

        $page = $_GET['page'];

        if($page=="home"){
            include "home.php";
        }else if($page=="tmbbrg"){
            include "tambahbarang.php";
        }else if($page=="dtbrg"){
            include "databarang.php";
        }else if($page=="trs"){
            include "transaksi.php";
        }else if($page=="trsview"){
            include "transaksiview.php";
        }else if($page=="rpt"){
            include "report.php";
        }else if($page=="prosescarilaporan"){
            include "prosescarilaporan.php";
        }else if($page=="tmbp"){
            include "tambahpengeluaran.php";
        }else if($page=="lpb"){
            include "laporanbersih.php";
        }else if($page=="dltbrg"){
            include "deletebarang.php";
        }else if($page=="edtbrg"){
            include "editbarang.php";
        }else if($page=="rptd"){
            include "reportdouble.php";
        }else if($page=="rptd"){
            include "reportdouble.php";
        }
        
    ?>
</section>
<?php
    include "footer.php";
?>
<?php }else{
     header("location:err.php?");
}?>