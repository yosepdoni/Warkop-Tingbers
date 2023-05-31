<style>

body{
  background: #28324E;
  font-family: roboto;
}

h{
  color: #fff;
  width: 600px;  
}
/*loader 2*/
.loader2 {
  font-size: 20px;
  margin: 100px auto;
  width: 1em;
  height: 1em;
  border-radius: 50%;
  position: relative;
  text-indent: -9999em;
  -webkit-animation: load4 1.3s infinite linear;
  animation: load4 1.3s infinite linear;
  -webkit-transform: translateZ(0);
  -ms-transform: translateZ(0);
  transform: translateZ(0);
}
@-webkit-keyframes load4 {
  0%,
  100% {
    box-shadow: 0 -3em 0 0.2em #ffffff, 2em -2em 0 0em #ffffff, 3em 0 0 -1em #ffffff, 2em 2em 0 -1em #ffffff, 0 3em 0 -1em #ffffff, -2em 2em 0 -1em #ffffff, -3em 0 0 -1em #ffffff, -2em -2em 0 0 #ffffff;
  }
  12.5% {
    box-shadow: 0 -3em 0 0 #ffffff, 2em -2em 0 0.2em #ffffff, 3em 0 0 0 #ffffff, 2em 2em 0 -1em #ffffff, 0 3em 0 -1em #ffffff, -2em 2em 0 -1em #ffffff, -3em 0 0 -1em #ffffff, -2em -2em 0 -1em #ffffff;
  }
  25% {
    box-shadow: 0 -3em 0 -0.5em #ffffff, 2em -2em 0 0 #ffffff, 3em 0 0 0.2em #ffffff, 2em 2em 0 0 #ffffff, 0 3em 0 -1em #ffffff, -2em 2em 0 -1em #ffffff, -3em 0 0 -1em #ffffff, -2em -2em 0 -1em #ffffff;
  }
  37.5% {
    box-shadow: 0 -3em 0 -1em #ffffff, 2em -2em 0 -1em #ffffff, 3em 0em 0 0 #ffffff, 2em 2em 0 0.2em #ffffff, 0 3em 0 0em #ffffff, -2em 2em 0 -1em #ffffff, -3em 0em 0 -1em #ffffff, -2em -2em 0 -1em #ffffff;
  }
  50% {
    box-shadow: 0 -3em 0 -1em #ffffff, 2em -2em 0 -1em #ffffff, 3em 0 0 -1em #ffffff, 2em 2em 0 0em #ffffff, 0 3em 0 0.2em #ffffff, -2em 2em 0 0 #ffffff, -3em 0em 0 -1em #ffffff, -2em -2em 0 -1em #ffffff;
  }
  62.5% {
    box-shadow: 0 -3em 0 -1em #ffffff, 2em -2em 0 -1em #ffffff, 3em 0 0 -1em #ffffff, 2em 2em 0 -1em #ffffff, 0 3em 0 0 #ffffff, -2em 2em 0 0.2em #ffffff, -3em 0 0 0 #ffffff, -2em -2em 0 -1em #ffffff;
  }
  75% {
    box-shadow: 0em -3em 0 -1em #ffffff, 2em -2em 0 -1em #ffffff, 3em 0em 0 -1em #ffffff, 2em 2em 0 -1em #ffffff, 0 3em 0 -1em #ffffff, -2em 2em 0 0 #ffffff, -3em 0em 0 0.2em #ffffff, -2em -2em 0 0 #ffffff;
  }
  87.5% {
    box-shadow: 0em -3em 0 0 #ffffff, 2em -2em 0 -1em #ffffff, 3em 0 0 -1em #ffffff, 2em 2em 0 -1em #ffffff, 0 3em 0 -1em #ffffff, -2em 2em 0 0 #ffffff, -3em 0em 0 0 #ffffff, -2em -2em 0 0.2em #ffffff;
  }
}
@keyframes load4 {
  0%,
  100% {
    box-shadow: 0 -3em 0 0.2em #ffffff, 2em -2em 0 0em #ffffff, 3em 0 0 -1em #ffffff, 2em 2em 0 -1em #ffffff, 0 3em 0 -1em #ffffff, -2em 2em 0 -1em #ffffff, -3em 0 0 -1em #ffffff, -2em -2em 0 0 #ffffff;
  }
  12.5% {
    box-shadow: 0 -3em 0 0 #ffffff, 2em -2em 0 0.2em #ffffff, 3em 0 0 0 #ffffff, 2em 2em 0 -1em #ffffff, 0 3em 0 -1em #ffffff, -2em 2em 0 -1em #ffffff, -3em 0 0 -1em #ffffff, -2em -2em 0 -1em #ffffff;
  }
  25% {
    box-shadow: 0 -3em 0 -0.5em #ffffff, 2em -2em 0 0 #ffffff, 3em 0 0 0.2em #ffffff, 2em 2em 0 0 #ffffff, 0 3em 0 -1em #ffffff, -2em 2em 0 -1em #ffffff, -3em 0 0 -1em #ffffff, -2em -2em 0 -1em #ffffff;
  }
  37.5% {
    box-shadow: 0 -3em 0 -1em #ffffff, 2em -2em 0 -1em #ffffff, 3em 0em 0 0 #ffffff, 2em 2em 0 0.2em #ffffff, 0 3em 0 0em #ffffff, -2em 2em 0 -1em #ffffff, -3em 0em 0 -1em #ffffff, -2em -2em 0 -1em #ffffff;
  }
  50% {
    box-shadow: 0 -3em 0 -1em #ffffff, 2em -2em 0 -1em #ffffff, 3em 0 0 -1em #ffffff, 2em 2em 0 0em #ffffff, 0 3em 0 0.2em #ffffff, -2em 2em 0 0 #ffffff, -3em 0em 0 -1em #ffffff, -2em -2em 0 -1em #ffffff;
  }
  62.5% {
    box-shadow: 0 -3em 0 -1em #ffffff, 2em -2em 0 -1em #ffffff, 3em 0 0 -1em #ffffff, 2em 2em 0 -1em #ffffff, 0 3em 0 0 #ffffff, -2em 2em 0 0.2em #ffffff, -3em 0 0 0 #ffffff, -2em -2em 0 -1em #ffffff;
  }
  75% {
    box-shadow: 0em -3em 0 -1em #ffffff, 2em -2em 0 -1em #ffffff, 3em 0em 0 -1em #ffffff, 2em 2em 0 -1em #ffffff, 0 3em 0 -1em #ffffff, -2em 2em 0 0 #ffffff, -3em 0em 0 0.2em #ffffff, -2em -2em 0 0 #ffffff;
  }
  87.5% {
    box-shadow: 0em -3em 0 0 #ffffff, 2em -2em 0 -1em #ffffff, 3em 0 0 -1em #ffffff, 2em 2em 0 -1em #ffffff, 0 3em 0 -1em #ffffff, -2em 2em 0 0 #ffffff, -3em 0em 0 0 #ffffff, -2em -2em 0 0.2em #ffffff;
  }
}
/*akhir loader2*/

h1{
    color:white;
}
 h2 {margin-top:60px;
  display:flex;
}
h2:before, h2:after {
  color:white;
  content:'';
  flex:1;
  border-bottom:groove 1px;
  margin:auto 5em;
  box-shadow: 0 -3px ;/* ou 0 1px si border-style:ridge */
}
</style>
<html>
<head>
<title> Error 404 </title>
<h2> <div class="loader2">Loading..</div></h2>
<center><h1>Maaf Halaman Yang Anda Cari Tidak Ditemukan <br>
    Silahkan Tunggu!
</h1></center>
<script type="text/javascript">
setTimeout(
  function(){
    window.location = "index.php" 
  },
10000); // waktu tunggu atau delay
</script>
<head>
</html>