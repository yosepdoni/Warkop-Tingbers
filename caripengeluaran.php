<!DOCTYPE html>
<html lang="en">
<head>
    <title>REPORT | PENGELUARAN</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap cdn  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
    
    <body>
        <div class="container mt-6">
            <br>    
            <a href="content.php?page=rptd"><i class="fa fa-home"></i><span><button class="btn btn-primary"> HOME</button></span></a>
            <div class="card">
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <td>No</td>
                                <td>Tanggal</td>
                                <td>Menu</td>
                                <td>Qty</td>
                                <td>Harga</td>
                            </tr>
                        </thead>
                        <?php 
                        include 'koneksi.php';
                            //jika tanggal dari dan tanggal ke ada maka
                            if(isset($_GET['dari']) && isset($_GET['ke'])){
                                // tampilkan data yang sesuai dengan range tanggal yang dicari 
                                $data = mysqli_query($conn, "SELECT * FROM tbpengeluaran WHERE tgl BETWEEN '".$_GET['dari']."' and '".$_GET['ke']."'");
                            }else{
                                //jika tidak ada tanggal dari dan tanggal ke maka tampilkan seluruh data
                                $data = mysqli_query($conn, "select * from tbpengeluaran");		
                            }
                            // $no digunakan sebagai penomoran 
                            $no = 1;
                            // while digunakan sebagai perulangan data 
                            while($d = mysqli_fetch_array($data)){
                        ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $d['tgl']; ?></td>
                            <td><?php echo $d['nm_brg']; ?></td>
                            <td><?php echo $d['qty']; ?></td>
                            <td><?php echo "Rp.".number_format ( $total[] = $d['hrg']);?></td>
                                
                        </tr>
                        <?php } 
                        //Total
                        if(!$total){
                            echo '<script type ="text/JavaScript">';  
                            echo 'alert("Maaf Data Tidak Ditemukan!")';  
                            echo '</script>';  
                            echo "<script>window.location.href='content.php?page=rptd'</script>";
                        }else{
                            $sum = array_sum($total);
                        }
            ?>
            <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td> <h4>TOTAL</h4> </td>
                      <td> <h4><?php echo "Rp. ".number_format($sum);?></h4> </td>
                  </tr>
           </tbody> 
                    </table>
                </div>
            </div>
        </div>    
</body>
</html>