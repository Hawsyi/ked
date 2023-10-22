<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>KED</title>
    <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="isi">
  <form class="for-group row">
  <label class="col-md-3">
    Nama
  </label>
  <div class="col-md">
    <input type="text" id="nama">
  </div>  
  </form>
  <form class="for-group row">
  <label class="col-md-3">
    Desa
  </label>
  <div class="col-md-3">
    <input type="text" id="desa">
  </div>  
  </form>
  <form class="for-group row">
  <span class="col-md-3">
    
  </span>
  <div class="col-md text-right"> 
<button type="button" class="btn btn-primary" onclick="tampilData()">Submit</button>
  </div>  
  </form>
  <table class="table table-stripped" id="tabelData">
    <tr>
      <th>Nama</th>
      <th>Desa</th>
    </tr>
  </table>
</div>
<script>
  function tampilData(){
    document.getElementById('tabelData').insertRow(-1).innerHTML=`<tr>
      <th>`+$("#nama").val+`</th>
      <th>`+$("desa").val+`</th>
    </tr>` ; 
  }
</script>


</body>