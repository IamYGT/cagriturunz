<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php"); ?>
<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>İletişim - Ses Mühendisi Çağrı Türünz</title>
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
    <header class="banner-header banner-img valign bg-img" data-overlay-dark="3" data-background="<?php echo $ayarlar["strURL"]; ?>/img/gallery/01.jpg"  data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                <div class="col-md-7 offset-md-5 text-right caption mt-60 animate-box" data-animate-effect="fadeInUp">
                     <h1>İletişim</h1> </div>
            </div>
        </div>
    </header>
    <!-- Contact -->
    <section class="section-padding">
        <div class="container">
            <div class="row mb-90">
                <div class="col-md-6 mb-30 animate-box" data-animate-effect="fadeInUp">
                    <h6>İletişim Bilgileri</h6>
                    <p>İletişim Formundan bana ulaşabilir veya Eposta aracılığıyla <br>iletişime geçebilirsiniz.</p>
                    <p><b>Eposta :</b> <a href="mailto:<?php echo $ayarlar["strMail"]; ?>"> <?php echo $ayarlar["strMail"]; ?> </a></p>
                 </div>
                <div class="col-md-6 animate-box" data-animate-effect="fadeInUp">
                    <h6>İletişim Formu</h6>
					
					 <?php 
										if(isset($submit)){
											if(!empty($isim) ||  !empty($eposta) || !empty($telefon) || !empty($konu) ||  !empty($mesaj)){  

                                           /*          require 'include/PHPMailer/src/Exception.php';
                                                    require 'include/PHPMailer/src/PHPMailer.php';
                                                    require 'include/PHPMailer/src/SMTP.php'; */
                                                    require_once("include/phpmailer/class.phpmailer.php");
                                                    $mail = new PHPMailer(true); 
                                                    $mail->IsSMTP();
                                                    $mail->SMTPDebug = 0; 
                                                    $mail->SMTPAuth = true;
                                                    $mail->SMTPSecure = 'tls';
                                                    $mail->Host = 'smtp.yandex.com';
                                                    $mail->Port = 587;
                                                    $mail->IsHTML(true);
                                                    $mail->SetLanguage("tr", "phpmailer/language");
                                                    $mail->CharSet ="utf-8";
                                                    $mail->Username = "info@cagriturunz.com"; //yandex mail adresi
                                                    $mail->Password = "Ab112233";
                                                    $mail->SetFrom("info@cagriturunz.com", "Çağrı Türünz İletişim Formu Gelen Mesaj"); // Mail attığımızda yazacak isim
                                                    $mail->AddAddress("info@cagriturunz.com"); // Maili gondereceğimiz kişi/alıcı
                                                    $mail->Subject = "Çağrı Türünz İletişim Formu Gelen Mesaj"; // Konu başlığı 
                                                    $mail->Body = '
                                                    <html>
                                                        <body>
                                                            <table class="made-in_text" border="0" cellSpacing="10" cellPadding="4" height="254" width="700">
																<tr>
                                                                    <td height="30" width="145" align="left">
                                                                    <font face="Tahoma" size="2"><strong>Adı :</strong></font></td>
                                                                    <td align="left" width="509" bgcolor="#F6FDEC">
                                                                    <font size="2" face="Tahoma">'. $isim . '</font></td>
                                                                </tr>  
																 <tr>
                                                                    <td height="30" width="145" align="left">
                                                                    <font face="Tahoma" size="2"><strong>Eposta :</strong></font></td>
                                                                    <td align="left" width="509" bgcolor="#F6FDEC">
                                                                    <font size="2" face="Tahoma">'. $eposta . '</font></td>
                                                                </tr>  
																 <tr>
                                                                    <td height="30" width="145" align="left">
                                                                    <font face="Tahoma" size="2"><strong>Konu :</strong></font></td>
                                                                    <td align="left" width="509" bgcolor="#F6FDEC">
                                                                    <font size="2" face="Tahoma">'. $konu . '</font></td>
                                                                </tr>  
																 	 <tr>
                                                                    <td height="30" width="145" align="left">
                                                                    <font face="Tahoma" size="2"><strong>Telefon :</strong></font></td>
                                                                    <td align="left" width="509" bgcolor="#F6FDEC">
                                                                    <font size="2" face="Tahoma">'. $telefon . '</font></td>
                                                                </tr>  
																 <tr>
                                                                    <td height="30" width="145" align="left">
                                                                    <font face="Tahoma" size="2"><strong>Mesaj :</strong></font></td>
                                                                    <td align="left" width="509" bgcolor="#F6FDEC">
                                                                    <font size="2" face="Tahoma">'. $mesaj . '</font></td>
                                                                </tr>  
																  
                                                            </table>
                                                        </body>
                                                    </html>
                                                    '; // Mailin içeriği
                                               
												if($mail->send()){
													$error = array(
														'type'	=>	'success',
														'title'	=>	'Başarılı!',
														'text'	=>	'Mesajınız başarıyla gönderildi. Ana sayfaya geri dön <a class="alert-link" href="/">Anasayfa</a>..'
													);
												} else {
													$error = array(
														'type'	=>	'danger',
														'title'	=>	'Gönderilemedi!',
														'text'	=>	'Mesajınız Gönderilemedi. Lütfen yeniden deneyiniz.'
													);
												}
											} else {
												$error = array(
													'type'	=>	'danger',
														'title'	=>	'Gönderilemedi!',
														'text'	=>	'Mesajınız Gönderilemedi. Lütfen yeniden deneyiniz.'
												);
											}
										} 
?>

									
									<?php  
			if(isset($error)) {
?>
					<div class="row">
						<div class="col-lg-12">
							<div class="alert alert-<?php echo $error["type"]; ?> solid alert-dismissible fade show">
								<strong><?php echo $error["title"]; ?></strong>
								<p><?php echo $error["text"]; ?></p>
							</div>
						</div>
					</div>
<?php
			}
?>  <form action="#"  method="post" class="row">
                        <div class="col-md-6">
                            <input type="text" name="isim"   placeholder="İsminiz"> </div>     <div class="col-md-6">
                            <input type="text" name="telefon"  placeholder="Telefon"> </div>     <div class="col-md-6">
                            <input type="text" name="konu"   placeholder="Konu"> </div>
                        <div class="col-md-6">
                            <input type="email" name="eposta"   placeholder="E-posta" required=""> </div>
                        <div class="col-md-12">
                            <textarea name="mesaj"   cols="40" rows="4" placeholder="Mesaj"></textarea>
                        </div>
                        <div class="col-md-12">
                            <button class="butn-dark mt-10" name="submit">Gönder</button>
                        </div>
                    </form>
                </div>
            </div> 
        </div>
    </section>
<?php include("alt.php")?>
 <?php include("js.php")?>
</body>

</html>