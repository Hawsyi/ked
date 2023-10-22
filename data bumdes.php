<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>KED</title>
    <!-- feather icons -->
    <script src="https://unpkg.com/feather-icons"></script>
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="databumdes.css" />
<!-- library datables -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
<script type="text/javascript" src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script type="text/javascript" src="https//cdn.datatables.net/1.13.6/js/jquerydataTables.min.js"></script>
<!-- my style -->
  </head>

  <body>
    <!-- Navbar Start -->

    <nav class="navbar">
      <a href="index.html" class="navbar-logo"
        >BUMDES.</a>

      <div class="navbar-nav">
        <a href="data bumdes.php">HOME</a>
        <a href="tentang kami.html">PROFIL</a>
        <a href="kegiatan.html">KEGIATAN</a>
        <a href="#">INFORMASI</a>
      </div>

      <div class="navbar-extra">
        <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
      </div>
    </nav>
    <!-- Navbar End -->
    <!-- form input -->
<div class="form" >
    <h3>data bumdes kabupaten bogor</h3>
    <table class="table">
        <tr>
            <th>DESA</th>
            <td><input type="text" id="DESA" class="DESA" placeholder="name"></td>
        </tr>
        <tr>
            <th>BUMDES</th>
            <td><input type="text" id="BUMDES" class="BUMDES" placeholder="name"></td>
        </tr>
        <tr>
            <th>DIREKTUR</th>
            <td><input type="text" id="DIREKTUR" class="DIREKTUR" placeholder="name"></td>
        </tr>
        <tr>
            <th>Bumdes</th>
            <td>
                <div class="tampil">

            </td>
        </tr>
<tr>
    <th></th>
    <td><button type="button" onclick="simpan_data()" class="btn" btn-succes>Submit</button></td>
    <td><button type="reset" onclick="reset_form()" class="btn" btn-danger>reset</button></td>
</tr></div>
    </table>
</div>
<!-- list data     -->
<div class="list"><h3>List Data Bumdes Kabupaten Bogor</h3>
<div id="list-data"></div>
</div>


</body>
<script type="text/javascript">
    function tampil(){
var DESA = $("DESA").val
var BUMDES = $("BUMDES").val
var DIREKTUR = $("DIREKTUR").val

    }

    $.ajax({
        url: "ajaxinput.php", 
    });
    function simpan_data(){
        var DESA = $("DESA").val
var BUMDES = $("BUMDES").val
var DIREKTUR = $("DIREKTUR").val
    
if(DESA!='' && BUMDES!='' && DIREKTUR!='' ){
$.ajax({
    url: "ajaxinput.php",
    data: "DESA="+DESA+"#BUMDES="+BUMDES"#DIREKTUR="+DIREKTUR+"&data=simpan",
    success:function(html){

    }
})
}
else{
        alert("lengkapi isian!");
    }}
</script>
</html>
