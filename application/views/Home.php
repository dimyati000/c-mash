<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Create a stylish landing page for your business startup and get leads for the offered services with this HTML landing page template.">
    <meta name="author" content="Inovatik">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
	<meta property="<?php echo base_url(); ?>assets/evolo/og:site_name" content="" /> <!-- website name -->
	<meta property="<?php echo base_url(); ?>assets/evolo/og:site" content="" /> <!-- website link -->
	<meta property="<?php echo base_url(); ?>assets/evolo/og:title" content=""/> <!-- title shown in the actual shared post -->
	<meta property="<?php echo base_url(); ?>assets/evolo/og:description" content="" /> <!-- description shown in the actual shared post -->
	<meta property="<?php echo base_url(); ?>assets/evolo/og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="<?php echo base_url(); ?>assets/evolo/og:url" content="" /> <!-- where do you want your post to link to -->
	<meta property="<?php echo base_url(); ?>assets/evolo/og:type" content="article" />

    <!-- Website Title -->
    <!-- <title>Evolo - StartUp HTML Landing Page Template</title> -->
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,600,700,700i&amp;subset=latin-ext" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/evolo/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/evolo/css/fontawesome-all.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/evolo/css/swiper.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/evolo/css/magnific-popup.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/evolo/css/styles.css" rel="stylesheet">
	
	<!-- Favicon  -->
    <link rel="icon" href="<?php echo base_url('/assets/img/fav-icon.png') ?>">
