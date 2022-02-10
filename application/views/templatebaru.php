<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<title>Infomedia Solusi Net</title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="PT Infomedia Solusi Net">
	<meta name="author" content="Isolusinet">

	<!-- Favicon -->
	<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/favicon/favicon.png">

	
  <!-- Font Awesome
		============================================ -->
		<link type="text/css" rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

	<!-- Web Fonts -->
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,300,700&amp;subset=cyrillic,latin">

	<!-- CSS Global Compulsory -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/onepage/plugins/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/onepage/css/app.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/onepage/css/blocks.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/onepage/css/plugins.css">

	<!-- Galeri -->

	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/fancybox/source/jquery.fancybox.css">

	
    <!-- CSS Page Style -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/shortcode_timeline1.css">

	<!-- CSS Implementing Plugins -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/onepage/plugins/animate.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/onepage/plugins/line-icons/line-icons.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/onepage/plugins/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/onepage/plugins/sky-forms-pro/skyforms/css/sky-forms.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/onepage/plugins/owl-carousel2/assets/owl.carousel.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/onepage/plugins/cube-portfolio/cubeportfolio/css/cubeportfolio.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/onepage/plugins/master-slider/masterslider/style/masterslider.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/onepage/plugins/master-slider/u-styles/testimonials-1.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/onepage/plugins/master-slider/u-styles/promo-1.css">

	<!-- CSS Theme -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/travel.style.css">

	<!-- CSS Customization -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/custom.css">


<!-- JS Global Compulsory -->
<script src="<?php echo base_url(); ?>assets/onepage/plugins/jquery/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/onepage/plugins/jquery/jquery-migrate.min.js"></script>
<script src="<?php echo base_url(); ?>assets/onepage/plugins/bootstrap/js/bootstrap.min.js"></script>

<!-- JS Page Level -->
<script src="<?php echo base_url(); ?>assets/onepage/js/one.app.js"></script>
<script src="<?php echo base_url(); ?>assets/js/plugins/owl-carousel2.js"></script>
<script src="<?php echo base_url(); ?>assets/js/plugins/datepicker.js"></script>
<script src="<?php echo base_url(); ?>assets/js/plugins/promo.js"></script>
<script src="<?php echo base_url(); ?>assets/js/plugins/testimonials.js"></script>
<script src="<?php echo base_url(); ?>assets/js/plugins/gallery.js"></script>
<script src="<?php echo base_url(); ?>assets/js/forms/contact.js"></script>


<!-- JS Implementing Plugins -->
<script src="<?php echo base_url(); ?>assets/onepage/plugins/smoothScroll.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/fancybox/source/jquery.fancybox.pack.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/fancy-box.js"></script>
<script src="<?php echo base_url(); ?>assets/onepage/plugins/jquery.easing.min.js"></script>
<script src="<?php echo base_url(); ?>assets/onepage/plugins/owl-carousel2/owl.carousel.min.js"></script>
<script src="<?php echo base_url(); ?>assets/onepage/plugins/sky-forms-pro/skyforms/js/jquery.form.min.js"></script>
<script src="<?php echo base_url(); ?>assets/onepage/plugins/sky-forms-pro/skyforms/js/jquery.maskedinput.min.js"></script>
<script src="<?php echo base_url(); ?>assets/onepage/plugins/sky-forms-pro/skyforms/js/jquery-ui.min.js"></script>
<script src="<?php echo base_url(); ?>assets/onepage/plugins/sky-forms-pro/skyforms/js/jquery.validate.min.js"></script>
<script src="<?php echo base_url(); ?>assets/onepage/plugins/cube-portfolio/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?signed_in=true&amp;callback=initMap" async defer></script><script src="assets/js/plugins/gmaps-ini.js"></script>
<script src="<?php echo base_url(); ?>assets/onepage/plugins/master-slider/masterslider/masterslider.min.js"></script>


<script type="text/javascript">
    jQuery(document).ready(function() {
        App.init();
        FancyBox.initFancybox();
        StyleSwitcher.initStyleSwitcher();
    });
</script>



<body id="body" data-spy="scroll" data-target=".one-page-header" class="">
<header class="main-header">
<?php include "header2.php"; ?>
</header>

<section>
<?php echo $contents; ?>
</section>

<footer>
<?php include "footer.php"; ?>
</footer>


</body>
</html>
