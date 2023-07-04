<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php"); 
	$tekil_veri_cek = $db->query("SELECT * FROM hizmetler WHERE haber_durum = 1 AND haber_seo = '{$_GET["url"]}' AND dil_id = 'tr' ")->fetch(PDO::FETCH_ASSOC); 
?> 
<!DOCTYPE html>
<html lang="tr">
<head>

<!-- Basic Page Needs
================================================== -->
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
<div class="container">
    <div class="page-content about-page">
        <div class="page-title top_90 bottom_60">
            <h1 class="title"><?php echo $tekil_veri_cek["haber_baslik"]; ?></h1>
            <div class="zigzag">
                <svg viewbox="0 0 69.172 14.975" width="37" height="28" y="0px" x="0px" xmlns="http://www.w3.org/2000/svg">
                 <path d="M1.357,12.26 10.807,2.81 20.328,12.332
                    29.781,2.879 39.223,12.321 48.754,2.79  58.286,12.321"></path>
                </svg>
            </div>
        </div>
    </div>
    <!-- Portfolio Detail -->
    <div class="col-lg-8 offset-lg-2 bottom_60"> 
        <p class="text-center"><?php echo $tekil_veri_cek["haber_aciklama"]; ?></p> 
    </div>
        
    
</div>
    
</div> <!-- wrapper end -->
<?php include("alt.php")?>
<?php include("js.php")?>
 
</body>
</html>