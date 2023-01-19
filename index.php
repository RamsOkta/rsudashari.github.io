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
  <div class="column side">

  </div>
  
  <div class="column middle">
    <img src="image/pamflet1.jpg" alt="">
  </div>
  
  <img src="image/pafmlet2.jpg" alt="">
</div>

<div class="footer">
  <p>
    RAMA OKTABARA
    21090008
    3A
  </p>
</div>
  
</body>
</html>


