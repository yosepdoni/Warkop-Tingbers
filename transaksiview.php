<?php
    session_start();
?>
<span hidden><?php echo $_SESSION['username'];?> </span>
<?php 
include "koneksi.php";
if($_SESSION){ ?>

<?php
// KONEKSI DATABASE
include 'koneksi.php';
// TAMPILKAN DATA BARANG DAN HARGA
$barang=mysqli_query($conn, "SELECT * FROM tbbarang");
$jsArray = "var hrg_brg = new Array();\n"; 
?>

<div class="row">
    <!-- Horizontal Form -->
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">VIEW TRANSAKSI</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        
        <div class="box">
            <!-- /.box-header -->
           <div class="box-body">
              <div class="table-responsive">
                <table id="example" class="table table-bordered table-striped">
        <thead>
            <tr class="bg-secondary">
            <th scope="col">Nomor</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Menu</th>
            <th scope="col">Harga</th>
            <th scope="col">Qty</th>
            <th scope="col">Total</th>
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
            
                
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['tgl']; ?></td>
                <td><?php echo $d['nm_brg']; ?></td>
                <td><?php echo "Rp.".number_format($d['hrg']); ?></td>
                <td><?php echo $d['qty']; ?></td>
                <td><?php echo "Rp.".number_format ( $total[] = $d['total']);?></td>
                
			</tr>
            <?php 
            }
            //Total
            $sum = array_sum($total);
            ?>
            <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td>Subtotal</td>
                      <td><?php echo "Rp ".number_format($sum);?></td>
                  </tr>
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
    <?php }else{}?>

</section>
