<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php"); ?>
<!DOCTYPE html>
<html lang="<?php echo $lang?>">
<head>

<!-- Basic Page Needs
================================================== -->
<title><?php echo $ayarlar["strTitle"]; ?> - İletişim </title>
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

<!-- PAGE CONTENT
================================================== -->
<div class="container">
    <div class="page-content about-page">
        <div class="page-title top_90">
            <h1 class="title">İletişim</h1>
            <div class="zigzag">
                <svg viewbox="0 0 69.172 14.975" width="37" height="28" y="0px" x="0px" xmlns="http://www.w3.org/2000/svg">
                 <path d="M1.357,12.26 10.807,2.81 20.328,12.332
                    29.781,2.879 39.223,12.321 48.754,2.79  58.286,12.321"></path>
                </svg>
            </div>
        </div>
    </div>
	 <div class="col-lg-6 offset-lg-3 top_90 bottom_60" style="margin-top: 50px;" >
        <ul class="list-style row text-center">
            <li class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><a href="mailto:<?php echo $ayarlar["strMail"]; ?>">EPOSTA<span><?php echo $ayarlar["strMail"]; ?></span></a></li>
         </ul>
    </div>
	
    <!-- Contact -->
    <div class="col-lg-6 offset-lg-3">
        <!-- Send a message -->
        <div class="form top_100 bottom_120 text-center">
            <h2 class="form-title bottom_60">İletişim Formu</h2>
            <form class="contact-form top_30" method="POST">
                <div class="row">
                    <!--Name-->
                    <div class="col-md-6">
                        <input id="con_name" name="con_name" class="form-inp requie" type="text" placeholder="İsminiz">
                    </div>
                    <!--Email-->
                    <div class="col-md-6">
                        <input id="con_email" name="con_email" class="form-inp requie" type="text" placeholder="E-posta">
                    </div>  <div class="col-md-6">
                        <input id="telefon" name="con_name" class="form-inp requie" type="text" placeholder="Telefon">
                    </div>  <div class="col-md-6">
                        <input id="konu" name="con_subject" class="form-inp requie" type="text" placeholder="Konu">
                    </div>
                    <div class="col-md-12">
                        <!--Message-->
                        <textarea name="con_message" id="con_message" class="requie" placeholder="Mesajınız" rows="8"></textarea>
                        <button id="con_submit" class="form-btn" type="submit">GÖNDER</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Social Links -->
   
    
</div>
    
</div>
<?php include("alt.php")?>
<?php include("js.php")?>

</body>
</html>