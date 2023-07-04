<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php"); ?>
<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Blog - Ses Mühendisi Çağrı Türünz</title>
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
    <header class="banner-header banner-img valign bg-img" data-overlay-dark="3" data-background="<?php echo $ayarlar["strURL"]; ?>/img/gallery/01.jpg"  data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-2 text-right caption mt-60">
                     <h1>Blog</h1> </div>
            </div>
        </div>
    </header>
    <!-- Blog  -->
    <section class="section-padding">
        <div class="container">
            <div class="row">
			 
	<?php
				$veri_cek = $db->query("SELECT * FROM haberler WHERE haber_durum = 1 ");
				if ($veri_cek->rowCount()){ 
				foreach($veri_cek as $veri_listele){
?> 	  			<div class="col-md-4 animate-box" data-animate-effect="fadeInUp">
                    <div class="blog-entry">
                        <a href="<?php echo $ayarlar["strURL"]; ?>/blogdetay/<?php echo $veri_listele["haber_seo"]; ?>" class="blog-img"><img src="<?php echo $ayarlar["strURL"]; ?>/uploads/blog/<?php echo $veri_listele["haber_resim"]; ?>" class="img-fluid" alt="<?php echo 	$veri_listele["haber_baslik"]; ?>"></a>
                        <div class="desc">
                            <h3><a href="<?php echo $ayarlar["strURL"]; ?>/blogdetay/<?php echo $veri_listele["haber_seo"]; ?>"><?php echo 	$veri_listele["haber_baslik"]; ?></a></h3>
                            <p><?php echo $veri_listele["haber_kisaaciklama"]; ?></p>
                        </div>
                    </div>
                </div>
                 <?php 
					}
				}else{
					"Listelenecek veri bulunamadı.";
				}
?>
	  

			   </div>
           
        </div>
    </section>
   	<?php include("alt.php")?>
	<?php include("js.php")?>
</body>

</html>