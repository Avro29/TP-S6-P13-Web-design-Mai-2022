<?php
	$img[] = 'Soleil.jpeg';
	$img[] = 'mer.jpeg';
	$img[] = 'fonte.jpeg';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ACTUALITE CLIMAT</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">   

    <!-- Font Awesome -->
    <link href="<?php echo css_url("all.min.css"); ?>" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?php echo css_url("owl.carousel.min.css"); ?>" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php echo css_url("style.css"); ?>" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid">
        <div class="row align-items-center bg-light px-lg-5">
            <div class="col-12 col-md-8">
                <div class="d-flex justify-content-between">
                    <div class="bg-primary text-white text-center py-2" style="width: 100px;">Climat</div>
					<div class="owl-carousel owl-carousel-1 tranding-carousel position-relative d-inline-flex align-items-center ml-3" style="width: calc(100% - 100px); padding-left: 90px;">
						<?php for($i=0;$i<count($rehetra);$i++){ ?>
						<div class="text-truncate"><a class="text-secondary" href="<?php echo base_url("fiche/".$rehetra[$i]['url']."-".$rehetra[$i]['id'])?>"><?php echo $rehetra[$i]['titre']; ?></a></div>
						<?php } ?>
                    </div>
                </div>
            </div>
            <!-- <div class="col-md-4 text-right d-none d-md-block">
                Monday, January 01, 2045
            </div> -->
        </div>
        <div class="row align-items-center py-2 px-lg-5">
            <div class="col-lg-4">
                <a href="" class="navbar-brand d-none d-lg-block">
                    <h1 class="m-0 display-5 text-uppercase"><span class="text-primary">CLI</span>MAT</h1>
                </a>
            </div>
            <div class="col-lg-8 text-center text-lg-right">
                <img class="img-fluid" src="img/ads-700x70.jpg" alt="">
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid p-0 mb-3">
        <nav class="navbar navbar-expand-lg bg-light navbar-light py-2 py-lg-0 px-lg-5">
            <a href="" class="navbar-brand d-block d-lg-none">
                <h1 class="m-0 display-5 text-uppercase"><span class="text-primary">Cli</span>Mat</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-0 px-lg-3" id="navbarCollapse">
                <div class="navbar-nav mr-auto py-0">
                    <a href="<?php echo base_url("Welcome/index"); ?>" class="nav-item nav-link active">Actualité</a>
                    <a href="<?php echo base_url("Welcome/index2"); ?>" class="nav-item nav-link">Se Connecter</a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <!-- Main News Slider Start -->
    <div class="container-fluid py-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="owl-carousel owl-carousel-2 carousel-item-1 position-relative mb-3 mb-lg-0">
						<?php for($i=0; $i<count($rehetra);$i++) { ?>
                        <div class="position-relative overflow-hidden" style="height: 435px;">
                            <img class="img-fluid h-100" src="<?php echo image_url($rehetra[$i]['photo']); ?>" style="object-fit: cover;">
                            <div class="overlay">
                                <div class="mb-1">
                                    <a class="text-white" href="<?php echo base_url("fiche/".$rehetra[$i]['url']."-".$rehetra[$i]['id'])?>"><?php echo $rehetra[$i]['typeR']; ?></a>
                                    <span class="px-2 text-white">/</span>
                                    <a class="text-white" href="<?php echo base_url("fiche/".$rehetra[$i]['url']."-".$rehetra[$i]['id'])?>"><?php echo $rehetra[$i]['daty']; ?></a>
                                </div>
                                <a class="h2 m-0 text-white font-weight-bold" href="<?php echo base_url("fiche/".$rehetra[$i]['url']."-".$rehetra[$i]['id'])?>"><?php echo $rehetra[$i]['titre']; ?></a>
                            </div>
                        </div>
						<?php } ?>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex align-items-center justify-content-between bg-light py-2 px-4 mb-3">
                        <h3 class="m-0">Categories</h3>
                        <a class="text-secondary font-weight-medium text-decoration-none" href="">View All</a>
                    </div>
					<?php for($i = 0 ; $i<count($liste) ;$i++){ ?>
                    <div class="position-relative overflow-hidden mb-3" style="height: 80px;">
                        <img class="img-fluid w-100 h-100" src="<?php echo image_url($img[$i]); ?>" style="object-fit: cover;">
                        <a href="<?php echo base_url("Welcome/index"); ?>" class="overlay align-items-center justify-content-center h4 m-0 text-white text-decoration-none">
                            <?php echo $liste[$i]['nom']; ?>
                        </a>
                    </div>
					<?php } ?>
                </div>
            </div>
        </div>
    </div>
    <!-- Main News Slider End -->


    <!-- Featured News Slider Start -->
    <div class="container-fluid py-3">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between bg-light py-2 px-4 mb-3">
                <h3 class="m-0">Canicule</h3>
                <a class="text-secondary font-weight-medium text-decoration-none" href="">View All</a>
            </div>
            <div class="owl-carousel owl-carousel-2 carousel-item-4 position-relative">
				<?php for($i = 0 ; $i < count($can) ; $i++) { ?>
                <div class="position-relative overflow-hidden" style="height: 300px;">
                    <img class="img-fluid w-100 h-100" src="<?php echo image_url($can[$i]['photo']); ?>" style="object-fit: cover;">
                    <div class="overlay">
                        <div class="mb-1" style="font-size: 13px;">
                            <a class="text-white" href="<?php echo base_url("fiche/".$can[$i]['url']."-".$can[$i]['id'])?>"><?php echo $can[$i]['typeR']; ?></a>
                            <span class="px-1 text-white">/</span>
                            <a class="text-white" href="<?php echo base_url("fiche/".$can[$i]['url']."-".$can[$i]['id'])?>"><?php echo $can[$i]['daty']; ?></a>
                        </div>
                        <a class="h4 m-0 text-white" href="<?php echo base_url("fiche/".$can[$i]['url']."-".$can[$i]['id'])?>"><?php echo $can[$i]['titre']; ?></a>
                    </div>
                </div>
				<?php } ?>
            </div>
        </div>
    </div>
    </div>
    <!-- Featured News Slider End -->


    <!-- Category News Slider Start -->
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 py-3">
                    <div class="bg-light py-2 px-4 mb-3">
                        <h3 class="m-0">Montée de la mer</h3>
                    </div>
                    <div class="owl-carousel owl-carousel-3 carousel-item-2 position-relative">
						<?php for($i = 0;$i<count($mon) ;$i++){ ?>
                        <div class="position-relative">
                            <img class="img-fluid w-100" src="<?php echo image_url($mon[$i]['photo']); ?>" style="object-fit: cover;">
                            <div class="overlay position-relative bg-light">
                                <div class="mb-2" style="font-size: 13px;">
                                    <a href="<?php echo base_url("fiche/".$mon[$i]['url']."-".$mon[$i]['id'])?>"><?php echo $mon[$i]['typeR']; ?></a>
                                    <span class="px-1">/</span>
                                    <span><?php echo $mon[$i]['daty']; ?></span>
                                </div>
                                <a class="h4 m-0" href="<?php echo base_url("fiche/".$mon[$i]['url']."-".$mon[$i]['id'])?>"><?php echo $mon[$i]['titre']; ?></a>
                            </div>
                        </div>
						<?php } ?>
                    </div>
                </div>
                <div class="col-lg-6 py-3">
                    <div class="bg-light py-2 px-4 mb-3">
                        <h3 class="m-0">Fonte de glace</h3>
                    </div>
                    <div class="owl-carousel owl-carousel-3 carousel-item-2 position-relative">
					<?php for($i = 0;$i<count($fon) ;$i++){ ?>
                        <div class="position-relative">
                            <img class="img-fluid w-100" src="<?php echo image_url($fon[$i]['photo']); ?>" style="object-fit: cover;">
                            <div class="overlay position-relative bg-light">
                                <div class="mb-2" style="font-size: 13px;">
                                    <a href="<?php echo base_url("fiche/".$fon[$i]['url']."-".$fon[$i]['id'])?>"><?php echo $fon[$i]['typeR']; ?></a>
                                    <span class="px-1">/</span>
                                    <span><?php echo $fon[$i]['daty']; ?></span>
                                </div>
                                <a class="h4 m-0" href="<?php echo base_url("fiche/".$fon[$i]['url']."-".$fon[$i]['id'])?>"><?php echo $fon[$i]['titre']; ?></a>
                            </div>
                        </div>
					<?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Category News Slider End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-light pt-5 px-sm-3 px-md-5">
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-5">
                <a href="index.html" class="navbar-brand">
                    <h1 class="mb-2 mt-n2 display-5 text-uppercase"><span class="text-primary">CLI</span>MAT</h1>
                </a>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="font-weight-bold mb-4">Categories</h4>
                <div class="d-flex flex-wrap m-n1">
					<?php for($i=0;$i<count($liste);$i++) { ?>
                    <a href="<?php echo base_url("Welcome/index"); ?>" class="btn btn-sm btn-outline-secondary m-1"><?php echo $liste[$i]['nom']; ?></a>
					<?php } ?>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-4 px-sm-3 px-md-5">
        <p class="m-0 text-center">
            &copy; <a class="font-weight-bold" href="#">Ravo Climat</a>. All Rights Reserved. 
			
			<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
			Designed by Ravo
        </p>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-dark back-to-top"><i class="fa fa-angle-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="<?php echo js_url("jquery-3.4.1.min.js"); ?>"></script>
    <script src="<?php echo js_url("bootstrap.bundle.min.js"); ?>"></script>
    <script src="<?php echo js_url("easing.min.js"); ?>"></script>
    <script src="<?php echo js_url("owl.carousel.min.js"); ?>"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="<?php echo js_url("main.js"); ?>"></script>
</body>

</html>
