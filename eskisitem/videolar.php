<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php"); ?>
<!DOCTYPE html>
<html lang="<?php echo $lang?>">
<head>

<!-- Basic Page Needs
================================================== -->
<title>Videolar - Çağrı Türünz I Ses Mühendisi</title>
<meta charset="UTF-8">
 <?php include("css.php")?>
 
 <link rel="stylesheet" href="icon-fonts/etlinefont/style.css">
    
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
    <div class="page-content about-page" style="margin-bottom: 52px;">
        <div class="page-title top_90">
            <h1 class="title">Videolar</h1>
            <div class="zigzag">
                <svg viewbox="0 0 69.172 14.975" width="37" height="28" y="0px" x="0px" xmlns="http://www.w3.org/2000/svg">
                 <path d="M1.357,12.26 10.807,2.81 20.328,12.332
                    29.781,2.879 39.223,12.321 48.754,2.79  58.286,12.321"></path>
                </svg>
            </div>
        </div>
        <!-- About text -->
        <div class="col-lg-12 text-center padding_30">
		
		  <div style="margin-bottom: 8px;" class="teammates row  ">
             <?php
				$veri_cek = $db->query("SELECT * FROM sss WHERE haber_durum = 1 ");
				if ($veri_cek->rowCount()){ 
				foreach($veri_cek as $veri_listele){
?> 
			   <div class="col-md-4 team">
			   <iframe id="video" width="420" height="250" src="//www.youtube.com/embed/<?php echo 	$veri_listele["haber_baslik"]; ?>?rel=0" frameborder="0" allowfullscreen></iframe>
			   </div>
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
    
</div><?php include("alt.php")?>
<?php include("js.php")?>


</body>
</html>