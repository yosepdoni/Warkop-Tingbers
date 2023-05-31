<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<?php
    session_start();
?>
<span hidden><?php echo $_SESSION['username'];?> </span>
<?php 
include "koneksi.php";
if($_SESSION){ ?>
<body oncontextmenu="return false" onselectstart="return false" ondragstart="return false">

<div class="row">
    <!-- Horizontal Form -->
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">FORM UPDATE BARANG</h3>
            <button type="button" data-toggle="modal" data-target="#exampleModal" class="btn btn-info pull-right"><i class="fa fa-info"></i></button>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($conn,"select * from tbbarang where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
        <form class="form-horizontal" method="POST" action="proseseditbarang.php">
            <div class="box-body">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">NAMA BARANG</label>

                    <div class="col-sm-10">
                        <input type="hidden" id="txtInput" class="form-control" name="id" value="<?php echo $d['id']; ?>">
                        <input type="text" id="txtInput" class="form-control" name="nm_brg" value="<?php echo $d['nm_brg']; ?>"  autocomplete="off" onkeypress="return harusHuruf(event)" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">HARGA JUAL</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name="hrg" value="<?php echo $d['hrg']; ?>" autocomplete="off" onkeypress="return isNumberKey(this, event);" required>
                    </div>
                </div>
        
            </div>
            <!-- /.box-body -->
            
            <div class="box-footer">
            <button type="submit" class="btn btn-info pull-right">SIMPAN</button>
            
            </div>
            <!-- /.box-footer -->
        </form>
        <?php 
	}
	?>
 
        </div>
    </div>
    </body>
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
        <u>Inputkan nama barang dan harga </u>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<?php }else{}?>
<script type="text/javascript">
    function isNumberKey(txt, evt) {
      var charCode = (evt.which) ? evt.which : evt.keyCode;
      if (charCode == 46) {
        //Check if the text already contains the . character
        if (txt.value.indexOf('.') === -1) {
          return true;
        } else {
          return false;
        }
      } else {
        if (charCode > 31 &&
          (charCode < 48 || charCode > 57))
          return false;
      }
      return true;
    }
    function harusHuruf(evt){
        var charCode = (evt.which) ? evt.which : event.keyCode
        if ((charCode < 65 || charCode > 90)&&(charCode < 97 || charCode > 122)&&charCode>32)
            return false;
        return true;
      }
      var isNS = (navigator.appName == "Netscape") ? 1 : 0;
      if(navigator.appName == "Netscape") document.captureEvents(Event.MOUSEDOWN||Event.MOUSEUP);
      function mischandler(){
      return false;
      }
      function mousehandler(e){
      var myevent = (isNS) ? e : event;
      var eventbutton = (isNS) ? myevent.which : myevent.button;
      if((eventbutton==2)||(eventbutton==3)) return false;
      }-
      document.oncontextmenu = mischandler;
      document.onmousedown = mousehandler;
      document.onmouseup = mousehandler;

      $(document).ready(function(){
   $('#txtInput').on("cut copy paste",function(e) {
      e.preventDefault();
   });
});
  </script>