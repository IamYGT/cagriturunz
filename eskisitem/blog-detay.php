<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php"); 
	$tekil_veri_cek = $db->query("SELECT * FROM haberler WHERE haber_durum = 1 AND haber_seo = '{$_GET["url"]}' AND dil_id = 'tr' ")->fetch(PDO::FETCH_ASSOC);

?> 
<!DOCTYPE html>
<html lang="tr">
<head>

 <title><?php echo $tekil_veri_cek["haber_baslik"]; ?> - Çağrı Türünz I Ses Mühendisi </title>
<meta charset="UTF-8">
<meta name="description" content="<?php echo $tekil_veri_cek["haber_description"]; ?>">
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
<div class="container top_90">
    <!-- blog posts -->
    <div class="col-lg-8 offset-lg-2">
        <!-- a post -->
        <div class="blog-post single-blog bottom_60">
                <figure class="bottom_60">
                    <img style="    margin-top: 62px;"  src="<?php echo $ayarlar["strURL"]; ?>/uploads/blog/<?php echo $tekil_veri_cek["haber_resim"]; ?>" alt="<?php echo $tekil_veri_cek["haber_baslik"]; ?>">
                </figure>
            <div class="col-lg-10 offset-lg-1">
               
                <h2 class="blog-title bottom_15"><?php echo $tekil_veri_cek["haber_baslik"]; ?></h2>
                 <p><?php echo $tekil_veri_cek["haber_aciklama"]; ?></p>
              
            </div>
        </div>
        
        
    </div>
    
</div>
    
</div>
<?php include("alt.php")?>
<?php include("js.php")?>

</body>
</html>