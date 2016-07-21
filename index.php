<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>wpdf</title>
<meta name="description" content="">
<meta name="author" content="">

<!-- Favicons
    ================================================== -->
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css"  href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/prettyPhoto.css">
<link href='http://fonts.googleapis.com/css?family=Lato:400,700,900,300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/modernizr.custom.js"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!-- Navigation
    ==========================================-->
<nav id="menu" class="navbar navbar-default navbar-fixed-top">
  <div class="container"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href="index.html">wpdf</a> </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#home" class="page-scroll">Home</a></li>
        <li><a href="#services-section" class="page-scroll">Services</a></li>
        <li><a href="#contact-section" class="page-scroll">Donate</a></li>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>

<!-- Header -->
<header class="text-center" name="home">
  <div class="intro-text">
    <h1>Welcome to <span class="color">wpdf</span></h1>
    <p>Our service allows to retrieve the pictures, cut pdf pages, and more. Work with pdf files easily</p>
    <div class="clearfix"></div>
    <a href="#services-section" class="btn btn-default btn-lg page-scroll">Start</a> </div>
</header>
<!-- About Section -->

<!-- Services Section -->
<div id="services-section">
  <div class="container">
    <div class="section-title">
      <h2>Our Services</h2>
      <hr>
    </div>
    <div class="space"></div>
    <div class="row">
      <div class="col-md-3 col-sm-6 service"> <i class="fa fa-desktop"></i>
        <h4>Extract images</h4>
        <p>
<!-- Upload here -->
   <?php
if ($_FILES && $_FILES['filename']['error']== UPLOAD_ERR_OK)
{
    $name = $_FILES['filename']['name'];
    move_uploaded_file($_FILES['filename']['name'], $name);
    echo "File Ok. Please wait";
}
?>
<form method="post" enctype='multipart/form-data'>
<input type='file' name='filename' size='10' /><br /><br />
<input type='submit' value='Upload' />
</form>
</p>         


</p>
      </div>
      <div class="col-md-3 col-sm-6 service"> <i class="fa fa-gears"></i>
        <h4>Cut into pages</h4>
        <p>
<!-- UPLOAD -->
<?php
if ($_FILES && $_FILES['filename']['error']== UPLOAD_ERR_OK)
{
    $name = $_FILES['filename']['name'];
    move_uploaded_file($_FILES['filename']['name'], $name);
    echo "File Ok. Please wait";
}
?>
<form method="post" enctype='multipart/form-data'>
<input type='file' name='filename' size='10' /><br /><br />
<input type='submit' value='Upload' />
</form>
</p>
        
      </div>
      <div class="col-md-3 col-sm-6 service"> <i class="fa fa-pie-chart"></i>
        <h4>In the development</h4>
        <p>Lorem ipsum dolor sit amet placerat facilisis felis mi in tempus eleifend pellentesque natoque etiam.</p>
      </div>
      <div class="col-md-3 col-sm-6 service"> <i class="fa fa-line-chart"></i>
        <h4>In the development</h4>
        <p>Lorem ipsum dolor sit amet placerat facilisis felis mi in tempus eleifend pellentesque natoque.</p>
      </div>
    </div>
    <div class="space"></div>
   
  </div>
</div>
<!-- Portfolio Section -->

<!-- Team Section -->

<!-- Contact Section -->
<div id="contact-section">
  <div class="container">
    <div class="section-title center">
      <h2>Donate</h2>
      <hr>
    </div>
<div id="footer">
  <div class="container">
    <p>Fork me on <a href="https://github.com/onikonov/wpdf" rel="nofollow">GitHub</a></p>
  </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
<script type="text/javascript" src="js/jquery.1.11.1.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script type="text/javascript" src="js/bootstrap.js"></script> 
<script type="text/javascript" src="js/SmoothScroll.js"></script> 
<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script> 
<script type="text/javascript" src="js/jquery.isotope.js"></script> 
<script type="text/javascript" src="js/jqBootstrapValidation.js"></script> 
<script type="text/javascript" src="js/contact_me.js"></script> 

<!-- Javascripts
    ================================================== --> 
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>
