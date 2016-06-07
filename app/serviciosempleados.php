<!DOCTYPE html>
<html >

	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" href="img/season-change.jpg" type="image/x-icon">
		<title>Bella Vista IT Services</title>


	    <link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
	    <!-- <link href='http://fonts.googleapis.com/css?family=Pontano+Sans' rel='stylesheet' type='text/css'>
	    <link href='http://fonts.googleapis.com/css?family=Alegreya+Sans:300,400,500,700' rel='stylesheet' type='text/css'> -->
	    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,500' rel='stylesheet' type='text/css'>
	    <link href='http://fonts.googleapis.com/css?family=Dosis:300,400,500,600' rel='stylesheet' type='text/css'>
	    
		<link rel="stylesheet" type="text/css" href="assets/css/animate.css">
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="assets/css/main.css">
		
		<script src="assets/js/jquery.js"></script>
		<script src="assets/js/serviciosPersonal.js"></script>
	</head>

	<body ng-app>
		<section class= "navs">
			<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  				<div class="container-fluid">
    				<!-- Brand and toggle get grouped for better mobile display -->
    				<div class="navbar-header">
      					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					        <span class="sr-only">Toggle navigation</span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
	      				</button>
	      				<a class="navbar-brand logo" >
	      					<span><i class="fa fa-pied-piper"></i></span>
	      					Bella Vista IT Services
	      				</a>
	    			</div>

    		<!-- Collect the nav links, forms, and other content for toggling -->
				    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				    	<ul class="nav navbar-nav navbar-right">
					        <li><a href="index.php">Home</a></li>
					        <li><a href="foromedico.php">Foro Medico</a></li>
					        <li class="active"><a href="serviciosempleados.php">Servicios a Empleados</a></li>
					        <li><a href="serviciosdepartamentos.php">Servicios a Departamentos</a></li>
					        <li><a href="serviciosproveedores.php">Servicios a Proveedores</a></li>
				      	</ul>
				    </div><!-- /.navbar-collapse -->
				</div><!-- /.container-fluid -->
			</nav>
		</section>


		<section class="service-title text-center" >
			<div class="service-wrapper">
				<div class="container">
					<div class= "row">
						<h2 class="headline">Servicios para los Empleados</h2>
					</div>
					<div class="row">
						<div class="sub-headline">
							<p>Obtén las ultimas actualizaciónes en Cafeteria y Tienda de Regalos</p>
						</div>
					</div>	
				</div>
			</div>
		</section>

		<section class= "featured-service-content">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 service">
						<div class="row text-center">
							
						</div>
		        			
	        			<div class="row text-center">
	        				<div class="about-service">
		        					<form class="form-horizontal" role="form">
			        				<h3 class="text-center">Entre su Numero de Empleado</h3>
			        				<input type="number" class="form-control input-lg" id="empid">
			        				<button type="button" class="btn btn-primary" id="buscar">Buscar</button>
		        					</form>
		        				
		        			</div>
	        			</div>
		 						
	        		</div>	<!-- col-sm-4 -->
					<div class="col-sm-6 service">
						<div class="row text-center">
							<div class="service-icon text-center">
		        				<i class="fa fa-coffee fa-5x"></i>
		        			</div>
						</div>
		        			
	        			<div class="row text-center">
	        				<div class="about-service">
		        				<h3 class="text-center">Balance en Cafeteria</h3>
		        				<p class="text-center" id="cafeteria">
		        					
		        				</p>
		        			</div>
	        			</div>
		 						
	        		</div>	<!-- col-sm-4 -->

	        		<div class="col-sm-6 service">
	        			<div class="row text-center">
	        				<div class="service-icon text-center">
		        				<i class="fa fa-gift fa-5x"></i>
		        			</div>
	        			</div>
		        			
	        			<div class="row text-center">
	        				<div class="about-service">
		        				<h3 class="text-center">Balance en la Tienda de Regalos</h3>
		        				<p class="text-center" id="giftshop">
		        					
		        				</p>
		        			</div>
	        			</div>
		        			
	        		</div>	<!-- col-sm-4 -->
	        		
	        		
				</div>
			</div>
		</section>

		


		<section id="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3">
						<ul class="text-center contact">
				        	
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="copy-right-text text-center">
							&copy; Copyright 2016, Bella Vista IT Services 
						</div>
					</div>
				</div>
			</div>
		</section>
		<script type="text/javascript" src="assets/js/jquery.min.js"></script>
		<script type="text/javascript" src="assets/js/isotope.pkgd.min.js"></script>
		<script type="text/javascript" src="assets/js/wow.min.js"></script>
		<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>


		<script>
      		new WOW().init();
		</script>

		<script>
			$('#myTab a').click(function (e) 
			{
				e.preventDefault()
				$(this).tab('show')
			})
		</script>
		
	</body>
</html>
