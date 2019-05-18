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


	<section class="section padding-off">
		<div class="container">
			<div class="col-md-12 align-center">
				<div class="col-md-12 align-center"><h2>Listado Empleados</h2></div>
				 <?php

function mostrarDatos ($resultados) {

if ($resultados !=NULL) {

echo "- id: ".$resultados['id']."<br/> ";

echo "- nombre: ".$resultados['nombre']."<br/>";

echo "- apellido: ".$resultados['apellido']."<br/>";

echo "- edad: ".$resultados['edad']."<br/>";

echo "- tipo de empleado: ".$resultados['tipo']."<br/>";

echo "- Habilidad: ".$resultados['observacion']."<br/>";

echo "**********************************<br/>";}

else {echo "<br/>No hay más datos!!! <br/>";}

}

$link = mysqli_connect("localhost", "root", "");

mysqli_select_db($link, "emprender");


$result = mysqli_query($link, "SELECT * FROM empleados");

while ($fila = mysqli_fetch_array($result)){

mostrarDatos($fila);

}

mysqli_free_result($result);

mysqli_close($link);

?>
			</div>
		</div>
	  
    
	</section>
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
	<section class="section padding-off">
	  <form action="busqueda.php" method="POST">
	  	<div class="col-md-12">
	  		<div class="col-md-12 align-center"><h2>Buscar un Empleado por su ID:</h2></div>
	  		<div class="col-md-6">
	  		Buscar: <input type="text" name="id" id="id">
	  	
	  	</div>
	  	<div class="col-md-6">
	  		<br>
	  	<input type="submit" name="enviar" value="Buscar Empleado" class="button default submit pull-center color-top" onclick=" return validaciones()">
	  	</div>
	  	</div>
	  	

	  </form>
    
	</section>

   <br>
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
   <section class="section padding-off">
		<div class="container">
			<div class="col-md-12 align-center">
				<div class="col-md-12 align-center"><h2>Promedio edades</h2></div>
				 <?php

function CalculaEdad ($resultados) {

if ($resultados !=NULL) {



echo "- edad: ".$resultados['edad']."<br/>";


}
else {echo "<br/>No hay más datos!!! <br/>";}

}

$link = mysqli_connect("localhost", "root", "");

mysqli_select_db($link, "emprender");


$result = mysqli_query($link, "SELECT edad, AVG(edad) FROM empleados");

while ($fila = mysqli_fetch_array($result)){

CalculaEdad($fila);

}

mysqli_free_result($result);

mysqli_close($link);

?>
			</div>
		</div>
	  
    
	</section>
	<div id="content">
		

		
		
		
		<section class="section padding-off color-top">
			
			<div class="container">
				
				<div class="row">
					
					<div class="reading-box">
						
						<div class="col-box-8">
							<button type='submit' class='button default submit pull-center black' onclick='return confirmarAvance()'>Volver a Inicio</button>.
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
								<a class="button default submit pull-center color-top" href="mailto:alematute18@gmail.com" id="submit"><i class="icon-paper-plane-2" style="color: #ffffff; font-size: 20px; font-weight: bold;"></i><br><span style="color:#ffffff; font-weight:bold;">Preguntas</span></a>  
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
