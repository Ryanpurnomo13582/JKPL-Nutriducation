<!DOCTYPE html>
<html>

<head>
    <title></title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="../images/brand_favicon.png">
</head>

<body>
    <div class="topnav" id="myTopnav">
        <a href="home.html" class="active">=</a>
        <a href="store">Produk</a>
        <a href="#contact">Kontak</a>
        <div class="dropdown">
            <a href="#kategori">Kategori</a>
            <div class="dropdown-content">
                <a href="../Product/bahan-makanan.php">Bahan Makanan</a>
                <a href="../Product/jenis-penyakit.php">Penyakit</a>
                <a href="../Product/resep-masakan.php">Resep Masakan</a>
            </div>
        </div>
        <a href="#about">Tentang</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
        <div class="search-container">
            <form action="/action_page.php">
                <input type="text" placeholder="Search.." name="search">
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>

    <?php
    ?>
    <div class="card">
        <img src="../images/wortel.jpg" alt="Avatar" style="width:100%">
        <div class="container">
            <h4><b>Kanker Paru-Paru</b></h4>
            <p>Penyakit yang sangat mematikan</p>
        </div>
    </div>
    <?php
    ?>

</body>

</html>