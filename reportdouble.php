<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
        <!-- bootstrap cdn  -->
</head>    
    <body>

            <!-- form filter data berdasarkan range tanggal  -->
            
            <form action="caripemasukan.php" method="get">
            <label class="col-form-label">CARI PEMASUKAN</label>        
            <div class="box-body">
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
            <br>
            <form action="caripengeluaran.php" method="get">
            <label class="col-form-label">CARI PENGELUARAN</label>
            <div class="box-body">
                    <div class="col-sm-2">
                        <input type="date" class="form-control" name="dari" required>
                    </div>
                    <div class="col-sm-2">
                        <input type="date" class="form-control" name="ke" required>
                    </div>
                    <div class="col-sm-2">
                        <button class="btn btn-primary fa fa-search" type="submit"> Search</button>
                    </div>
                

            </form>
    
            
</body>
</html>