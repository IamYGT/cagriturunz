<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php"); 
	$tekil_veri_cek = $db->query("SELECT * FROM egzozlar WHERE egzoz_durum = 1 AND egzoz_seo = '{$_GET["url"]}' AND dil_id = 'tr' ")->fetch(PDO::FETCH_ASSOC);
?> 
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
 <title><?php echo $tekil_veri_cek["egzoz_baslik"]; ?> - Ses Mühendisi Çağrı Türünz </title>
<?php include("css.php")?>
</head>
<body>
    <!-- Loading -->
    <div class="loading">
        <div class="text-center middle">
            <div class="lds-ellipsis">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
   <?php include("ust.php")?>
    <header class="banner-header banner-img valign bg-img" data-overlay-dark="3" data-background="<?php echo $ayarlar["strURL"]; ?>/img/gallery/01.jpg" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                <div class="col-md-7 offset-md-5 text-right caption mt-60 animate-box" data-animate-effect="fadeInUp">
                     <h1><?php echo $tekil_veri_cek["egzoz_baslik"]; ?></h1> 
                </div>
            </div>
        </div>
    </header>
    <!-- Post -->
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 animate-box" data-animate-effect="fadeInUp"> <img class="mb-30" src="<?php echo $ayarlar["strURL"]; ?>/uploads/exhaust/<?php echo $tekil_veri_cek["egzoz_resim2"]; ?>" alt="<?php echo $tekil_veri_cek["egzoz_baslik"]; ?>">
                    <p><?php echo $tekil_veri_cek["egzoz_aciklama"]; ?></p>
                </div>
            </div>
              </div>
    </section>
    <!-- Footer -->
<?php include("alt.php")?>
<?php include("js.php")?>
</body>

</html>