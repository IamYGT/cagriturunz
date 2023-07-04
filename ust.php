 <nav class="navbar navbar-expand-lg">
        <!-- Logo -->
        <div class="logo-wrapper valign">
            <div class="logo">
              <a href="<?php echo $ayarlar["strURL"]; ?>"> <img src="<?php echo $ayarlar["strURL"]; ?>/img/logo.png"> </a>
            </div>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="icon-bar"><i class="ti-line-double"></i></span> </button>
        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li style="display:none;" class="nav-item">
				<a class="nav-link" href="#"></a>
				</li>
				   <li class="nav-item">
				<a class="nav-link <?php echo ($_SERVER["PHP_SELF"] == "/index.php" ? "active" : null) ?>" href="<?php echo $ayarlar["strURL"]; ?>">Anasayfa</a>
				</li>
				
               
				
                <li class="nav-item"><a class="nav-link <?php echo ($_SERVER["PHP_SELF"] == "/hizmetler-ve-danismanliklar.php" ? "active" : null) ?> " href="<?php echo $ayarlar["strURL"]; ?>/hizmetler-ve-danismanliklar">Hizmetler ve Danışmanlıklar</a></li>
                <li class="nav-item"><a class="nav-link <?php echo ($_SERVER["PHP_SELF"] == "/hizmetler-ve-danismanliklar.php" ? "active" : null) ?> " href="<?php echo $ayarlar["strURL"]; ?>/kurumsal-danismanlik">Kurumsal Eğitim Danışmanlık</a></li>
                <li class="nav-item"><a class="nav-link <?php echo ($_SERVER["PHP_SELF"] == "/blog.php" ? "active" : null) ?>" href="<?php echo $ayarlar["strURL"]; ?>/blog">Blog</a></li>
                <li class="nav-item"><a class="nav-link <?php echo ($_SERVER["PHP_SELF"] == "/iletisim.php" ? "active" : null) ?> " href="<?php echo $ayarlar["strURL"]; ?>/iletisim">İletişim</a></li> 

            </ul>
        </div>
    </nav>
   