<?php

$keyword = $_GET['keyword'];

include "koneksi.php";

$sql = "SELECT * FROM post WHERE judul LIKE '%$keyword%'";
$query = mysqli_query($connect,$sql);

$hitung = mysqli_num_rows($query);
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>BEM FIK UBL - Fakultas Ilmu Komputer</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">


        <link rel="stylesheet" href="assets/css/fonticons.css">
        <link rel="stylesheet" href="assets/fonts/stylesheet.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/jquery.fancybox.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <!--        <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">-->


        <!--For Plugins external css-->
        <link rel="stylesheet" href="assets/css/plugins.css" />

        <!--Theme custom css -->
        <link rel="stylesheet" href="assets/css/style.css">

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="assets/css/responsive.css" />

        <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body data-spy="scroll" data-target=".navbar-collapse">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div class='preloader'><div class='loaded'>&nbsp;</div></div>
        <div class="culmn">   
		
			<?php include "header.php"; ?>

			<br><br>

<section id="portfolio" class="portfolio">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-10 col-sm-offset-1">
                            <div class="main_service_area sections">
                                <div class="row">
                                    <div class="head_title text-center">
                                        <div class="text-center">
										<h3>Search Result</h3>
                                        </div>
                                        <div class="border_devider"></div>
                                    </div>

                                    <div class="main_service_content" style="margin-top:-70px;">
                                        
										<?php 
										
											while ($data=mysqli_fetch_array($query)){
											
												echo "<div class='col-sm-6'>
														<div class='single_service'>
															<div class='single_service_icon'>
																<img style='width:600px;height:300px;' src='assets/images/".$data['gambar']."' class='img-responsive'/>
															</div>
															<div class='single_service_content'>
																<h4><a href='#'>".$data['judul']."</a></h4>
																<p>".substr($data['isi'], 0 ,250)."... <a href='detail.php?id=".$data['id']."'>Read More</a></p>
															</div>
														</div>
													</div>";
											
											}
											
										?>
										
                                        <div class="border_devider"></div>
                                        										
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </section>
			
			<?php include "contact.php"; ?>
			
			<?php include "footer.php"; ?>
            
        </div>

        <!-- START SCROLL TO TOP  -->

        <div class="scrollup">
            <a href="#"><i class="fa fa-chevron-up"></i></a>
        </div>

        <script src="assets/js/vendor/jquery-1.11.2.min.js"></script>
        <script src="assets/js/vendor/bootstrap.min.js"></script>

        <script src="assets/js/jquery.magnific-popup.js"></script>
        <script src="assets/js/jquery.mixitup.min.js"></script>
        <script src="assets/js/jquery.easing.1.3.js"></script>
        <script src="assets/js/jquery.masonry.min.js"></script>
        <script src="assets/js/jquery.fancybox.pack.js"></script>

        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>

    </body>
</html>
