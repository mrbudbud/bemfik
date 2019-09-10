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
			
			
			
			
<?php
if(isset($_POST['login'])){
    include("koneksi.php");

    $username	= $_POST['nama'];
    $password	= md5($_POST['password']);

    $query = mysqli_query($koneksi, "SELECT * FROM admin WHERE nama='$username' AND password='$password'");

    if($row = mysqli_fetch_assoc($query)){
        $_SESSION['id']= $row['id'];
        $_SESSION['nama']=$username;
        header("Location: index.php");
    }
}
?>

<center><div class="login"  style="margin-left:50px;margin-top:50px;margin-bottom:80px;width:330px;"><br><br><br><br><br><br>
    <div class="login-container"><h2 class="title-login">Administrator</h2>
        <h4>Silahkan Login</h4>
<!--        <form>-->
        <form role="form" action="" method="post">
            <div class="form-group" style="background-color:#d3e3f9;">
                <div class="input-group"><span class="input-group-addon"><i class="icon-user"></i></span>
                    <input class="form-control" style="background-color:#d3e3f9;" placeholder="Username" name="nama" type="text"/>
                </div>
            </div>
            <div class="form-group">
                <div class="input-group"><span class="input-group-addon"><i class="icon-lock"></i></span>
                    <input class="form-control" style="background-color:#d3e3f9;" placeholder="Password" name="password" type="password"/>
                </div>
            </div>
            <div class="form-group">
                <label class="checkbox">
                    <input type="checkbox"/>
                    Remember me</label>
            </div>
            <button class="btn btn-lg btn-primary login-submit" name="login" type="submit" value="Submit">Log in</button></a>
        </form>
<!--        </form>-->
	</div>	
			
			
			
			
			
		<div class="border_devider"></div>
</div></center>



            
		
		<?php include "footer.php"; ?>

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
			