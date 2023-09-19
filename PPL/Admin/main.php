<!DOCTYPE html>
<html>

<head>
  <title></title>
  <link rel="stylesheet" href="style.css">
  <link rel="icon" href="../images/brand_favicon.png">
</head>


<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap">

<body>
  <div class="topnav" id="myTopnav">
    <a href="home.html" class="active">=</a>
    <a href="store">Produk</a>
    <a href="#contact">Kontak</a>
    <div class="dropdown">
      <a href="#kategori">Kategori</a>
      <div class="dropdown-content">
        <a href="#">Bahan Makanan</a>
        <a href="#">Penyakit</a>
        <a href="#">Resep Masakan</a>
      </div>
    </div>
    <a href="#about">Tentang</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
    <div class="search-container">
      <form action="/action_page.php">
        <input type="text" placeholder="Pencarian.." name="search">
        <button type="submit">Cari</button>
      </form>
    </div>
  </div>

  <div class="form">
    <form action="save_data.php" method="POST">
      <label for="nama_produk" class="nama_produk">Nama Produk : </label>
      <input type="text" id="nama_produk" name="nama_produk"><br>
      <br>
      <label for="">Gambar Produk : </label>
      <input type="file" id="gambar_produk" name="gambar_produk"><br>
      <br>
      <label for="">Keterangan Produk : </label>
      <input type="text" id="keterangan_produk" name="keterangan_produk"><br>
      <br>
      <label for="">Nutrisi Produk : </label>
      <input type="text" id="vitamin_produk" name="harga_produk"><br>
      <input type="submit" value="submit" name="submit" id="submit">
    </form>
  </div>
</body>

</html>