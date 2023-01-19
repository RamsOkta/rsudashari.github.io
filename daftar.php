<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Website Layout</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
}

/* Style the header */
.header {
  background-color: #f1f1f1;
  padding: 20px;
  text-align: center;
}

/* Style the top navigation bar */
.topnav {
  overflow: hidden;
  background-color: #333;
}

/* Style the topnav links */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Create three unequal columns that floats next to each other */
.column {
  float: left;
  padding: 10px;
}

/* Left and right column */
.column.side {
  width: 50%;
}

/* Middle column */
.column.middle {
  width: 50%;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column.side, .column.middle {
    width: 100%;
  }
}

.column.banner{
    width: 500px;
}

.row{
    width: 95%;
    display: block;
    margin-left: 50px;
    position: relative;
    left: 10px;
}

.column.side{
    width: 430px;
    margin-left: 30px;
}

.column.middle{
    width: 430px;
    margin-left: 10px;
}

img{
    width: 400px;
    height: 400px;
}

/* Style the footer */
.footer {
  background-color: #f1f1f1;
  padding: 10px;
  text-align: center;
}
</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body>
    <?php
    $conn = mysqli_connect("localhost","root","","rsashari");
    ?>

<div class="header">
  <h1>Rumah Sakit Umum Daerah Pemalang</h1>
</div>
<div class="topnav">
  <a href="index.php">HOME</a>
  <a href="daftar.php">DAFTAR</a>
  <a href="tentang.php">TENTANG</a>
</div>
<div class="row">
    <div class="banner">
        <img class="banner" src="https://ppidrsud.pemalangkab.go.id/uploads/slide/95a245643849b8c6d7c3531512f53a77.jpg" alt="" style="width: 100%;">
    </div> <br>
    <form method="POST" action="datamasuk.php">
        <div class="col-md-4">
            <label for="validationServer03" class="form-label">Nama</label>
            <input type="text" class="form-control is-invalid" id="validationServer03" aria-describedby="validationServer03Feedback" name="nama" required="">
            <div id="validationServer03Feedback" class="invalid-feedback">
                Tidak boleh kosong!
            </div>
        </div>
        <div class="col-md-4">
            <span class="mb-3">Alamat</span><br>
            <textarea class="form-control is-invalid" aria-label="With textarea" id="alamat" aria-describedby="validationServer03Feedback" name="alamat" required=""></textarea>
            <div id="validationServer03Feedback" class="invalid-feedback">
                Tidak boleh kosong!
            </div>
        </div>
        <div class="col-md-4">
            <label for="validationServer03" class="form-label">JK</label>
            <input type="text" class="form-control is-invalid" id="jk" aria-describedby="validationServer03Feedback" name="jk" required="">
            <div id="validationServer03Feedback" class="invalid-feedback">
                Tidak boleh kosong!
            </div>
        </div>
        <div class="col-md-4">
            <label for="validationServer03" class="form-label">Umur</label>
            <input type="text" class="form-control is-invalid" id="umur" aria-describedby="validationServer03Feedback" name="umur" required="">
            <div id="validationServer03Feedback" class="invalid-feedback">
                Tidak boleh kosong!
            </div>
        </div><div class="col-md-4">
            <label for="validationServer03" class="form-label">Nomer_Hp</label>
            <input type="text" class="form-control is-invalid" id="nomer_hp" aria-describedby="validationServer03Feedback" name="nomer_hp" required="">
            <div id="validationServer03Feedback" class="invalid-feedback">
                Tidak boleh kosong!
            </div>
        </div>
        <!-- Sertakan gambar : <input type="file" name="fupload"><br> <br> -->
        <button type="submit" class="btn btn-primary">Submit</button>
        <br>
        <a href="ubahdata.php">Edit</a>
    </form>
</div>
<div class="footer">
  <p>
    RAMA OKTABARA
    21090008
    3A
  </p>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>


