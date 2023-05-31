<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
</head>
<body>    
            <!-- form filter data berdasarkan range tanggal  -->

            <form action="carireport.php" method="get">
                <div class="row g-3 align-items-left">
                    <div class="">
                        <label class="col-form-label">Periode</label>
                    </div>
                    <div class="col-sm-2">
                        <input type="date" class="form-control" name="dari" required>
                    </div>
                    
                    <div class="col-sm-2">
                        <input type="date" class="form-control" name="ke" required>
                    </div>
                    <div class="col-sm-2">
                        <button class="btn btn-primary fa fa-search" type="submit"> Search</button>
                    </div>
                </div>
            </form>
    
            <div class="card">
                <div class="card-body">
                    <table class="table table-striped">
                        <?php 
                        include 'koneksi.php';
                            //jika tanggal dari dan tanggal ke ada maka
                            if(isset($_GET['dari']) && isset($_GET['ke'])){
                                // tampilkan data yang sesuai dengan range tanggal yang dicari 
                                $data = mysqli_query($conn, "SELECT * FROM tbtransaksi WHERE tgl BETWEEN '".$_GET['dari']."' and '".$_GET['ke']."'");
                            }else{
                                //jika tidak ada tanggal dari dan tanggal ke maka tampilkan seluruh data
                                $data = mysqli_query($conn, "select * from tbtransaksi");		
                            }
                            // while digunakan sebagai perulangan data 
                            while($d = mysqli_fetch_array($data)){
                        ?>
                        <td hidden>
                           <?php echo "Rp.".number_format ( $total[] = $d['total']);?>
                        </td>         
                        <?php } 
                        //Total
                        if(!$total){
                            echo ('maaf data tidak ada!');
                        }else{
                            $sum = array_sum($total);
                        }
                        ?>
                        
                        <h4><?php echo "Pemasukan  : Rp. ".number_format($sum);?></h4>
                        <tr>

                        <?php 
                        include 'koneksi.php';
                            if(isset($_GET['dari']) && isset($_GET['ke'])){
                                $dataa= mysqli_query($conn, "SELECT * FROM tbpengeluaran WHERE tgl BETWEEN '".$_GET['dari']."' and '".$_GET['ke']."'");
                            }else{
                   
                                $dataa = mysqli_query($conn, "select * from tbpengeluaran");		
                            }
                            while($da = mysqli_fetch_array($dataa)){
                        ?>
                        <td hidden>
                           <?php echo "Rp.".number_format ( $tot[] = $da['hrg']);?>
                        </td>         
                        <?php } 
                        //Total
                        $s = array_sum($tot);
                        $h = $sum - $s;
                        ?>
                        
                        <h4><?php echo "Pengeluaran  : Rp. ".number_format($s);?></h4> </tr>
                        <h4><?php echo "Hasil  : Rp. ".number_format($h);?></h4> </tr>
                        </tr>
                
                        
                        
           </tbody> 
                    </table>
                </div>
            </div>
       
</body>
</html>