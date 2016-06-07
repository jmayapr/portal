<!DOCTYPE html>

<html>

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
	</head>

	<body>
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
					        <li ><a href="index.php">Home</a></li>
					        <li><a href="foromedico.php">Foro Medico</a></li>
					        <li><a href="serviciosempleados.php">Servicios a Empleados</a></li>
					        <li><a href="serviciosdepartamentos.php">Servicios a Departamentos</a></li>
					        <li class="active"><a href="serviciosproveedores.php">Servicios a Proveedores</a></li>
				      	</ul>
				    </div><!-- /.navbar-collapse -->
				</div><!-- /.container-fluid -->
			</nav>
		</section>


		<section class="service-title text-center">
			<div class="service-wrapper">
				<div class="container">
					<div class= "row">
						<h2 class="headline">Servicios a Proveedores</h2>
					</div>
					<div class="row">
						<div class="sub-headline">
							<p>Portal exclusivo para Proveedores</p>
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
	        				<div class="about-service">
		        				<h3 class="text-center">Login Proveedores</h3>
								<div class="panel panel-default">
									<div class="panel-body">
										<div class="form-group">
											<label for="usr">Proveedores:</label>
											<input type="text" class="form-control" id="usr">
											</div>
											<div class="form-group">
											<label for="pwd">Password:</label>
											<input type="password" class="form-control" id="pwd">
										</div>
										<button type="button" class="btn btn-primary" id="entrare">Entrar</button>
										<button type="button" class="btn btn-danger" id="cancelar">Cancel</button>
									</div>
								</div>
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
