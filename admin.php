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

											<br><br><br><br><br><br>
                                <center><h4>Halaman Post Admin</h4></center>

									<div class="col-sm-10 col-sm-offset-1">                                       
									   <center><div class="single_contant_left" style="margin-left:50px;margin-top:50px;margin-bottom:80px;width:330px;">
                                            <form action="#" method="post" enctype="multipart/form-data">
                                                <!--<div class="col-lg-8 col-md-8 col-sm-10 col-lg-offset-2 col-md-offset-2 col-sm-offset-1">-->

                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="judul" placeholder="judul" required="">
                                                </div>

                                                <div class="form-group">
                                                    <input type="email" class="form-control" name="tanggal" placeholder="tanggal" required="">
                                                </div>

                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="isi" placeholder="isi" required="">
                                                </div>

                                                <div class="form-group">
                                                    <input class="form-control" name="gambar" rows="8" placeholder="gambar">
                                                </div>
												
												<div class="form-group">
                                                    <input name="lampiran" type="file">
                                                </div>
									<div class="col-sm-6" >
                                                <div class="">
                                                    <input  type="submit" value="Update" class="btn btn-primary">
                                                </div>
									</div>

									<div class="col-sm-6" >
                                                <div class="">
                                                    <input  type="submit" value="Delete" class="btn btn-primary" style="background-color:red;" >
                                                </div>
									</div>

									<div class="col-sm-12">
                                                <div class="">
                                                    <input  type="submit" value="Submit" class="btn btn-primary">
                                                </div>
									</div>                                                
											<!--</div>--> 
                                            </form>
                                        </div>
										</center>
</div>
                                    </div>


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
