
<?php
    session_start();
?>
<span hidden><?php echo $_SESSION['username'];?> </span>
<?php 
include "koneksi.php";
if($_SESSION){ ?>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>

<div class="row">
<div class="box box-info">
            <div class="box-header">
              <h5 class="box-info">Table Data Barang</h5>
            </div>
            <!-- /.box-header -->
       
           <div class="box-body">
              <div class="table-responsive">
                
                <table id="example" class="table table-striped table-bordered">
                 <form action="" method="GET">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Nama Barang</th>
                    <th>Harga Jual</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
        
                  <tbody>
                  <?php
                  
                  include "koneksi.php";
                  $data = mysqli_query($conn, "select * from tbbarang ORDER BY nm_brg ASC");
                  $no =1;
                  while($d = mysqli_fetch_array($data)){
                   ?>
                  <tr> 
                    <td><?php echo $no++;?></td>
                    <td><?php echo $d['nm_brg']; ?></td>
                    <td><?php echo "Rp ".number_format($d['hrg']); ?></td>
                    <td>
                      <a href="content.php?page=edtbrg&id=<?php echo $d['id']; ?>"><button class="btn btn-info btn-sm"><i class="fa fa-edit"></i></button></a>
                      <a onclick="return confirm('apakah anda yakin? ');" href="content.php?page=dltbrg&id=<?php echo $d['id'] ?>"><button name="hapus" class="btn btn-danger btn-sm"><i class= "fa fa-trash"></i></button></a>
                    </td>
                  </tr>
                    
                  <?php
                  
                    }
                  ?>
                  </tbody>
                </table>
                </form>
                <script>
                  $(document).ready(function() {
                  $('#example').DataTable();
                  } );

                </script>
              </div>
            </div> 
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
    </div>

    <?php }else{}?>