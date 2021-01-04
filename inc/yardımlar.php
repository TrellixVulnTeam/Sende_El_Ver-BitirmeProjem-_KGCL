<head>
    <link rel="stylesheet" href="css/Blog/style.css">

</head>

<?php
echo !defined("INDEX") ? header("Location: " . URL . "/404.html") : null;
// Sayfalama sistemi
$sorgu = $db->query("SELECT yapılılacak_yardımlar_id FROM yapılacak_yardımlar WHERE yapılılacak_yardımlar_p=0", PDO::FETCH_ASSOC);
$ksayisi = $sorgu->rowCount();
$sayfa = g("s") ? g("s") : 1;
$limit = 4; // 4 Tane gösteriyoruz tek seferde
$ssayisi = ceil($ksayisi / $limit);
$deger = 1;
if ($sayfa > $ssayisi) {
    $sayfa = 1;
} // Kullanıcı rastgele sayfa girebilir get ile, bunu önlemek için gereksiz sorgudan kurtulmak için
$baslangic = (($sayfa * $limit) + $deger) - $limit;

$row = $db->query("SELECT * FROM yapılacak_yardımlar WHERE yapılılacak_yardımlar_p=0 ORDER BY yapılılacak_yardımlar_id DESC LIMIT  $limit", PDO::FETCH_ASSOC);


            if ($ksayisi > 0) {
                foreach ($row as $yardim) { ?>

<div class="helpcard">
    <div class="imagebox">
        <img src="/Bitirme/<?php echo $yardim['yapılılacak_yardımlar_url'] ?>" alt="" />
    </div>
    <div class="contentbox">
        
        <h4>
              <?php echo kisaMetin($yardim['yapılacak_yardımlar_baslik'], 52) ?> <br>
            </h4>
       
        <p>
            <?php echo kisaMetin($yardim['yapılılacak_yardımlar_text'], 100) ?>
        </p>
        <h5 style="display:flex;padding:0 5px; justify-content: space-between;">
            <p><?php echo kisaMetin($yardim['yapılılacak_yardımlar_adres'], 100) ?></p>
            <p> <?php echo tarih($yardim['yapılacak_yardımlar_tarih'], 100) ?></p>
        </h5>
        <a href="#" class="help-btn">Yardım Detay</a>
    </div>
</div>



<?php } ?>

<?php } else { ?>
<section class="section">
    <div class="section-inner">
        <div class="item row">
            <p class="text-center"><i class="fa fa-file-text-o fa-5x"></i></p>
            <p class="text-center">Hiç içerik eklenmemiş.</p>
        </div>
    </div>
</section>


<?php } ?>