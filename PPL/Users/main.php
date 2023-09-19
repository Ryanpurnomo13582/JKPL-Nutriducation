<!DOCTYPE html>
<html>

<head>
  <title></title>
  <link rel="stylesheet" href="style.css">
  <link rel="icon" href="../images/brand_favicon.png">
</head>

<style>
  .mySlides {
    display: block;
  }
</style>

<body>
  <div class="topnav" id="myTopnav">
    <a href="home.html" class="active">=</a>
    <a href="main.php">Home</a>
    <a href="../Admin/kontak.php">Kontak</a>
    <div class="dropdown">
      <a href="#kategori">Kategori</a>
      <div class="dropdown-content">
        <a href="../Product/bahan-makanan.php">Bahan Makanan</a>
        <a href="../Product/jenis-penyakit.php">Penyakit</a>
        <a href="../Product/resep-masakan.php">Resep Masakan</a>
        <a href="../Product/kalkulator-bahan_makanan.php">Kalkulator</a>
      </div>
    </div>
    <a href="../Product/tentang.php">Tentang</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
    <div class="search-container">
      <form action="../Product/Search.php" method="post">
        <input type="text" placeholder="Search.." name="search">
        <button type="submit">Submit</button>
      </form>
    </div>
  </div>


  <div class="slideshow-container">

    <div class="mySlides fade">
      <img src="../images/1.png" style="width:100%">
    </div>

    <div class="mySlides fade">
      <img src="../images/2.png" style="width:100%">
    </div>

    <div class="mySlides fade">
      <img src="img_mountains_wide.jpg" style="width:100%">
    </div>

    <a class="prev" onclick="plusSlides(-1)"></a>
    <a class="next" onclick="plusSlides(1)"></a>

  </div>
  <br>

  <div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
  </div>

  <?php
  ?>
  <div class="card">
    <div class="circle">
      <div class="progress-bar" style="--i:85; --clr:#43f94a;">
        <h3>85<span>%</span></h3>
        <h4>Asupan Kalori</h4>
      </div>
    </div>
    <div class="container">
      <h1 class="">Nutrition Facts</h1>
      <table class="">
        <thead>
          <tr>
            <th>Amount Per Serving</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th><b>Calories</b></th>
            <td class="cal-res">1774</td>
          </tr>
          <tr>
            <th><b>Total Fat "18.3 gram"</b></th>
          </tr>
          <tr>
            <th><b>Cholestrol "0 mg"</b></th>
          </tr>
          <tr>
            <th><b>Sodium "70 mg"</b></th>
          </tr>
          <tr>
            <th><b>Protein "70 gram"</b></th>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <?php
  ?>
  <script>
    let slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
      showSlides(slideIndex += n);
    }

    function currentSlide(n) {
      showSlides(slideIndex = n);
    }

    function showSlides(n) {
      let i;
      let slides = document.getElementsByClassName("mySlides");
      let dots = document.getElementsByClassName("dot");
      if (n > slides.length) {
        slideIndex = 1
      }
      if (n < 1) {
        slideIndex = slides.length
      }
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex - 1].style.display = "block";
      dots[slideIndex - 1].className += " active";
    }
  </script>
</body>

</html>