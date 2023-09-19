<!DOCTYPE html>
<html>
<head>
<title></title>
<link rel="stylesheet" href="style.css">
<link rel="icon" href="Naruto.png">
</head>
<body>
	<div class="topnav" id="myTopnav">
  <a href="home.html" class="active">Home</a>
  <a href="store">Store</a>
  <a href="#contact">Contact</a>
  <div class="dropdown">
    <button class="dropbtn">Category
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">Link 1</a>
      <a href="#">Link 2</a>
      <a href="#">Link 3</a>
    </div>
  </div>
  <a href="#about">About</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
  <div class="search-container">
    <form action="/action_page.php">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit">Submit</button>
    </form>
  </div>
</div>

<form action="save_data.php" method="POST">
<label for="">Nama : </label>
<input type="text" id="nama_produk" name="nama_produk"><br>
<br>
<label for="">Gambar : </label>
<input type="file" id="gambar_produk" name="gambar_produk"><br>
<br>
<label for="">Keterangan : </label>
<input type="text" id="keterangan_produk" name="keterangan_produk"><br>
<br>
<label for="">Harga : </label>
<input type="text" id="harga_produk" name="harga_produk"><br>
<input type="submit" value="submit" name="submit">
</form>

</body>
</html>