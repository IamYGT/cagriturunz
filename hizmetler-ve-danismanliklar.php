<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php"); ?>
<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Hizmetler ve Danışmanlıklar - Ses Mühendisi Çağrı Türünz</title>
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
    <header class="banner-header banner-img valign bg-img" data-overlay-dark="8"  data-background="<?php echo $ayarlar["strURL"]; ?>/img/gallery/01.jpg" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-2 text-right caption mt-60 animate-box" data-animate-effect="fadeInUp">
                     <h1>Hizmetler & Danışmanlıklar</h1>
                </div>
            </div>
        </div>
    </header>
    <!-- Services -->
    <section class="proto-services section-padding">
        <div class="container">
            <div class="row">
                       <?php
				$veri_cek = $db->query("SELECT * FROM egzozlar WHERE egzoz_durum = 1 ");
				if ($veri_cek->rowCount()){ 
				foreach($veri_cek as $veri_listele){
?>    <div class="col-md-4 animate-box" data-animate-effect="fadeInUp">
                    <div class="services-con mb-60">
                        <div class="services-title">
                            <h4><?php echo $veri_listele["egzoz_baslik"]; ?></h4>
                        </div> <img src="<?php echo $ayarlar["strURL"]; ?>/uploads/exhaust/<?php echo $veri_listele["egzoz_resim"]; ?>" alt="<?php echo $veri_listele["egzoz_baslik"]; ?>">
                        <a href="<?php echo $ayarlar["strURL"]; ?>/hizmet/<?php echo $veri_listele["egzoz_seo"]; ?>"></a>
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
	
	    <section class="section-padding">
        <div class="container">
		 <div style="    height: 18vh;" class=" banner-header col-md-12   text-left caption mt-60 animate-box" data-animate-effect="fadeInUp">
                     <h1>Projeler</h1>
                </div>
            <div class="row jophoto-photos" id="jophoto-section-photos">
                
			 
   <?php
				$veri_cek = $db->query("SELECT * FROM hizmetler WHERE haber_durum = 1 AND dil_id = 'tr' ORDER BY haber_ust_id DESC LIMIT 99");
 				if ($veri_cek->rowCount()){ 
				foreach($veri_cek as $veri_listele){
?>

			
				<div class="col-md-4 animate-box" data-animate-effect="fadeInUp">
                    <a href="<?php echo $ayarlar["strURL"]; ?>/proje/<?php echo $veri_listele["haber_seo"]; ?>" class="d-block jophoto-photo-item" > 
					<img src="<?php echo $ayarlar["strURL"]; ?>/uploads/projeler/<?php echo $veri_listele["haber_resim"]; ?>" alt="<?php echo $veri_listele["haber_baslik"]; ?>" class="img-fluid">
					
					<div class="photo-text-more"> <span style="font-size: 35px;" class="ti-zoom-in"></span> </div>
                    </a>
			<a href="<?php echo $ayarlar["strURL"]; ?>/proje/<?php echo $veri_listele["haber_seo"]; ?>">	 <h4> <?php echo $veri_listele["haber_baslik"]; ?>  </h4> </a> 
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
	  	 
	
	<section class="section-padding">
        <div class="container">
            <div class="row">
			 <div style="    height: 18vh;" class=" banner-header col-md-12   text-left caption mt-60 animate-box" data-animate-effect="fadeInUp">
                     <h1>Blog</h1>
                </div>
				
			 
   <?php
				$veri_cek = $db->query("SELECT * FROM haberler WHERE haber_durum = 1 AND dil_id = 'tr' ORDER BY haber_ust_id DESC LIMIT 99");
 				if ($veri_cek->rowCount()){ 
				foreach($veri_cek as $veri_listele){
?>

				  			

					<div class="col-md-4 animate-box" data-animate-effect="fadeInUp">
                    <div class="blog-entry">
                        <a href="<?php echo $ayarlar["strURL"]; ?>/blogdetay/<?php echo $veri_listele["haber_seo"]; ?>" class="blog-img"><img src="<?php echo $ayarlar["strURL"]; ?>/uploads/blog/<?php echo $veri_listele["haber_resim"]; ?>" class="img-fluid" alt="<?php echo 	$veri_listele["haber_baslik"]; ?>"></a>
                        <div class="desc">
                            <h3><a href="<?php echo $ayarlar["strURL"]; ?>/blogdetay/<?php echo $veri_listele["haber_seo"]; ?>"><?php echo 	$veri_listele["haber_baslik"]; ?></a></h3>
                            <p><?php echo $veri_listele["haber_kisaaciklama"]; ?></p>
							<a style="text-align:center;"  href="<?php echo $ayarlar["strURL"]; ?>/blogdetay/<?php echo $veri_listele["haber_seo"]; ?>"> Devamını Oku</a>
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

	<style>
	.section-padding {
		padding: 0;
	}
	</style>

</body>
</html>