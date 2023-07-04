<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php"); ?>
<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Anasayfa - Ses Mühendisi Çağrı Türünz</title>
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
    <header class="header slider-fade">
        <div class="owl-carousel owl-theme">
            <div class="text-right item bg-img" data-overlay-dark="3" data-background="img/slider/1.jpg">
                <div class="v-middle caption mt-30">
 
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 ">
                                <div class="o-hidden">
                                     <h1>Çağrı Türünz</h1>
                                    <p>Ses Mühendisi & Kurumsal Danışman<br><br><a style="padding-left:10px;" class="" href="https://www.instagram.com/<?php echo $ayarlar["strInstagram"]; ?>"><i class="ti-instagram"> </i></a>
				<a  style="padding-left:25px; "class="" href="https://www.youtube.com/<?php echo $ayarlar["strYoutube"]; ?>"><i class="ti-youtube"> </i></a> 
				<a style="padding-left:25px;" class="" href="https://www.linkedin.com/in/<?php echo $ayarlar["strLinkedin"]; ?>"><i class="ti-linkedin"> </i></a></p>										
                                    <a href="<?php echo $ayarlar["strURL"]; ?>\hakkinda" target="_blank" class="butn butn-dark mt-30"> <span>Hakkında</span></a>
                            </div>
																		
								</div>

                            
                        </div>

                    </div>
                </div>
            </div>
            </div>
        <!-- Left Panel -->
        <div class="left-panel">
            <div class="left-txt">
                <a href="mailto:<?php echo $ayarlar["strMail"]; ?>" > <?php echo $ayarlar["strMail"]; ?> </a> 
             </div>
        </div>
    </header>
	 
    <section class="proto-services section-padding mb-40 mt-20">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-30">
                    <span class="section-subtitle">Çağrı Türünz</span>
                    <h2 class="section-title">Hizmetler ve Danışmanlıklar</h2>
                </div>
            </div>
            <div class="row"> 
			   
			   <div class="col-md-6 animate-box" data-animate-effect="fadeInUp">
			<a href="<?php echo $ayarlar["strURL"]; ?>/hizmetler-ve-danismanliklar"><div class="services-con mb-20">
		
			<img src="<?php echo $ayarlar["strURL"]; ?>/uploads/projeler/06.jpg" alt="Ses Prodüksiyon">  
		</div> 
		<h5 style="text-align:center;" > <a style="text-align:center;" href="<?php echo $ayarlar["strURL"]; ?>/hizmetler-ve-danismanliklar">  Ses Prodüksiyon </a> </h5> 
				</a></div>

		<div class="col-md-6 animate-box" data-animate-effect="fadeInUp">
		<a href="<?php echo $ayarlar["strURL"]; ?>/kurumsal-danismanlik"> <div class="services-con mb-20">
			 <img src="<?php echo $ayarlar["strURL"]; ?>/img/kurumsal-sayfa.jpg" alt="Kurumsal Eğitim Danışmanlık"> 
			</div> 
			 <h5 style="text-align:center;"><a style="text-align:center;" href="<?php echo $ayarlar["strURL"]; ?>/kurumsal-danismanlik">Kurumsal Eğitim Danışmanlık </a></h5> 
		</a> </div>
		
			</div>  </div>
    </section>
     <?php include("alt.php")?>
     <?php include("js.php")?>
</body>
</html>
