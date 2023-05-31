<link rel='stylesheet' href="https://fonts.googleapis.com/css?family=Lato:300"/>
<link rel='stylesheet' href="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css"/>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.all.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<button class="first">Title Only</button>
<button class="second">Title and Text</button>
<button type="submit" class="btn btn-info pull-right third">SIMPAN</button>
<script>
    document.querySelector(".first").addEventListener('click', function(){
  Swal.fire("Our First Alert");
});

document.querySelector(".second").addEventListener('click', function(){
  Swal.fire("Our First Alert", "With some body text!");
});

document.querySelector(".third").addEventListener('click', function(){
  Swal.fire("Our First Alert", "With some body text and success icon!", "success");
});
</script>