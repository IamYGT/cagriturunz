   
<!-- Preloader -->
<div class="preloader">
    <div class="outer">
        <div class="inner">
            <div class="percentage"></div>                          
        </div>
    </div>
</div>
 <header>
	<div class="logo float-left">
		<a href="<?php echo $ayarlar["strURL"]; ?>/index"> <img src="<?php echo $ayarlar["strURL"]; ?>/img/logo.png" alt="Çağla Türünz Logo" > </a> 
	</div> 
	<div style="    margin-top: 22px;"  class=" float-right d-none d-sm-block">
  	<nav> 
  	<ul id="menu"> 
			<li><a <?php echo ($_SERVER["PHP_SELF"] == "/index.php" ? "class='active'" : null) ?> href="<?php echo $ayarlar["strURL"]; ?>/index">Anasayfa</a></li>
			 	<li><a <?php echo ($_SERVER["PHP_SELF"] == "/hakkimda.php" ? "class='active'" : null) ?> href="<?php echo $ayarlar["strURL"]; ?>/index">Hakkında</a></li>
			 
		
			
		  <li><a href='<?php echo $ayarlar["strURL"]; ?>/hizmetler-danismanliklar' >Hizmetler ve Danışmanlıklar</a>
      
    </li> 
			 
 			<li><a <?php echo ($_SERVER["PHP_SELF"] == "/blog.php" ? "class='active'" : null) ?> href="<?php echo $ayarlar["strURL"]; ?>/blog">Blog</a></li>
			<li><a <?php echo ($_SERVER["PHP_SELF"] == "/iletisim.php" ? "class='active'" : null) ?> href="<?php echo $ayarlar["strURL"]; ?>/iletisim">İletişim</a></li>
			 
             <li><a target="_blank" href="https://www.instagram.com/<?php echo $ayarlar["strInstagram"]; ?>"><i class="fab fa-instagram"></i></a></li>
			 
            <li> <a style="padding-left: 0px;" target="_blank" href="https://www.youtube.com/<?php echo $ayarlar["strYoutube"]; ?>"><i class="fab fa-youtube"></i></a></li>
			 
			<li> <a style="padding-left: 0px;" target="_blank" href="https://www.linkedin.com/<?php echo $ayarlar["strLinkedin"]; ?>"><i class="fab fa-linkedin"></i></a>  
			</li>
		</ul>
		</ul>
		</nav>
 	</div>
	
<div class="nav-icon float-right d-block d-sm-none">
		<span></span>
		<span></span>
		<span></span>
	</div>
</header>
 
<!-- Full Menu -->
<div class="full-menu">
	<div class="fullmenu-content">
		<ul class="page-menu">
			<li><a <?php echo ($_SERVER["PHP_SELF"] == "/index.php" ? "class='active'" : null) ?> href="<?php echo $ayarlar["strURL"]; ?>/index">Anasayfa</a></li> 
			<li><a <?php echo ($_SERVER["PHP_SELF"] == "/hakkimda.php" ? "class='active'" : null) ?> href="<?php echo $ayarlar["strURL"]; ?>/hakkimda">Hakkında</a></li>
			<li><a <?php echo ($_SERVER["PHP_SELF"] == "/hizmetler-danismanliklar.php" ? "class='active'" : null) ?> href="<?php echo $ayarlar["strURL"]; ?>/hizmetler-danismanliklar">Hizmetler & Danışmanlıklar</a></li>
			<li><a <?php echo ($_SERVER["PHP_SELF"] == "/blog.php" ? "class='active'" : null) ?> href="<?php echo $ayarlar["strURL"]; ?>/blog">Blog</a></li>
			<li><a <?php echo ($_SERVER["PHP_SELF"] == "/iletisim.php" ? "class='active'" : null) ?> href="<?php echo $ayarlar["strURL"]; ?>/iletisim">İletişim</a></li>
				<li class="social">
             <a target="_blank" href="https://www.instagram.com/<?php echo $ayarlar["strInstagram"]; ?>"><i class="fab fa-instagram"></i></a>
             <a target="_blank" href="https://www.youtube.com/<?php echo $ayarlar["strYoutube"]; ?>"><i class="fab fa-youtube"></i></a>
			 <a target="_blank" href="https://www.linkedin.com/<?php echo $ayarlar["strLinkedin"]; ?>"><i class="fab fa-linkedin"></i></a>
			</li>
		</ul>
	</div>
	<a href="#0" class="modal-close"></a>
</div>
