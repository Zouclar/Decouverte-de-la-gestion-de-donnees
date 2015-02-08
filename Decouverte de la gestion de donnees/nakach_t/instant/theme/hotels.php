<!DOCTYPE html>
<html>
  <head>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.ico">

    <title>Let Me Sleep - Hôtels</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>                                                     
    <script src="assets/js/bootstrap.min.js"></script>   
 
  </head>

  <body>

    <!-- Static navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">Let Me Sleep</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.html">Accueil</a></li>
            <li class="active"><a href="hotels.php">Hôtels</a></li>
            <li><a href="#">À propos</a></li>
          </ul>
        </div>
      </div>
    </div>


	<div id="aboutwrap">
	    <div class="container">
			<div class="row">
				<div class="col-lg-6 col-lg-offset-3">
				</div>
			</div>
	    </div> 
	</div>

	<div id="recherche">
	  <?php
	     include("rech.php");
	     ?> 
	</div>

	<div id="footerwrap">
		<div class="container">
			<div class="row centered">
				<div class="col-lg-4">
					<p><b>Localisation wsh</b></p>
				</div>
			
				<div class="col-lg-4">
					<p>Droits d'auteurs</p>
				</div>
				<div class="col-lg-4">
					<p>Contact</p>
				</div>
			</div>
		</div>
	</div>
	

  </body>
</html>
