<!DOCTYPE html>
<html>

<head>
    <title></title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="../images/brand_favicon.png">
</head>
<style>
    a {
        text-decoration: none;
    }

    .card {
        color: black;
        text-decoration: none;
    }
</style>

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
            <form action="/action_page.php">
                <input type="text" placeholder="Search.." name="search">
                <button type="submit">Search</button>
            </form>
        </div>
    </div>

    <?php
    $app_id = 'da8bf3cf';
    $apikey = '6b776ab38275c832c8e078b39b37b1bb';
    $type = 'public';
    $q = 'pineapple';
    /*session_start();
    $_SESSION['bahan'] = $q;*/
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
        /*session_start();
        $_SESSION['bahan'] = $var2;*/
    ?>

        <div class="card">
            <img src="<?php echo $var1; ?>" alt="Avatar" style="width:100%">
            <a href="detail-bahan-makanan.php" class="link-to">
                <div class="container">
                    <h4><b><?php echo $var2; ?></b></h4>
                    <ul>
                        <?php foreach ($var3 as $ingredient) { ?>
                            <li><?php echo $ingredient;
                            } ?></li>
                    </ul>
                </div>
            </a>
        </div>

    <?php
    }
    ?>
</body>

</html>