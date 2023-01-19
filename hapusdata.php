<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Website Layout</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="output.css">
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
    </div>
</div>
<div class="row">
 
</div>

<?php
?>
<form method="POST" action="datamasuk.php">
    <div class="mb-4">
<label for="nama" class="sr-only">MASUKKAN NAMA YANG MAU DIHAPUS</label>
<select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="nama" id="nama">


<?php
    $conn = mysqli_connect("localhost","root","","rsashari");
    $query = "SELECT * FROM pendaftaran";
    $hasil = mysqli_query($conn,$query);
    while($row = mysqli_fetch_assoc($hasil)){
        $nama = $row['nama'];
        $alamat = $row['alamat'];
        $jk = $row['jk'];
        $umur = $row['umur'];
        $nomer_hp = $row['nomer_hp'];
?>
    <option name="nama" value="<?php echo $nama; ?>"><?php echo $nama; ?></option>
    <option name="alamat" value="<?php echo $alamat; ?>"><?php echo $alamat; ?></option>
    <option name="jk" value="<?php echo $jk; ?>"><?php echo $jk; ?></option>
    <option name="umur" value="<?php echo $umur; ?>"><?php echo $umur; ?></option>
    <option name="nomer_hp" value="<?php echo $nomer_hp; ?>"><?php echo $nomer_hpx; ?></option>
<?php
    }
?>
</select>
<br>
    
    <div class="flex items-center justify-between">
    </div>
        <!-- Sertakan gambar : <input type="file" name="fupload"><br> <br> -->
    <button type="submit" class="btn btn-primary">Submit</button>
    <br>
    <a href="daftar.php">Kembali</a> 
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


