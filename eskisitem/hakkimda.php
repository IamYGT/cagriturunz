<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php"); ?>
<!DOCTYPE html>
<html lang="<?php echo $lang?>">
<head> 
<title>Hakkında - Çağrı Türünz I Ses Mühendisi</title>
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
            <h1 class="title">Hakkında</h1>
            <div class="zigzag">
                <svg viewbox="0 0 69.172 14.975" width="37" height="28" y="0px" x="0px" xmlns="http://www.w3.org/2000/svg">
                 <path d="M1.357,12.26 10.807,2.81 20.328,12.332
                    29.781,2.879 39.223,12.321 48.754,2.79  58.286,12.321"></path>
                </svg>
            </div>
        </div>
        <!-- About text -->
        <div class="col-lg-8 offset-lg-2 text-center padding_30">
		
		  <div style="margin-bottom: 8px;" class="teammates row  ">
                <div class="col-md-4 team"></div>
                <div class="col-md-4 team">
                    <img src="img/team-2.jpg" alt="Çağrı TÜRÜNZ">
                 </div>
                <div class="col-md-4 team"></div>
            </div> 
			
			  <div style="    margin-top: 0px;margin-bottom: 30px;" class="col-lg-4 offset-lg-4">
 					<div class="social" style="     text-align: center;   margin-top: 20px;">
             <a target="_blank" href="https://www.instagram.com/<?php echo $ayarlar["strInstagram"]; ?>"><i class="fab fa-instagram"></i></a>
             <a target="_blank" href="https://www.youtube.com/<?php echo $ayarlar["strYoutube"]; ?>"><i class="fab fa-youtube"></i></a>
			 <a target="_blank" href="https://www.linkedin.com/<?php echo $ayarlar["strLinkedin"]; ?>"><i class="fab fa-linkedin"></i></a>
				</div></div>
				
				
            <?php echo $ayarlar["hakkimizda_tr"]; ?> 
            
        </div> 
       
    </div>
    
</div>
    
</div><?php include("alt.php")?>
<?php include("js.php")?>


</body>
</html>