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
        <a href="../Users/main.php">Home</a>
        <a href="#contact">Kontak</a>
        <div class="dropdown">
            <a href="#kategori">Kategori</a>
            <div class="dropdown-content">
                <a href="bahan-makanan.php">Bahan Makanan</a>
                <a href="#">Penyakit</a>
                <a href="#">Resep Masakan</a>
            </div>
        </div>
        <a href="../Product/tentang.php">Tentang</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
        <div class="search-container">
            <form action="../Product/Search.php" method="post">
                <input type=" text" placeholder="Search.." name="search">
                <button type="submit">Search</button>
            </form>
        </div>
    </div>

    <?php
    $value = $_POST['search'];
    //var_dump($value);
    $app_id = 'da8bf3cf';
    $apikey = '6b776ab38275c832c8e078b39b37b1bb';
    $type = 'public';
    $q = $value;
    // $q = 'pineapple';
    $ingr = '1-10';
    $iS = 'REGULAR';
    $url = 'https://api.edamam.com/api/recipes/v2?' . 'type='  . $type . '&q='  . $q . '&app_id=' . $app_id . '&app_key=' . $apikey . '&ingr=' . $ingr . '&imageSize=' . $iS;
    $konten = file_get_contents($url);
    $decode = json_decode($konten);
    $decode2 = json_decode($konten, true);
    //$jD = count($decode2);
    //echo $jD;
    foreach ($decode->hits as $hit) {
        $recipe = $hit->recipe;
        $item = array(
            'image' => $recipe->image,
            'label' => $recipe->label,
            'ingredientLines' => $recipe->ingredientLines
        );
        $data[] = $item;
    }

    // Menampilkan semua isi data
    foreach ($data as $item) {
        $var1 = $item['image'];
        $var2 = $item['label'];
        $var3 = $item['ingredientLines'];
        //session_start();
    ?>
        <br>
        <main>
            <div class="card">
                <div class="image">
                    <img src="<?php echo $var1; ?>" alt="Avatar">
                </div>
                <a href="detail-bahan-makanan.php?id=<?php echo $var2; ?>" class="link-to">
                    <div class="container">
                        <h4 class="nama-bahan-makanan"><b><?php echo $var2;
                                                            //$_SESSION['bahan'] = $var2  
                                                            ?>
                            </b>
                        </h4>
                        <ul>
                            <?php foreach ($var3 as $ingredient) { ?>
                                <li><?php echo $ingredient;
                                } ?></li>
                        </ul>
                    </div>
                </a>
            </div>
        </main>
    <?php
    }
    ?>
</body>

</html>