<?php
define("INDEX", true);
require_once('config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="Assets/css/main.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />
  <link rel="stylesheet" href="">
  
  <scrip src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></scrip>
  <title> SEV - Anasayfa</title>
</head>

<body>
  <!-- Header  Start -->
  <?php include "inc/Header.php";?>

  <div class="main">
    <div class="slider" id="Slider">
      <div class="slides">
        <h1>Kalan Yemekleri Çöpe ATMA</h1>
        <p>
          Yemediğiniz yemkeleri çöpe atmayarak küçük doslarımız için
          hazırlanaıp barınak ve uygun ye konumdaki yerlere hayvanlara vermke
          için topluyoruz
        </p>
      </div>
      <div class="slides current">
        <h1>Hadi sende El ver </h1>
        <p>
          Çevrenizdeki bizlerden küçükde olsa yardım bekleyen küçük dosylarımıza yardım etmek için sizlerden alğıgımız
          yiyecekleri küçük dostlarımıza ulaştırrıyoruz.

        </p>
      </div>
      <div class="slides">
        <h1>Sende Gönüllü olmak ister misin</h1>
        <p>
          küçük dostlarımız için oluşturulan yardımları dostlarıma ulaştırmak için gönüllü arkdaşlarmızın yardımına
          ihtiyacımız var.
        </p>
      </div>
      <div class="slides">
        <h1>Küçük Dostlarımız için Burdayız</h1>
        <p>
          Lokantlarda müşterilerin önlerinde kalan ve mama yardım yaparak küçük dostlarımıza yardım edebilirsimiz.

        </p>
      </div>
      <div class="slides">
        <h1>Sende Bizimle ol</h1>
        <p>
        Bu Gönüllü olarak çıktığımız yolda sizleri aramızda görmek bizi mutlu edecektir.
        </p>
      </div>
    </div>
    <a id="prev" class="prev">
      <</a> <a id="next" class="next">>
    </a>
    <a href="yapilacak-yardimlar.php" class="suppart_btn">Yardım Bekleyen Küçük Dostlarımız</a>
  </div>
  <!-- <h1></h1>
        <p>
          Yemediğiniz yemkeleri çöpe atmayarak küçük doslarımız için hazırlanaıp
          barınak ve uygun ye konumdaki yerlere hayvanlara vermke için
          topluyoruz
        </p> -->
  <!-- <a href="#" class="btn">Yardıma Muhtaçlar</a> -->

  <!-- Header End -->


  <!-- Made Helps Start -->
  <section class="Helps" id="Helps">
    <div class="section-title">
      <h1><span>Y</span>ardımlar</h1>
      <p>Etrafımızda olan küçük dostlarımız için oluşturulan yardımlar</p>
    </div>
    <div class="helpcards">
      <?php include "inc/yardımlar.php"; ?>

    </div>
  </section>

  <!-- Made Helps End -->

  <!--to do Made Helps Start -->
  <section class="Helps" id="Helps">
    <div class="section-title">
      <h1>Yapılan<span>Y</span>ardımlar</h1>
      <p>Yardım Ettiğimiz küçük dostlarımız</p>
    </div>
    <div class="helpcards">

      <?php include "inc/yapılan_yardımlar.php"; ?>

    </div>
  </section>

  <!-- to do Made Helps End -->

  <!-- Partners Start -->

  <?php include "inc/partner.php";?>

  <!-- Partners End -->

  <!-- Helps Button Start -->
  <section class="Help_button">
    <a href="İletişim.php">YARDIMDA BULUN</a>
  </section>
  <!-- Helps Button End -->

  <!-- Footer Start -->
  <?php include "inc/footer.php";?>

  <!-- Footer End -->
  <script type="text/javascript" src="Assets/js/slider.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script type="text/javascript">
     $(document).ready(function () {
      $(window).scroll(function () {
        if (this.scrollY > 10) {
          $(".navbar").addClass("stiyk");
        } else {
          $(".navbar").removeClass("stiyk");
        }
      });
      $(".menu-toggle").click(function () {
        $(this).toggleClass("active");
        $(".navbar-menu").toggleClass("active");
      });
    });
  </script>
</body>

</html>