<?php require("../include/baglan.php");include("../include/fonksiyon.php"); 
		if(!isset($_SESSION['LOGIN']) && !in_array(array('login'))) {
			go("index.php",0);  
			exit();
		}
		define('TABLE',"ayarlar");
		define('AREA',"ayarlar");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Memsidea - Yönetim Paneli</title>
    <!-- Favicon icon -->
    <link href="vendor\bootstrap-daterangepicker\daterangepicker.css" rel="stylesheet">
    <!-- Clockpicker -->
    <link href="vendor\clockpicker\css\bootstrap-clockpicker.min.css" rel="stylesheet">
    <!-- asColorpicker -->
    <link href="vendor\jquery-asColorPicker\css\asColorPicker.min.css" rel="stylesheet">
    <!-- Material color picker -->
    <link href="vendor\bootstrap-material-datetimepicker\css\bootstrap-material-datetimepicker.css" rel="stylesheet">
    <!-- Pick date -->
    <link rel="stylesheet" href="vendor\pickadate\themes\default.css">
    <link rel="stylesheet" href="vendor\pickadate\themes\default.date.css">
    <!-- Custom Stylesheet -->
    <link href="vendor\bootstrap-select\dist\css\bootstrap-select.min.css" rel="stylesheet">
    <link href="css\style.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/fa27a1c3e4.js" crossorigin="anonymous"></script> 
	<link href="vendor/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">
	<link href="vendor\summernote\summernote.css" rel="stylesheet">
		<script src="vendor/ck/ckeditor/ckeditor.js"></script>
	<script src="vendor/ck/ckfinder/ckfinder.js"></script>


</head>

<body>
    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">
        <?php include("menu.php")?>
        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">
                <div class="row">