</head>
<body data-spy="scroll" data-target=".fixed-top">
    
    <!-- Preloader -->
	<div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->
    

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <!-- Text Logo - Use this if you don't have a graphic logo -->
        <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Evolo</a> -->

        <!-- Image Logo -->
        <!-- <a class="navbar-brand logo-image" href="index.html"><img src="images/logo.svg" alt="alternative"></a> -->
        <!-- <a class="navbar-brand" href="index.html">C-MASH</a> -->
        <h1><span class="turquoise">C</span>-MASH</h1>

        <!-- Mobile Menu Toggle Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-awesome fas fa-bars"></span>
            <span class="navbar-toggler-awesome fas fa-times"></span>
        </button>
        <!-- end of mobile menu toggle button -->

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#header">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#services">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#pricing">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#request">Request</a>
                </li>

                <!-- Dropdown Menu -->          
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle page-scroll" href="#about" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">About</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="terms-conditions.html"><span class="item-text">Terms Conditions</span></a>
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="privacy-policy.html"><span class="item-text">Privacy Policy</span></a>
                    </div>
                </li>
                <!-- end of dropdown menu -->

                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#contact">Contact</a>
                </li>
                <li class="nav-item">
                    </li>
                <?php
					if ($this->session->userdata('username')) { ?>
						<ul class="navbar-nav ml-auto">
							<li class="nav-item dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle page-scroll">
									<img width="25px" alt="image" src="<?php echo base_url() ?>assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
									<div class="d-sm-none d-lg-inline-block">Hi, <?php echo $this->session->userdata('username') ?></div>
								</a>
								<div class="dropdown-menu">
									<!-- <div class="dropdown-title">Logged in 5 min ago</div> -->
									<a href="<?= site_url('Profile') ?>" class="dropdown-item">
                                        <i class="far fa-user"></i> Profile
                                    </a>

									<div class="dropdown-items-divide-hr"></div>
									<?php echo anchor('auth/logout', '<div class="dropdown-item">
                                        <i class="fa fa-sign-out-alt"></i> Logout
                                    </div>'); ?>
								</div>
							</li>
						</ul>

					<?php } else { ?>
						<li><?php echo anchor('auth/login', '<div class="btn-solid-reg ml-5">LOGIN</div>') ?></li>
					<?php } ?>
                </ul>
            <!-- <span class="nav-item social-icons">
                <span class="fa-stack">
                     
                         <a href="#your-link">
                        <i class="fas fa-circle fa-stack-2x facebook"></i>
                         <i class="fab fa-facebook-f fa-stack-1x"></i>
                     </a>
                </span>
                <span class="fa-stack">
                    <a href="#your-link">
                        <i class="fas fa-circle fa-stack-2x twitter"></i>
                        <i class="fab fa-twitter fa-stack-1x"></i>
                    </a>
                </span>
            </span> -->
        </div>
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->


    <!-- Header -->
    <header id="header" class="header">
        <div class="header-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="text-container">
                            <h1><span class="turquoise">Berkah Abadi Motor</span></h1>
                            <h2>Melayani Service, Ganti Oli, Sparepart, dan lain-lain.</h2>
                            <!-- <p class="p-large">(Melayani Service, Ganti Oli, Sparepart, dll)</p> -->
                            <!-- <a class="btn-solid-lg page-scroll" href="#services">DISCOVER</a> -->
                        </div> <!-- end of text-container -->
                    </div> <!-- end of col -->
                    <div class="col-lg-6">
                        <div class="image-container">
                            <img class="img-fluid" src="<?php echo base_url('/assets/img/technical-support.png')?>" alt="alternative">
                        </div> <!-- end of image-container -->
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of header-content -->
    </header> <!-- end of header -->
    <!-- end of header -->


   


    <!-- Services -->
    <div id="services" class="cards-1">
            <div class="row">
                <div class="col-lg-12">

                    <!-- Card -->
                    <!-- <div class="col-lg-3"> -->
                    <div class="card">
                        <img class="card-image" src="<?php echo base_url('/assets/img/repair-tools.png')?>" alt="alternative">
                        <div class="card-body">
                            <h4 class="card-title">Fasilitas Utama Kami :</h4>
                            <p>- Siap Antar Jemput </p>
                            <p>- Garansi 1 Minggu </p>
                            <p>- Mekanik Kompeten setara AHAS </p>
                            <p>- Paket Ganti Oli Gratis Jasa </p>
                        </div>
                    <!-- </div> -->
                    </div>
                    <!-- end of card -->
 
                    <!-- Card -->
                    <!-- <div class="col-lg-3"> -->
                    <div class="card">
                        <img class="card-image" src="<?php echo base_url('/assets/img/clock.png')?>" alt="alternative">
                        <div class="card-body">
                            <h4 class="card-title">Waktu Pelayanan Kami:</h4>
                            

                            <p>Senin- Sabtu : 07.30 – 16.00</p>
                            <p>Khusus Jumat : 07.30 – 10.30 buka kembali : 13.00 – 16.00</p>
                           
                        </div>
                    <!-- </div> -->
                    </div>
                    <!-- end of card -->
                    
                    <!-- Card -->
                    <!-- <div class="col-lg-3"> -->
                    <div class="card">
                        <img class="card-image" src="<?php echo base_url('/assets/img/repair-save.png')?>" alt="alternative">
                        <div class="card-body">
                            <h4 class="card-title">Keuntungan Servis Ditempat Kami:</h4>
                            <p>- Performa kendaraan selalu maksimal</p>
                            <p>- Berkendara lebih aman dan nyaman</p>
                            <p>- Mengurangi resiko Mogok</p>
                            <p>- Usia kendaraan jadi lebih lama</p>
                            <p>- Biaya operasional yang hemat</p>
                        </div>
                    <!-- </div> -->
                    </div>
                    <!-- end of card -->
                
                    
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-1 -->
    <!-- end of services -->


    <!-- Details 1 -->
    <div class="basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <h2>Anda Bingung Mau servis Motor? Sibuk atau tidak sempat ?</h2>
                        <p>Mau servis motor tapi malas keluar rumah? Sekarang servis motor bisa dari rumah. Yuk booking servis sekarang !</p>
                        <a class="btn-solid-reg" href="<?php echo site_url('auth/login')?>">Booking</a>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <div class="image-container">
                        <img class="img-fluid" src="<?php echo base_url('/assets/img/car-repair.png')?>" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-1 -->
    <!-- end of details 1 -->

    <!-- About -->
    <div id="about" class="basic-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>YUK KUNJUNGI BENGKEL KAMI !</h2>
                    <p class="p-heading p-large"> JANGAN TUNGGU SAMPE MOTORMU RUSAK YA !</p>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
           
        </div> <!-- end of container -->
    </div> <!-- end of basic-4 -->
    <!-- end of about -->


    <!-- Contact -->
    <div id="contact" class="form-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Kontak Informasi</h2>
                    <ul class="list-unstyled li-space-lg">
                        <!-- <li class="address">Don't hesitate to give us a call or send us a contact form message</li> -->
                        <li><i class="fas fa-map-marker-alt"></i>Jl.Semeru No.36 Ajung Pancakarya, Kabupaten Jember, Jawa Timur </li>
                        <li><i class="fas fa-phone"></i><a class="turquoise" href="tel:003024630820">082 221 337 795</a></li>
                        <li><i class="fas fa-envelope"></i><a class="turquoise" href="mailto:office@evolo.com"> rahmahtiyas@gmail.com</a></li>
                        <li></li>
                    </ul>
                 <h2><a target="_blank" href="https://api.whatsapp.com/send?phone=6285808988871&text=Halo%20Admin%20Berkah%20Motor,%20Saya%20mau%20tanya%20....."><button class="btn-solid-reg btn btn-sm btn-success">
                        <div class="flex items-center justify-self-center"><i class="ion-social-whatsapp-outline"></i>Hubungi WhatsApp Kami</div></button></a></h2>
            </div> <!-- end of row -->
           
        </div> <!-- end of container -->
    </div> <!-- end of form-2 -->
    <!-- end of contact -->


    
    	
    <!-- Scripts -->
    <script src="<?php echo base_url(); ?>assets/evolo/js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="<?php echo base_url(); ?>assets/evolo/js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="<?php echo base_url(); ?>assets/evolo/js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="<?php echo base_url(); ?>assets/evolo/js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="<?php echo base_url(); ?>assets/evolo/js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="<?php echo base_url(); ?>assets/evolo/js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
    <script src="<?php echo base_url(); ?>assets/evolo/js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="<?php echo base_url(); ?>assets/evolo/js/scripts.js"></script> <!-- Custom scripts -->
</body>
</html>