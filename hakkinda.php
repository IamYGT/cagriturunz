<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php"); ?>
<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Hakkında - Ses Mühendisi Çağrı Türünz</title>
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
    <header class="banner-header banner-img valign bg-img" data-overlay-dark="7" data-background="img/gallery/01.jpg" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                <div class="col-md-7 offset-md-5 text-right caption mt-60 animate-box" data-animate-effect="fadeInUp">
                     <h1>Hakkında</h1>
                </div>
            </div>
        </div>
    </header>
    <!--  About -->
    <section class="section-padding mt-30 mb-30">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-7 mb-60">
                            <div class="row">
                                <div class="col-md-3 animate-box" data-animate-effect="fadeInUp"> <span class="line-one"></span> </div>
                                <div class="col-md-8 animate-box" data-animate-effect="fadeInUp">
                                    <?php echo $ayarlar["hakkimizda_tr"]; ?> 
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 animate-box" data-animate-effect="fadeInUp">
                            <div class="jophoto-about-img">
                                <div class="img"> <img src="img\about.jpg" alt=""> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php include("alt.php")?>
<?php include("js.php")?>
</body>
</html>