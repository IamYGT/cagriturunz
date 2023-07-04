<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php"); ?>
<!DOCTYPE html>
<html lang="<?php echo $lang?>">
<head>
<!-- Basic Page Needs
================================================== -->
<title><?php echo $ayarlar["strTitle"]; ?> - Anasayfa</title>
<meta name="description" content="<?php echo $ayarlar["strDescription"]; ?>">
<meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php include("css.php")?>
</head>

<body> 
	<?php include("ust.php")?>
 
<div class="cd-transition-layer visible opening"> 
	<div class="bg-layer"></div>
</div><!-- Ink Transition -->

<div class="wrapper">
<!-- HOME
================================================== -->
<section class="main">
	<div class="main-content">
 		<h1 class="main-title">Ses Mühendisi<br>
		Kurumsal Danışman</h1>
		<div class="social">
             <a target="_blank" href="https://www.instagram.com/<?php echo $ayarlar["strInstagram"]; ?>"><i class="fab fa-instagram"></i></a>
             <a target="_blank" href="https://www.youtube.com/<?php echo $ayarlar["strYoutube"]; ?>"><i class="fab fa-youtube"></i></a>
			 <a target="_blank" href="https://www.linkedin.com/<?php echo $ayarlar["strLinkedin"]; ?>"><i class="fab fa-linkedin"></i></a>
			 
		</div>
	</div>
	<a class="down-arrow">
		<div class="down-inner">
			<img src="img/icons/down-arrow.svg" alt="">
			<div class="line"></div>
		</div>
	</a> 
    <div id="particles-js"></div>
</section>

<!-- PORTFOLIO CONTENT
================================================== -->
<section class="content bottom_90">
    <div class="container">
        
        <div class="vf">
            <div class="zigzag">
                <svg viewbox="0 0 69.172 14.975" width="37" height="28" y="0px" x="0px" xmlns="http://www.w3.org/2000/svg">
                 <path d="M1.357,12.26 10.807,2.81 20.328,12.332
                    29.781,2.879 39.223,12.321 48.754,2.79  58.286,12.321"></path>
                </svg>
            </div>
            <p><a href="<?php echo $ayarlar["strURL"]; ?>/projeler"> Tüm Projeler </a></p>
        </div>
        
        
        <div class="isotope_items row">
             

 
			 <a href="<?php echo $ayarlar["strURL"]; ?>/hizmetler-danismanliklar" class="single_item photography col-md-6">
                <figure>
                <img src="<?php echo $ayarlar["strURL"]; ?>/uploads/projeler/06.jpg" alt="Ses & Prodüksiyon">
                     <figcaption>
                                <ul>
                                    <li> <span>Çağrı Türünz</span> </li>
                                    <li><h3 class="title">Ses Prodüksiyon</h3></li>
                                </ul>
                    </figcaption>
                </figure>
            </a>
			
			 	 <a href="#" class="single_item photography col-md-6">
                <figure>
                <img src="<?php echo $ayarlar["strURL"]; ?>/uploads/projeler/ses-01.jpg" alt="Kurumsal Eğitim & Danışmanlık">
                     <figcaption>
                                <ul>
                                    <li> <span>Çağrı Türünz</span> </li>
                                    <li><h3 class="title">Kurumsal Eğitim Danışmanlık</h3></li>
                                </ul>
                    </figcaption>
                </figure>
            </a>
			
			 
	   </div> 
	   
    </div>
</section>
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

.single_item figure figcaption .title {
    font-size: 40px;
    color: #fff;
    line-height: 43px;
    font-family: 'Bebas Neue', cursive;
}  
</style> 

<script>
document.addEventListener('click', function(e) {
  e = e || window.event;
  console.log(e);
  var target = e.target || e.srcElement;
  console.log(target);
  if (target.parentElement.className.indexOf('has-submenu') > -1) {
    e.target.classList.toggle('open');
  }
}, false);

</script>
</body>
</html>