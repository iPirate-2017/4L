<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<html lang="FR">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Nout 4L">
    <meta name="author" content="IPI-2017">

    <title>nout4l.re - départ du 4L Trophy 2018</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
	<link rel="stylesheet" href="css/main.css">
    <link href="css/custom.css" rel="stylesheet">

	<script src="//use.edgefonts.net/bebas-neue.js"></script>

    <!-- Custom Fonts & Icons -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/icomoon-social.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>


</head>

<body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

<!-- NavBar -->
<div id="V_NavBar"></div>

<!-- Vue du slider-->
<div id="V_Slider"></div>

<!-- Vue Action Bar -->
<div id="V_callAction"></div>

<!-- Vue Liens Important -->
<div id="V_liensImportant"></div>


<hr>

<!-- Vue Dernier Articles -->
<div id="V_DernierArticle"></div>

<hr>

<!-- Sponsors -->
<div id="V_Sponsors"></div>

<!-- Footer -->
<div id="V_Footer"></div>

        <!-- Javascripts -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/jquery-1.9.1.min.js"><\/script>')</script>
        <script src="js/bootstrap.min.js"></script>

		<!-- Scrolling Nav JavaScript -->
		<script src="js/jquery.easing.min.js"></script>
		<script src="js/scrolling-nav.js"></script>

    </body>
</html>

<script type="text/javascript">

$(function()
{
  $("#V_NavBar").load("./views/navbar.php");
  $("#V_Slider").load("./views/slider.php");
  $("#V_callAction").load("./views/callAction.php");
  $("#V_liensImportant").load("./views/lienImportant.php");
  $("#V_DernierArticle").load("./views/DernierArticles.php");
  $("#V_Sponsors").load("./views/sponsors.php");
  $("#V_Footer").load("./views/footer.php");

});

</script>