<?php 	
				if (isset($submitControl)) {
					$settingsInfo = $db->query("select * from ".AREA." where ayar_id = '1'")->fetch(PDO::FETCH_ASSOC); 
					$webSettings = json_decode($settingsInfo["ayar_icerik"], true);
					
					$upload = new Upload($_FILES['logo']);  
					if(!isset($_FILES['logo']['name'])) {
						$logo = null;
					} else if(!empty($_FILES['logo']['name'])) {
						$upload->file_auto_rename = true; 
						$upload->process("../assets/images");
						if ($upload->processed) {
							$logo = $upload->file_dst_name;
						} else {
							$logo = null;
						}
					} else {
						$logo = $webSettings["logo"];
					} 
					 
					$upload = new Upload($_FILES['footerLogo']);  
					if(!isset($_FILES['footerLogo']['name'])) {
						$footerLogo = null;
					} else if(!empty($_FILES['footerLogo']['name'])) {
						$upload->file_auto_rename = true; 
						$upload->process("../assets/images");
						if ($upload->processed) {
							$footerLogo = $upload->file_dst_name;
						} else {
							$footerLogo = null;
						}
					} else {
						$footerLogo = $webSettings["footerLogo"];
					} 
					  
					$upload = new Upload($_FILES['favicon']);  
					if(!isset($_FILES['favicon']['name'])) {
						$favicon = null;
					} else if(!empty($_FILES['favicon']['name'])) {
						$upload->file_auto_rename = true; 
						$upload->process("../assets/images");
						if ($upload->processed) {
							$favicon = $upload->file_dst_name;
						} else {
							$favicon = null;
						}
					} else {
						$favicon = $webSettings["favicon"];
					} 
					$strSettings = array();
					foreach($_POST AS $key => $value) {
						if($key != 'submit' && $key != 'strRobots')
							$strSettings[$key] = trim($value);
					}
					
					if($strRobots){
						if(file_exists('../Robots.txt')) {
							unlink('../Robots.txt');
						}
						$dosya = fopen("../Robots.txt","a"); 
						fwrite($dosya,$strRobots); 
						fwrite($dosya,"\r\n"); 
						fclose($dosya);
					}
					
					$strSettings['logo'] = $logo;
					$strSettings['footerLogo'] = $footerLogo;
					$strSettings['favicon'] = $favicon;
					$strSettings = json_encode($strSettings, JSON_UNESCAPED_UNICODE);  
					$strSettings = addslashes($strSettings);
					$update = $db->prepare("UPDATE ".AREA." SET ayar_icerik = '{$strSettings}' WHERE ayar_id = ?");
					$update->execute(array(1)); 
					if($update){ 					
						$error = Bilgilendirme::Basarili("Başarılı bir şekilde güncellendi.");
						echo '<meta http-equiv="refresh" content="1;url='.AREA.'">';
					}else{     
						$error = Bilgilendirme::Hata("Hay Akis! Bir hata meydana geldi.");
					} 
					
				}else{
				$settings = $db->query("select * from ".AREA." where ayar_id = '1'")->fetch(PDO::FETCH_ASSOC); 
				$row_info = json_decode($settings["ayar_icerik"], true);
?>		
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Genel Ayarlar</h4>
                            </div>
                            <div class="card-body">
                                <!-- Nav tabs -->
                                <div class="custom-tab-1">
                                    <ul class="nav nav-tabs">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#site"><i class="las la-wrench mr-2"></i>Site</a>
                                        </li>
										
                                           <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#kurumsal"><i class="la la-archive mr-2"></i>Hakkımda</a>
                                        </li>
                                           
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#sosyal"><i class="la la-user mr-2"></i> Sosyal Medya</a>
                                        </li>
 
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#mail"><i class="las la-mail-bulk mr-2"></i>  Mail</a>
                                        </li>
										 
                                    </ul>
									<form action="#" method="POST" enctype="multipart/form-data"> 
										<div class="tab-content"> 
											<div class="tab-pane fade show active" id="site" role="tabpanel">
												<div class="col-lg-12">
													<div class="card">
														<div class="card-body">
															<div class="form-validation"> 
																<div class="row">
																	<div class="col-xl-6 mb-3">
																		<div class="form-group row">
																			<label class="col-lg-4 col-form-label" for="">Site İsmi <span class="text-danger">*</span> </label>
																			<div class="col-lg-8">
																				<input type="text" class="form-control" id="" name="strTitle" placeholder="Site İsmi Giriniz.." value="<?php echo $row_info["strTitle"]?>">
																			</div>
																		</div> 
																	</div> 
																	<div class="col-xl-6 mb-3">
																		<div class="form-group row">
																			<label class="col-lg-4 col-form-label" for="val-suggestions">Site Adresi <span class="text-danger">*</span></label>
																			<div class="col-lg-8">
																				<div class="input-group mb-3  input-success"> 
																					<input type="text" name="strURL" class="form-control" value="<?php echo $row_info["strURL"]?>">
																				</div>
																			</div>
																		</div>
																	</div> 
																	<div class="col-xl-12 mb-3"> 
																		<div class="form-group row">
																			<label class="col-lg-2 col-form-label" for="val-suggestions">Site Açıklaması (description)<span class="text-danger">*</span>  </label>
																			<div class="col-lg-10">
																				<textarea class="form-control" name="strDescription" rows="4" id="comment"><?php echo $row_info["strDescription"]?></textarea>
																			</div>
																		</div>
																	</div> 
																	<div class="col-xl-6 mb-3"> 
																		<div class="form-group row">
																			<label class="col-lg-4 col-form-label" for="val-suggestions">Logo<span class="text-danger">*</span>  </label>
																			<div class="col-lg-8">
																				<div class="input-group mb-3">
																					<div class="custom-file">
																						<input type="file" name="logo" class="custom-file-input">
																						<label class="custom-file-label">Dosya Seç</label>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="col-xl-6 mb-3">
																		<div class="form-group row">
																			<label class="col-lg-4 col-form-label" for="val-suggestions">  Logo (Footer)<span class="text-danger">*</span> </label>
																			<div class="col-lg-8">
																				<div class="input-group mb-3">
																					<div class="custom-file">
																						<input type="file" name="logoFooter" class="custom-file-input">
																						<label class="custom-file-label">Dosya Seç</label>

																					</div>
																				</div>
																			</div>
																		</div>
																	</div> 
																	<div class="col-xl-12 mb-3">
																		<div class="form-group row">
																			<label class="col-lg-2 col-form-label" for="val-suggestions">  Favicon<span class="text-danger">*</span> </label>
																			<div class="col-lg-10">
																				<div class="input-group mb-3">
																					<div class="custom-file">
																						<input type="file" name="favicon" class="custom-file-input">
																						<label class="custom-file-label">Dosya Seç</label>

																					</div>
																				</div>
																			</div>
																		</div>
																	</div>  
																	<div class="col-lg-6 mb-3">
																		<div class="form-group row">
																			<label class="col-lg-4 col-form-label" for="val-suggestions"> Telefon<span class="text-danger">*</span> </label>
																			<div class="col-lg-8">
																				<input type="text" name="strPhone" class="form-control" placeholder="(+90)546 111 22 33"  value="<?php echo $row_info["strPhone"]?>">
																			</div>
																		</div>
																	</div> 
																	<div class="col-lg-6 mb-3">
																		<div class="form-group row">
																			<label class="col-lg-4 col-form-label" for="val-suggestions"> Faks<span class="text-danger">*</span> </label>
																			<div class="col-lg-8">
																				<input type="text" name="strFax" class="form-control" placeholder="(+90)546 111 22 33"  value="<?php echo $row_info["strFax"]?>">
																			</div>
																		</div>
																	</div> 
																	
																	<div class="col-lg-12 mb-3">
																		<div class="form-group row">
																			<label class="col-lg-2 col-form-label" for="val-suggestions"> E-posta<span class="text-danger">*</span> </label>
																			<div class="col-lg-10">
																				<input type="text" name="strMail" class="form-control" placeholder="info@alanadiniz.com"  value="<?php echo $row_info["strMail"]?>">
																			</div>
																		</div>
																	</div> 
																	<div class="col-xl-12 mb-3"> 
																		<div class="form-group row">
																			<label class="col-lg-2 col-form-label" for="val-suggestions">Adres<span class="text-danger">*</span> </label>
																			<div class="col-lg-10">
																				<textarea class="form-control" name="strAddress" rows="4" id="comment"><?php echo $row_info["strAddress"]?></textarea>
																			</div>
																		</div>
																	</div>  
																	<div class="col-xl-12 mb-3"> 
																		<div class="form-group row">
																			<label class="col-lg-2 col-form-label" for="val-suggestions">Google Analytics <span class="text-danger">*</span> </label>
																			<div class="col-lg-10">
																				<textarea class="form-control" name="strAnalytics" rows="4" id="comment"><?php echo $row_info["strAnalytics"]?></textarea>
																			</div>
																		</div>
																	</div> 
																	<div class="col-xl-12 mb-3"> 
																		<div class="form-group row">
																			<label class="col-lg-2 col-form-label" for="val-suggestions">Canlı Destek <span class="text-danger">*</span> </label>
																			<div class="col-lg-10">
																				<textarea class="form-control" name="strLiveSupport" rows="4" id="comment"><?php echo $row_info["strLiveSupport"]?></textarea>
																			</div>
																		</div>
																	</div>  
																	<div class="col-lg-6 mb-3">
																		<div class="form-group row">
																			<label class="col-lg-4 col-form-label" for="val-suggestions"> Sayfa Gösterim Sayısı<span class="text-danger">*</span> </label>
																			<div class="col-lg-8">
																				<input type="number" name="strPageLimit" class="form-control" value="<?php echo $row_info["strPageLimit"]?>">
																			</div>
																		</div>
																	</div> 
																</div> 
															</div>
														</div>
													</div>
												</div>
											</div> 
										
											<div class="tab-pane" id="kurumsal">
												<div class="col-lg-12">
													<div class="card">
														<div class="card-body">
															<div class="form-validation"> 
																<div class="row">
																		<?php
															$list = $db->query("select * from dil where dil_durum = '1'"); 
																foreach ($list AS $row) {
																	$LANGUAGE_ID = $row["dil_id"]; 
																	$LANGUAGE_CODE = $row["dil_kod"]; 
																	$LANGUAGE_TITLE = $row["dil_baslik"];   
	?> 
																	<div class="col-xl-12 col-lg-12 mb-3">
																	
																		<div class="form-group row">
																			<label class="text-label col-3"><i class="flag-icon flag-icon-<?php echo $LANGUAGE_CODE; ?> icon-2x"></i>  Hakkımda</label>
 																					 <textarea class="form-control ckeditor col-6"  name="hakkimizda_<?php echo $LANGUAGE_CODE; ?>"> <?php echo $row_info["hakkimizda_".$LANGUAGE_CODE]?></textarea>
 																		</div>
																	</div>
																	
										 
																	
																	 
	<?php
																}
	?>
																 
																</div> 
															</div>
														</div>
													</div>
												</div>
											 
											</div> 
									 
										<div class="tab-pane" id="sosyal">
												<div class="col-lg-12">
													<div class="card">
														<div class="card-body">
															<div class="row">
																<div class="col-xl-6 col-lg-6 mb-3">
																	<div class="form-group row">
																		<label class="col-lg-4 col-form-label" for="">Linkedin <span class="text-danger">*</span> </label>
																		<div class="col-lg-8">
																			<div class="input-group mb-3 input-primary-o">
																				<div class="input-group-prepend">
																					<span class="input-group-text">@</span>
																				</div>
																				<input type="text" name="strLinkedin" class="form-control" placeholder="Kullanıcı Adı" value="<?php echo $row_info["strLinkedin"]?>">
																			</div>
																		</div>
																	</div> 
																</div> 
																<div class="col-xl-6 col-lg-6 mb-3">
																	<div class="form-group row">
																		<label class="col-lg-4 col-form-label" for="">Youtube  <span class="text-danger">*</span>  </label>
																		<div class="col-lg-8">
																			<div class="input-group mb-3 input-primary-o">
																				<div class="input-group-prepend">
																					<span class="input-group-text">@</span>
																				</div>
																				<input type="text" name="strYoutube" class="form-control" placeholder="Kullanıcı Adı"  value="<?php echo $row_info["strYoutube"]?>">
																			</div>
																		</div>
																	</div> 
																</div>
																<div class="col-xl-6 col-lg-6 mb-3">
																	<div class="form-group row">
																		<label class="col-lg-4 col-form-label" for="">İnstagram   <span class="text-danger">*</span> </label>
																		<div class="col-lg-8">
																			<div class="input-group mb-3 input-primary-o">
																				<div class="input-group-prepend">
																					<span class="input-group-text">@</span>
																				</div>
																				<input type="text" name="strInstagram" class="form-control" placeholder="Kullanıcı Adı"  value="<?php echo $row_info["strInstagram"]?>">
																			</div>
																		</div>
																	</div> 
																</div> 
	 

															</div>
														</div>
													</div>
												</div>
											</div> 
											 <div class="tab-pane" id="mail">
												<div class="col-lg-12">
													<div class="card">
														<div class="card-body">
															<div class="form-validation">
																<div class="row"> 
																	<div class="col-xl-6 mb-3">
																		<div class="form-group row">
																			<label class="col-lg-4 col-form-label" for="">Mail Server <span class="text-danger">*</span> </label>
																			<div class="col-lg-8">
																				<input type="text" class="form-control" id="" name="strMailHost" placeholder="Mail Server Giriniz.."  value="<?php echo $row_info["strMailHost"]?>">
																			</div>
																		</div> 
																	</div> 
																	<div class="col-xl-6 mb-3">
																		<div class="form-group row">
																			<label class="col-lg-4 col-form-label" for="">Mail Port <span class="text-danger">*</span> </label>
																			<div class="col-lg-8">
																				<input type="text" class="form-control" id="" name="strMailPort" placeholder="Mail Port Numarasını Giriniz.."  value="<?php echo $row_info["strMailPort"]?>">
																			</div>
																		</div> 
																	</div> 
																	<div class="col-xl-6 mb-3">
																		<div class="form-group row">
																			<label class="col-lg-4 col-form-label" for="">Mail Adresi <span class="text-danger">*</span> </label>
																			<div class="col-lg-8">
																				<input type="text" class="form-control" id="" name="strMailAddress" placeholder="Mail Adresi Giriniz.."  value="<?php echo $row_info["strMailAddress"]?>">
																			</div>
																		</div> 
																	</div> 
																	<div class="col-xl-6 mb-3">
																		<div class="form-group row">
																			<label class="col-lg-4 col-form-label" for="">Mail Şifresi <span class="text-danger">*</span></label>
																			<div class="col-lg-8">
																				<input type="password" class="form-control" id="" name="strMailPassword" placeholder="Mail Şifresi Giriniz.."  value="<?php echo $row_info["strMailPassword"]?>">
																			</div>
																		</div> 
																	</div> 
																	<div class="col-xl-6 mb-3">
																		<div class="form-group row">
																			<label class="col-lg-4 col-form-label" for="">Mail Başlığı <span class="text-danger">*</span> </label>
																			<div class="col-lg-8">
																				<input type="text" class="form-control" id="" name="strMailTitle" placeholder="Mail Başlığı Giriniz.."  value="<?php echo $row_info["strMailTitle"]?>">
																			</div>
																		</div> 
																	</div> 
																</div>  
															</div>
														</div>
													</div>
												</div> 
											</div>
									 	</div>
				
										<div class="col-xl-12 mb-3">
											<button style="float:right;" type="submit" name="submitControl" value="1" class="btn mr-6 btn-primary">Kaydet</button>
										</div>					
									</form>
                                </div>
                            </div>
                        </div>
                    </div>
<?php 
				}
