<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php"); ?>
<!DOCTYPE html>
<html lang="<?php echo $lang?>">
<head>

<!-- Basic Page Needs
================================================== -->
<title>Hizmetler ve Danışmanlıklar - Çağrı Türünz - Ses Mühendisi </title>
<meta charset="UTF-8">
 <?php include("css.php")?>
</head>

<body>
<?php include("ust.php")?>
<div class="cd-transition-layer visible opening"> 
	<div class="bg-layer"></div>
</div><!-- Ink Transition -->

<div class="wrapper">

<!-- PAGE CONTENT
================================================== -->
<div class="container">
    <div class="page-content about-page">
        <div class="page-title top_90 bottom_60">
            <h1 class="title">Hizmetler ve Danışmanlıklar</h1>
            <div class="zigzag">
                <svg viewbox="0 0 69.172 14.975" width="37" height="28" y="0px" x="0px" xmlns="http://www.w3.org/2000/svg">
                 <path d="M1.357,12.26 10.807,2.81 20.328,12.332
                    29.781,2.879 39.223,12.321 48.754,2.79  58.286,12.321"></path>
                </svg>
            </div>
        </div>
    </div>
    <!-- blog posts -->
    <div class="col-lg-12">
 
  <div class="isotope_items row">
             <?php
				$veri_cek = $db->query("SELECT * FROM hizmetler WHERE haber_durum = 1 ");
				if ($veri_cek->rowCount()){ 
				foreach($veri_cek as $veri_listele){
?> 

			 <a href="<?php echo $ayarlar["strURL"]; ?>/projedetay/<?php echo $veri_listele["haber_seo"]; ?>" class="single_item photography col-md-4">
                <figure>
                <img src="<?php echo $ayarlar["strURL"]; ?>/uploads/projeler/<?php echo $veri_listele["haber_resim"]; ?>" alt="">
                     <figcaption>
                                <ul>
                                     <li><h3 class="title"><?php echo 	$veri_listele["haber_baslik"]; ?></h3></li>
                                </ul>
                    </figcaption>
                </figure>
            </a>
			
			<?php 
					}
				}else{
					"Listelenecek veri bulunamadı.";
				}
?> 
	   </div>
	   
	   
		<div class="page-title top_90">
            <h1  style="margin-bottom:40px;" class="title">Projeler</h1>
          </div>
	     <div class="isotope_items row" style="    margin-bottom: 450px;" >
   
		
	<?php
				$veri_cek = $db->query("SELECT * FROM haberler WHERE haber_durum = 1 ");
				if ($veri_cek->rowCount()){ 
				foreach($veri_cek as $veri_listele){
?> 			           <div class="col-lg-4"> 
<div class="blog-post">
            <a class="blog-link" href="<?php echo $ayarlar["strURL"]; ?>/blogdetay/<?php echo $veri_listele["haber_seo"]; ?>">
                <figure class="bottom_60">
                    <img src="<?php echo $ayarlar["strURL"]; ?>/uploads/blog/<?php echo $veri_listele["haber_resim"]; ?>" alt="<?php echo 	$veri_listele["haber_baslik"]; ?>">
                </figure>
            </a>
			<div class="col-lg-12"> 
                <a class="blog-link" href="<?php echo $ayarlar["strURL"]; ?>/blogdetay/<?php echo $veri_listele["haber_seo"]; ?>"><h2 class="blog-title bottom_15"><?php echo 	$veri_listele["haber_baslik"]; ?></h2>
                 </a>
            </div>
           
        </div>   </div>
       <?php 
					}
				}else{
					"Listelenecek veri bulunamadı.";
				}
?>
	   
	
     
	   </div>
	      
		<div class="page-title top_90">
            <h1  style="margin-bottom:40px;" class="title">Blog</h1>
          </div>
	     <div class="isotope_items row" style="    margin-bottom: 440px;" >
   
		
	<?php
				$veri_cek = $db->query("SELECT * FROM haberler WHERE haber_durum = 1 ");
				if ($veri_cek->rowCount()){ 
				foreach($veri_cek as $veri_listele){
?> 			           <div class="col-lg-4"> 
<div class="blog-post">
            <a class="blog-link" href="<?php echo $ayarlar["strURL"]; ?>/blogdetay/<?php echo $veri_listele["haber_seo"]; ?>">
                <figure class="bottom_60">
                    <img src="<?php echo $ayarlar["strURL"]; ?>/uploads/blog/<?php echo $veri_listele["haber_resim"]; ?>" alt="<?php echo 	$veri_listele["haber_baslik"]; ?>">
                </figure>
            </a>
            <div class="col-lg-12"> 
                <a class="blog-link" href="<?php echo $ayarlar["strURL"]; ?>/blogdetay/<?php echo $veri_listele["haber_seo"]; ?>"><h2 class="blog-title bottom_15"><?php echo 	$veri_listele["haber_baslik"]; ?></h2>
                 </a>
            </div>
        </div>   </div>
       <?php 
					}
				}else{
					"Listelenecek veri bulunamadı.";
				}
?>
	   
	
     
	   </div>
	   
	   </div>
    
</div>
    
</div>
<?php include("alt.php")?>
<?php include("js.php")?>
<style>
.page-title span {
    font-size: 82px;
    font-weight: 700;
    z-index: -1;
    margin: auto;
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    color: #171717;
}
</style>

</body>
</html>