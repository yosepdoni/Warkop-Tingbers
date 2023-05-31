
<?php
    session_start();
?>
<span hidden><?php echo $_SESSION['username'];?> </span>

<?php
// KONEKSI DATABASE
include 'koneksi.php';
// TAMPILKAN DATA BARANG DAN HARGA
$barang=mysqli_query($conn, "SELECT * FROM tbbarang ORDER BY nm_brg ASC");
$jsArray = "var hrg_brg = new Array();\n"; 
include "koneksi.php";
if($_SESSION){ ?>

<div class="row">
    <!-- Horizontal Form -->
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">TRANSAKSI</h3>
            <button type="button" data-toggle="modal" data-target="#exampleModal" class="btn btn-info pull-right"><i class="fa fa-info"></i></button>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form class="form-horizontal" name="form" method="post" action="prosestambahtransaksi.php">
            <div class="box-body">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">TANGGAL</label>

                    <div class="col-sm-10">
                        <input type="date" class="form-control" name="tgl" id="myDate" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">NAMA MENU</label>
                    
                    <div class="col-sm-10">
                        <select name="nm_brg" id="select" class="form-control" onchange="changeValue(this.value)" autofocus >
                        <option>-- Pilih Menu --</option>
                        <?php if(mysqli_num_rows($barang)) {?>
                            <?php while($row_brg= mysqli_fetch_array($barang)) {?>
                                <option value="<?php echo $row_brg["nm_brg"]?>"> <?php echo $row_brg["nm_brg"]?> </option>
                            <?php $jsArray .= "hrg_brg['" . $row_brg['nm_brg'] . "'] = {hrg:'" . addslashes($row_brg['hrg']) . "'};\n"; } ?>
		            <?php } ?>
		        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">QTY</label>

                    <div class="col-sm-10">
                        <input type="number" class="form-control" name="qty" id="qty" onchange="kali()" placeholder="Qty" autocomplete="off" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">HARGA</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="hrg" id="hrg" readonly>
                    </div>
                </div>
                        <input type="hidden" class="form-control" id="tot" name="total" readonly>
        
            <!-- /.box-body -->
            
            <div class="box-footer">
            <button type="submit" class="btn btn-info pull-right"><i class="fa fa-cart-plus"> Add Menu</i></button>
                                
            </div>
            <!-- /.box-footer -->
        </form>
        <div class="box">
            <!-- /.box-header -->
           <div class="box-body">
              <div class="table-responsive">
                <table id="example" class="table table-bordered table-striped">
        <thead>
            <tr class="bg-secondary">
            <th scope="col" hidden>Nomor</th>
            <th scope="col" hidden>Tanggal</th>
            <th scope="col" hidden>Menu</th>
            <th scope="col" hidden>Harga</th>
            <th scope="col" hidden>Qty</th>
            <th scope="col" hidden>Total</th>
            </tr>
        </thead>
        <?php 
		include 'koneksi.php';
		$data = mysqli_query($conn,"select * from tbtransaksiview");
        $no =1;
		while($d = mysqli_fetch_array($data)){
		?>
        <tbody>
            <tr>              
                <td hidden><?php echo $no++; ?></td>
                <td hidden><?php echo $d['tgl']; ?></td>
                <td hidden><?php echo $d['nm_brg']; ?></td>
                <td hidden><?php echo "Rp.".number_format($d['hrg']); ?></td>
                <td hidden><?php echo $d['qty']; ?></td>
                <td hidden><?php echo "Rp.".number_format ( $total[] = $d['total']);?></td>
                
			</tr>
            <?php 
            }
            //Total
            $sum = array_sum($total);
            ?>
            <?php  
            if (isset($_POST["bayar"])) {
                $a = $_POST["bayar"];
                $b = $_POST["subtotal"];
                $hasil = $a - $b;
                                      
            }       
            ?>
            <?php
            include 'koneksi.php';
            if(isset($_POST['hapus'])){
                // HAPUS SELURUH ISI DALAM TABLE TRANSAKSIVIEW
                $sql=mysqli_query($conn, "DELETE FROM tbtransaksiview");
                echo "<script>window.location.href='content.php?page=trs'</script>";
            }
            ?>
            <form method="post" action="">
                <tr>                         
                      <td hidden><h3><input type="text" name="subtotal" value=" <?php echo $sum;?>"></h3></td>
                </tr> 
           
                <style>
                    .btn-space {
                    margin-right: 2px ;
                }
                </style>
                           
                    <div class="col-sm-10">
                        <h4><?php echo " Subtotal Rp. ".number_format($sum);?></h4>
                            <input type="number" class="form-control" name="bayar" placeholder="Pembayaran" autocomplete="off">
                                 <div class="box-footer">
                                     <button type="submit" class="btn btn-info btn-space pull-left">Simpan</button>
                                     <button type="submit" name="hapus" class="btn btn-danger">&nbsp;&nbsp; Reset &nbsp; &nbsp;</button> 
                                 </div>
                                 <h4><?php echo "Kembalian Rp. ".number_format($hasil);?></h4>
                    </div>     
           </form>
           </tbody> 
        </table>   
              </div>
            </div> 
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        </div>
    </div>

</section>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">INFO PENGSISIAN</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Isikan sesuai dengan ketentuan yang terdapat pada aplikasi
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<?php }else{}?>
<script type= "text/javascript">
    function cek(){
    if(form.hrg.value == "" || form.qty.value == ""){
    exit;
    }
    }
    function kali() {
    cek();
    a=eval(form.hrg.value);
    b=eval(form.qty.value);
    c=a*b
    form.total.value = c;
    }
    // Tampilkan Harga berdasarkan kode barang
    <?php echo $jsArray; ?>
    function changeValue(id) {
      document.getElementById("hrg").value = hrg_brg[id].hrg;
    };

    // Tampilkan date dalam input 
    function SetDate()
    {
    var date = new Date();
    var day = date.getDate();
    var month = date.getMonth() + 1;
    var year = date.getFullYear();
    if (month < 10) month = "0" + month;
    if (day < 10) day = "0" + day;
    var today = year + "-" + month + "-" + day;
    document.getElementById('myDate').value = today;
    };



</script> 
<!-- Tampilkan date dalam input type -->
<body onload="SetDate();">