?>

<?php 

			if(isset($error)) {
?> 
					<div class="col-lg-12">
						<div class="alert alert-secondary solid alert-dismissible fade show">
							<strong>İşlem Sonucu!</strong>
							<p><?php echo $error; ?></p>
						</div>
					</div> 
<?php
			}
?>
                </div>
            </div>
        </div>
        <?php include("alt.php")?>
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->
    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="vendor\global\global.min.js"></script>
    <script src="vendor\bootstrap-select\dist\js\bootstrap-select.min.js"></script>
    <script src="js\custom.min.js"></script>
    <script src="js\deznav-init.js"></script>
    <script src="vendor\owl-carousel\owl.carousel.js"></script>
    <!-- asColorPicker -->
    <script src="vendor\jquery-asColor\jquery-asColor.min.js"></script>
    <script src="vendor\jquery-asGradient\jquery-asGradient.min.js"></script>
    <script src="vendor\jquery-asColorPicker\js\jquery-asColorPicker.min.js"></script>
    <!-- Material color picker -->
    <script src="vendor\bootstrap-material-datetimepicker\js\bootstrap-material-datetimepicker.js"></script>
    <!-- pickdate -->
    <script src="vendor\pickadate\picker.js"></script>
    <script src="vendor\pickadate\picker.time.js"></script>
    <script src="vendor\pickadate\picker.date.js"></script>



    <!-- Daterangepicker -->
    <script src="js\plugins-init\bs-daterange-picker-init.js"></script>
    <!-- Clockpicker init -->
    <script src="js\plugins-init\clock-picker-init.js"></script>
    <!-- asColorPicker init -->
    <script src="js\plugins-init\jquery-asColorPicker.init.js"></script>
    <!-- Material color picker init -->
    <script src="js\plugins-init\material-date-picker-init.js"></script>
    <!-- Pickdate -->
    <script src="js\plugins-init\pickadate-init.js"></script>


   <!-- Summernote init -->
    <script src="js\plugins-init\summernote-init.js"></script>
	<script src="vendor\summernote\js\summernote.min.js"></script>
</body>

</html>