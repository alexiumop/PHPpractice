<!DOCTYPE html>
<!--[if lte IE 8]>              <html class="ie8 no-js" lang="en">     <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="not-ie no-js" lang="en">  <!--<![endif]-->
<head>
	
	<!-- Google Web Fonts
  ================================================== -->
	<link href='http://fonts.googleapis.com/css?family=Roboto:100,300,300italic,400,500%7cCourgette%7cRaleway:200,300,400,500,600,700,800' rel='stylesheet' type='text/css'>
	
	<!-- Basic Page Needs
  ================================================== -->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
	<title>Tecnico</title>	
	
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="images/user-male.png">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">	

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<!-- CSS
  ================================================== -->
    <link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/grid.css" />
	<link rel="stylesheet" href="css/layout.css" />
	<link rel="stylesheet" href="css/fontello.css" />
	<link rel="stylesheet" href="css/animation.css" />
	<link rel="stylesheet" href="css/animate.css" />

	<link rel="stylesheet" href="js/sequence/sequencejs-theme.css" />
	<link rel="stylesheet" href="js/magnific-popup/magnific-popup.css" />
	<link rel="stylesheet" href="css/tooltipster.css" />
	
	
    <link rel="stylesheet" href="js/owl-carousel/owl.carousel.css" />
    <link rel="stylesheet" href="js/owl-carousel/owl.theme.css" />
    <link rel="stylesheet" href="js/owl-carousel/owl.transitions.css" />
	
	<!-- HTML5 Shiv
	================================================== -->
	<script src="js/jquery.modernizr.js"></script>
	
</head>

<body>
	
	
<!-- - - - - - - - - - - - - - Wrapper - - - - - - - - - - - - - - - - -->

	
<div id="wrapper">
	
	
	<!-- - - - - - - - - - - - - Mobile Menu - - - - - - - - - - - - - - -->	
	
	
	<nav id="mobile-advanced" class="mobile-advanced"></nav>
	
	
	<!-- - - - - - - - - - - - end Mobile Menu - - - - - - - - - - - - - -->


	<!-- - - - - - - - - - - - - - Top Bar - - - - - - - - - - - - - - - - -->	


	<div id="top-bar" class="color-top">

		<div class="container">

			<div class="row">

				<div class="col-md-7">

					<ul class="mini-contacts">
						<li class="address">Buenos Aires, Argentina</li>
						<li class="email">E-mail: alematute18@gmail.com</li>
					</ul><!--/ .mini-contacts-->

				</div>

				<div class="col-md-5">

					<ul class="social-icons style-fall">
						<li class="linkedin"><a href="https://www.linkedin.com/in/alejandro-matute-504557165/">LinkedIn</a></li>
						<li class="github"><a href="#">GitHub</a></li>
					</ul><!--/ .social-icons-->

				</div>

			</div><!--/ .row-->

		</div><!--/ .container-->

	</div><!--/ #top-bar-->
<section class="section">

<?php

$servername = "localhost";
$database = "emprender";
$username = "root";
$password = "";
// Se crea la conexion
$conn = mysqli_connect($servername, $username, $password, $database);
// verifica que conecta
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 

 
$sql = "INSERT INTO empleados (id, nombre, apellido, edad, observacion, tipo) VALUES ('$_POST[id]','$_POST[nombre]','$_POST[apellido]','$_POST[edad]','$_POST[leng]', '$_POST[programador]')";
if (mysqli_query($conn, $sql)) {
      echo "<p class='align-center'>Creacion exitosa, acceda para consultar empleados en el siguiente url: </p>
      <div class='col-md-6'>
      <a href='vistaEmpleados.php' class='button default submit pull-center color-top'>Verificar Listado</a>
      </div> 
      <div class='col-md-6'>      
             
            <a href='programador.php' class='button default submit pull-center color-top'>Registrar Programador</a>.
             </div>
             <div class='col-md-6'>
            
            
            <a href='Disenador.php' class='button default submit pull-center color-top'>Registrar diseñador</a>.
            </div> 
      <div class='col-md-6'>
      <button type='submit' class='button default submit pull-center color-top' onclick='return confirmarAvance()'>Volver a Inicio</button>.
      </div> ";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);


?>
</section>
<div id="content">
	
		
		<section class="section padding-off color-top">
			
			<div class="container">
				
				<div class="row">
					
					<div class="reading-box">
						
						<div class="col-box-8">
							
						</div>
						
						
						
					</div><!--/ .reading-box-->
						
				</div><!--/ .row-->
				
			</div><!--/ .container-->
			
		</section><!--/ .section-->
		
		<section class="section bg-gray-color">

			<div class="container">

				<div class="row">

					<div class="col-xs-12">

						<div class="section-title">
							<h2>Contacto</h2>
						</div>

					</div>

				</div><!--/ .row-->

				<div class="row">

					<div class="col-sm-8 col-sm-push-2 col-sm-pull-2">

						

						<center><div class="inputs-block">

								
									<p class="input-block">
								<a class="button default submit pull-center color-top" href="mailto:alematute18@gmail.com" id="submit"><i class="icon-paper-plane-2" style="color: #ffffff; font-size: 20px; font-weight: bold;"></i><br><span style="color:#ffffff; font-weight:bold;">Contactame por preguntas</span></a>  
								</p>
								
								

							</div></center><!--/ .textarea-block-->


						<div class="divider"></div>

						<ul class="social-icons style-fall align-center">
						<li class="linkedin"><a href="https://www.linkedin.com/in/alejandro-matute-504557165/">LinkedIn</a></li>
						<li class="github"><a href="#">GitHub</a></li>
					</ul><!--/ .social-icons-->

					</div>

				</div><!--/ .row-->

			</div><!--/ .container-->

		</section><!--/ .section-->
		
	</div><!--/ #content-->
	

	<!-- - - - - - - - - - - - - end Content - - - - - - - - - - - - - - - -->


	<!-- - - - - - - - - - - - - Bottom Footer - - - - - - - - - - - - - - - -->


	<footer class="bottom-footer">

		<div class="container">

			<div class="row">

				<div class="col-xs-12">

					<div class="col-sm-6">

						<div class="copyright">
							Copyright © 2019. <a target="_blank" href="https://www.linkedin.com/in/alejandro-matute-504557165/">Alejandro Matute</a>. All rights reserved
						</div><!--/ .cppyright-->

					</div>

				</div>

			</div><!--/ .row-->

		</div><!--/ .container-->

	</footer><!--/ .bottom-footer-->	


	<!-- - - - - - - - - - - - end Bottom Footer - - - - - - - - - - - - - - -->


</div><!--/ #wrapper-->


<!-- - - - - - - - - - - - end Wrapper - - - - - - - - - - - - - - -->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
<script src="js/jquery.sequence-min.js"></script>
<script src="js/sweetalert.min.js"></script>
<script src="js/validaciones.js"></script>
</body>
</html>
