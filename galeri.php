﻿<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php"); ?>
<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>JOPHO</title>
    <link rel="shortcut icon" href="img\favicon.png">
    <link rel="stylesheet" href="css\plugins.css">
    <link rel="stylesheet" href="css\style.css">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-144098545-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'UA-144098545-1');
    </script>
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
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <!-- Logo -->
        <div class="logo-wrapper valign">

            <div class="logo">
                <h2><a href="index.html">Jopho</a><span>Photo Studio</span></h2>
            </div>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="icon-bar"><i class="ti-line-double"></i></span> </button>
        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="about.html">About Us</a></li>
                <li class="nav-item"><a class="nav-link" href="services.html">Services</a></li>
                <li class="nav-item"><a class="nav-link active" href="gallery.html">Gallery</a></li>
                <li class="nav-item dropdown"> <span class="nav-link"> Blog <i class="ti-angle-down"></i></span>
                    <ul class="dropdown-menu last">
                        <li class="dropdown-item"><a href="blog.html">Blog Page</a></li>
                        <li class="dropdown-item"><a href="post.html">Post Page</a></li>
                        <li class="dropdown-item"><a href="services-page.html">Services Page</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
            </ul>
        </div>
    </nav>
    <!-- Header -->
    <header class="banner-header banner-img valign bg-img" data-overlay-dark="7" data-background="img/banner/04.jpg" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                <div class="col-md-7 offset-md-5 text-right caption mt-60 animate-box" data-animate-effect="fadeInUp">
                    <h5>Portfolio</h5>
                    <h1>Gallery</h1>
                </div>
            </div>
        </div>
    </header>
    <!-- Gallery -->
    <section class="jophoto-gallery section-padding mb-30">
        <div class="container">
            <div class="row mb-20">
                <div class="col-md-12 animate-box" data-animate-effect="fadeInUp">
                    <h6>Welcome to Our Portfolio Gallery</h6>
                    <p>Quality at scelerisque tellus. Mauris consequat, nibh varius interdum tempus, massa odio venenatis turpis, the drana linon iaculis nisi mi a sem. Cras sagittis enim sit amet nisi malesuada pellentesque. Etiam consequat ac lacus at condimentum. Cras commodo sodales ex, non consequat lacus dapibus sed. Suspendisse non laoreet nulla. Aliquam ultrices metus ac purus porta, a aliquam ante mattis. Proin in odio ultrices massa ultricies convallis id id erat.</p>
                </div>
            </div>
            <div class="row jophoto-photos" id="jophoto-section-photos">
                <div class="col-md-6 animate-box" data-animate-effect="fadeInUp">
                    <a href="img\gallery\01.jpg" class="d-block jophoto-photo-item" data-caption="Potrait Photo" data-fancybox="gallery"> <img src="img\gallery\01.jpg" alt="Image" class="img-fluid">
                        <div class="photo-text-more"> <span class="ti-fullscreen"></span> </div>
                    </a>
                </div>
                <div class="col-md-6 animate-box" data-animate-effect="fadeInUp">
                    <a href="img\gallery\02.jpg" class="d-block jophoto-photo-item" data-caption="Wedding Photo" data-fancybox="gallery"> <img src="img\gallery\02.jpg" alt="Image" class="img-fluid">
                        <div class="photo-text-more"> <span class="ti-fullscreen"></span> </div>
                    </a>
                </div>
                <div class="col-md-6 animate-box" data-animate-effect="fadeInUp">
                    <a href="img\gallery\03.jpg" class="d-block jophoto-photo-item" data-caption="Potrait Photo" data-fancybox="gallery"> <img src="img\gallery\03.jpg" alt="Image" class="img-fluid">
                        <div class="photo-text-more"> <span class="ti-fullscreen"></span> </div>
                    </a>
                </div>
                <div class="col-md-6 animate-box" data-animate-effect="fadeInUp">
                    <a href="img\gallery\04.jpg" class="d-block jophoto-photo-item" data-caption="Potrait Photo" data-fancybox="gallery"> <img src="img\gallery\04.jpg" alt="Image" class="img-fluid">
                        <div class="photo-text-more"> <span class="ti-fullscreen"></span> </div>
                    </a>
                </div>
                <div class="col-md-6 animate-box" data-animate-effect="fadeInUp">
                    <a href="img\gallery\05.jpg" class="d-block jophoto-photo-item" data-caption="Potrait Photo" data-fancybox="gallery"> <img src="img\gallery\05.jpg" alt="Image" class="img-fluid">
                        <div class="photo-text-more"> <span class="ti-fullscreen"></span> </div>
                    </a>
                </div>
                <div class="col-md-6 animate-box" data-animate-effect="fadeInUp">
                    <a href="img\gallery\06.jpg" class="d-block jophoto-photo-item" data-caption="Fashion Photo" data-fancybox="gallery"> <img src="img\gallery\06.jpg" alt="Image" class="img-fluid">
                        <div class="photo-text-more"> <span class="ti-fullscreen"></span> </div>
                    </a>
                </div>
                <div class="col-md-6 animate-box" data-animate-effect="fadeInUp">
                    <a href="img\gallery\07.jpg" class="d-block jophoto-photo-item" data-caption="Travel Photo" data-fancybox="gallery"> <img src="img\gallery\07.jpg" alt="Image" class="img-fluid">
                        <div class="photo-text-more"> <span class="ti-fullscreen"></span> </div>
                    </a>
                </div>
                <div class="col-md-6 animate-box" data-animate-effect="fadeInUp">
                    <a href="img\gallery\08.jpg" class="d-block jophoto-photo-item" data-caption="Family Photo" data-fancybox="gallery"> <img src="img\gallery\08.jpg" alt="Image" class="img-fluid">
                        <div class="photo-text-more"> <span class="ti-fullscreen"></span> </div>
                    </a>
                </div>
                <div class="col-md-6 animate-box" data-animate-effect="fadeInUp">
                    <a href="img\gallery\09.jpg" class="d-block jophoto-photo-item" data-caption="Personal Photo" data-fancybox="gallery"> <img src="img\gallery\09.jpg" alt="Image" class="img-fluid">
                        <div class="photo-text-more"> <span class="ti-fullscreen"></span> </div>
                    </a>
                </div>
                <div class="col-md-6 animate-box" data-animate-effect="fadeInUp">
                    <a href="img\gallery\10.jpg" class="d-block jophoto-photo-item" data-caption="Wedding Photo" data-fancybox="gallery"> <img src="img\gallery\10.jpg" alt="Image" class="img-fluid">
                        <div class="photo-text-more"> <span class="ti-fullscreen"></span> </div>
                    </a>
                </div>
                <div class="col-md-6 animate-box" data-animate-effect="fadeInUp">
                    <a href="img\gallery\11.jpg" class="d-block jophoto-photo-item" data-caption="Baby Photo" data-fancybox="gallery"> <img src="img\gallery\11.jpg" alt="Image" class="img-fluid">
                        <div class="photo-text-more"> <span class="ti-fullscreen"></span> </div>
                    </a>
                </div>
                <div class="col-md-6 animate-box" data-animate-effect="fadeInUp">
                    <a href="img\gallery\12.jpg" class="d-block jophoto-photo-item" data-caption="Sport Photo" data-fancybox="gallery"> <img src="img\gallery\12.jpg" alt="Image" class="img-fluid">
                        <div class="photo-text-more"> <span class="ti-fullscreen"></span> </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 footer-text-left">
                    <div class="social"> 
                        <a href="#"><i class="ti-twitter-alt"></i></a> 
                        <a href="#"><i class="ti-facebook"></i></a> 
                        <a href="#"><i class="ti-instagram"></i></a> 
                        <a href="#"><i class="ti-linkedin"></i></a> 
                    </div>
                </div>
                <div class="col-md-4 footer-text-center">
                    <div class="logo">
                        <h1><a href="index.html">JOPHO<span>PHOTO STUDIO</span></a></h1>
                    </div>
                </div>
                <div class="col-md-4 footer-text-right">
                    <p>&copy;2020 JOPHO. All rights reserved</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- jQuery -->
<?php include("js.php")?>
</body>

</html>
