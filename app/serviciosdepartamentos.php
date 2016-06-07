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
		
		<script src="assets/js/jquery.js"></script>
		<script src="assets/js/serviciosDept.js"></script>
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
					        <li><a href="index.php">Home</a></li>
					        <li><a href="foromedico.php">Foro Medico</a></li>
					        <li><a href="serviciosempleados.php">Servicios a Empleados</a></li>
					        <li class="active"><a href="serviciosdepartamentos.php">Servicios a Departamentos</a></li>
					        <li><a href="serviciosproveedores.php">Servicios a Proveedores</a></li>
				      	</ul>
				    </div><!-- /.navbar-collapse -->
				</div><!-- /.container-fluid -->
			</nav>
		</section>


		<section class="service-title text-center">
			<div class="service-wrapper">
				<div class="container">
					<div class= "row">
						<h2 class="headline">Servicios a Departamentos</h2>
					</div>
					<div class="row">
						<div class="sub-headline">
							<p>Obten los Reportes, Solicitud Acceso, Reserver Equipo y Solicitar Tareas.</p>
						</div>
					</div>	
				</div>
			</div>
		</section>

		<section class= "featured-service-content">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 service">
						<div class="row text-center">
							<div class="service-icon text-center">
		        				<i class="fa fa-file-text-o fa-5x"></i>
		        			</div>
						</div>
						
	        			<div class="row text-center">
	        				<div class="about-service">
		        				<h3 class="text-center">Solicitar Reportes</h3>
		        				<p class="text-center">
		        					Ahora puedes solicitar los Reportes directamente por Internet.
		        				</p>
		        				<a href="#reports" class="rm-btn btn btn-primary" id="btnReport">
										Solicitar Reportes <i class="fa fa-caret-right"></i></a>
		        			</div>
	        			</div>
		 						
	        		</div>	<!-- col-sm-4 -->

	        		<div class="col-sm-6 service">
	        			<div class="row text-center">
	        				<div class="service-icon text-center">
		        				<i class="fa fa-cog fa-5x"></i>
		        			</div>
	        			</div>
		        			
	        			<div class="row text-center">
	        				<div class="about-service">
		        				<h3 class="text-center">Solicitar Acceso</h3>
		        				<p class="text-center">
		        					Ahora puedes solicitar accesos a Meditech, al Network y Corre Electronico.
		        				</p>
		        				<a href="#access" class="rm-btn btn btn-primary" id="btnAccess">
										Solicitar Acceso <i class="fa fa-caret-right"></i></a>
		        			</div>
	        			</div>
		        			
	        		</div>	<!-- col-sm-4 -->
	        		
	        		<div class="col-sm-6 service">
	        			<div class="row text-center">
	        				<div class="service-icon text-center">
		        				<i class="fa fa-laptop fa-5x"></i>
		        			</div>
	        			</div>
		        			
	        			<div class="row text-center">
	        				<div class="about-service">
		        				<h3 class="text-center">Reservar Equipo</h3>
		        				<p class="text-center">
		        					Ahora puedes reservar una Laptop, Proyector o el Learning Center.
		        				</p>
		        				<a href="#equipment" class="rm-btn btn btn-primary" id="btnEquipment">
										Reservar Equipo <i class="fa fa-caret-right"></i></a>
		        			</div>
	        			</div>
		        			
	        		</div>	<!-- col-sm-4 -->
	        	
	        		<div class="col-sm-6 service">
	        			<div class="row text-center">
	        				<div class="service-icon text-center">
		        				<i class="fa fa-tasks fa-5x"></i>
		        			</div>
	        			</div>
		        			
	        			<div class="row text-center">
	        				<div class="about-service">
		        				<h3 class="text-center">Solicitud de Tarea</h3>
		        				<p class="text-center">
		        					Ahora puedes solicitar un trabajo directamente por Internet. 
		        				</p>
		        				<a href="#task" class="rm-btn btn btn-primary" id="btnTask">
										Solicitar Tarea <i class="fa fa-caret-right"></i></a>
		        			</div>
	        			</div>
		        			
	        		</div>	<!-- col-sm-4 -->
	        		
				</div>
			</div>
		</section>

		<section class="special-service-content" id="servicios">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="special-service" >
							<h2><span></span></h2>
							
							<div class="row service-item" id="reports">
								<div class="col-md-12">
									<h3>Solicitar Reportes</h3>
									<form class="form-horizontal" role="form" id="reportsForm">
									    <div class="form-group">
									      <label class="col-sm-2 control-label">Solicitado por: </label>
									      <div class="col-sm-10">
									        <input class="form-control" id="reportRequestedBy" type="text" placeholder="Solicitado por" required="required" >
									      </div>
									    </div>
									    <div class="form-group">
									      <label class="col-sm-2 control-label">Departamento</label>
									      <div class="col-sm-10">
									        <input class="form-control" id="reportDepartamento" type="text" placeholder="Departamento" required="required">
									      </div>
									    </div>
									    <div class="form-group">
									      <label class="col-sm-2 control-label">Proposito del Reporte</label>
									      <div class="col-sm-10">
									        <input class="form-control" id="reportPurpose" type="text" placeholder="Proposito del Reporte" required="required">
									      </div>
									    </div>
									    <div class="form-group">
									      <label class="col-sm-2 control-label">Periodo de Evaluacion</label>
									      <div class="col-sm-10">
									        <input class="form-control" id="reportRange" type="text" placeholder="Periodo de Evaluacion" required="required">
									      </div>
									    </div>
									    <div class="form-group">
									      <label class="col-sm-2 control-label">Tipo de Reporte</label>
									      <div class="col-sm-10">
									        <label class="radio-inline"><input type="radio" name="reportDetail" value="Detallado">Detallado</label>
											<label class="radio-inline"><input type="radio" name="reportDetail" value="Estadistico">Estadistico</label>
									      </div>
									    </div>
									    <div class="form-group">
									      <label class="col-sm-2 control-label">Requisitos del Reporte</label>
									      <div class="col-sm-10">
									        <textarea class="form-control"  id="reportReq" placeholder= "Requisitos del Reporte"></textarea>
									      </div>
									    </div>
									    <button type="button" class="btn btn-primary" id="clickReport">Solicitar Reporte</button>
									</form>
								</div>
							</div><!-- Service item-->
							<div class="row service-item" id="access">
								<div class="col-md-12">
									<h3>Solicitud de Accesos</h3>
									<form class="form-horizontal" role="form">
										<div class="form-group">
									      <label class="col-sm-2 control-label">Selecciones el tipo de acceso a solicitar.</label>
									      <div class="col-sm-10">
									        <label class="radio-inline"><input type="radio" name="accessType" value="Meditech">Sistema de Meditech</label>
											<label class="radio-inline"><input type="radio" name="accessType" value="Network">Acceso a la Red</label>
											<label class="radio-inline"><input type="radio" name="accessType" value="Medicamentos">Carritos de Medicamentos</label>
									      </div>
									    </div>
									    <div class="form-group">
									      <label class="col-sm-2 control-label">Nombre del Empleado </label>
									      <div class="col-sm-10">
									        <input class="form-control" id="accessEmpName" type="text" placeholder="Juan del Pueblo">
									      </div>
									    </div>
									    <div class="form-group">
									      <label class="col-sm-2 control-label">Departamento</label>
									      <div class="col-sm-10">
									        <input class="form-control" id="accessDep" type="text" placeholder="Departamento">
									      </div>
									    </div>
									    <div class="form-group">
									      <label class="col-sm-2 control-label">Numero de Empleado</label>
									      <div class="col-sm-10">
									        <input class="form-control" id="accessEmpID" type="number" placeholder="5251">
									      </div>
									    </div>
									    <div class="form-group">
									      <label class="col-sm-2 control-label">Numero de Licencia</label>
									      <div class="col-sm-10">
									        <input class="form-control" id="accessLicence" type="number" placeholder="12345">
									      </div>
									    </div>
									    <div class="form-group">
									      <label class="col-sm-2 control-label">Menciones empleado que se le copia los accesos.</label>
									      <div class="col-sm-10">
									        <input class="form-control" id="accessClone" type="text" placeholder="Fulano de Tal">
									      </div>
									    </div>
									    <button type="button" class="btn btn-primary" id="clickAccess">Solicitar Accesos</button>
									</form>
								</div>
							</div><!-- Service item-->
							<div class="row service-item" id="equipment">
								<div class="col-md-12">
									<h3>Reservar Equipo</h3>
									<form class="form-horizontal" role="form">
										<div class="form-group">
									      <label class="col-sm-2 control-label">Selecciones Equipo o Lugar para Reservar.</label>
									      <div class="col-sm-10">
									        <label class="radio-inline"><input type="radio" name="equipmentType" value="Laptop">Laptop</label>
											<label class="radio-inline"><input type="radio" name="equipmentType" value="Proyector">Proyector</label>
											<label class="radio-inline"><input type="radio" name="equipmentType" value="Learning Center">Learning Center</label>
									      </div>
									    </div>
									    <div class="form-group">
									      <label class="col-sm-2 control-label">Escriba Fecha y Hora </label>
									      <div class="col-sm-10">
									        <input class="form-control" id="equipmentDate" type="date" >
									        <input class="form-control" id="equipmentTime" type="time">
									      </div>
									    </div>
									    <button type="button" class="btn btn-primary" id="clickEquipment">Reservar Equipo</button>
									</form>
								</div>
							</div><!-- Service item-->
							<div class="row service-item" id="task">
								<div class="col-md-12">
									<h3>Solicitud de Tarea</h3>
									<form class="form-horizontal" role="form">
										<div class="form-group">
									      <label class="col-sm-2 control-label">Solicitado Por </label>
									      <div class="col-sm-10">
									        <input class="form-control" id="accessEmpName" type="text" placeholder="Juan del Pueblo">
									      </div>
									    </div>
									    <div class="form-group">
									      <label class="col-sm-2 control-label">Departamento</label>
									      <div class="col-sm-10">
									        <input class="form-control" id="accessDep" type="text" placeholder="Departamento">
									      </div>
									    </div>
									    <div class="form-group">
									      <label class="col-sm-2 control-label">Descripcion de Tarea</label>
									      <div class="col-sm-10">
									        <textarea class="form-control" rows="5" id="comment" placeholder= "Periodo de Evaluacion"></textarea>
									      </div>
									    </div>
									    <button type="button" class="btn btn-primary" id="clickTask">Solicitar Tarea</button>
									</form>
								</div>
							</div><!-- Service item-->
							
						</div>
					</div>
					
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
