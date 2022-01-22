<?php
//var_dump($db->conectar() );
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="assets/css/styl.css">
	<link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">
	<script src="assets/js/fontawesome-all.min.js"></script>
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/animate.min.css">

	<script src="assets/js/jquery-3.2.1.min.js"></script>
	  <script src="assets/js/jquery.fancybox.min.js" type="text/javascript" ></script>
	

	<title> Portafolio Soliasq </title>
</head>

<body>
<div class="wrapper">
 	<div class="wrapper__header">
 	
		<header class="header" >
		<nav>
		<div class="logo"><h1><img src="assets/img/logosoliasq.svg" alt=""></h1></div>
		<div class="openMenu"><i class="fa fa-bars"></i></div>
			<ul class="mainMenu">
				<li><a href="#" >Inicio</a></li>
				<li><a href="#acercade" >Acerca de mi</a></li>
				<li><a href="#trabajos">Trabajos</a></li>
				<li><a href="#contactos">Contactos</a></li>
				<div class="closeMenu"><i class="fa fa-times"></i></div>
				<!--span class="icons">
				<i class="fab fa-facebook"></i>
				<i class="fab fa-instagram"></i>
				<i class="fab fa-twitter"></i>
				<i class="fab fa-github"></i>
				</span-->
			</ul>
		</nav>
		</header>
	</div><!-- fin contenedor wrapper__header-->
	
	<section class="animated fadeInUp">
		<div class="fondo ">
			<a href="#trabajos" class="button">Ver Portafolio</a>

			<h1> DISEÑADOR Y DESARROLLADOR FRONT END</h1>
		</div>
	</section>
	<article ><!-- article -->
		<div class="titulo">
			<div class="titulo-ico"><img src="assets/img/trabajo.svg" alt=""></div>
			<div class="titulo-texto" ><a name="trabajos">Trabajos</a></div>
		</div>
		<div >
			<div class="contenedor-imagen">

            <div class="imagenes">
                <img src="assets/img/screen1.jpg" alt="">
                <div class="overlay">
                    <h2>View Screenshot</h2><a data-fancybox="gallery" href="assets/img/screen1-lx.jpg" class=" btn-slider2" href="#">GALERIA</a>
                </div>
            </div>

            <div class="imagenes">

            	 
                <img src="assets/img/screen2.jpg" alt="">
                <div class="overlay">
                    <h2>View Screenshot</h2><a  data-fancybox="gallery" href="assets/img/screen2-lx.jpg" class=" btn-slider2" href="#">GALERIA</a>
                </div>
            </div>

            <div class="imagenes">
                <img src="assets/img/screen3.jpg" alt="">
                <div class="overlay">
                    <h2>View Screenshot</h2><a  data-fancybox="gallery" href="assets/img/screen3-lx.jpg" class=" btn-slider2" href="#">GALERIA</a>
                </div>
            </div>
            
             <div class="imagenes">
                <img src="assets/img/screen4.jpg" alt="">
                <div class="overlay" id="overlay ">
                    <h2> Wiew Screenshot</h2><a  data-fancybox="gallery" href="assets/img/screen4-lx.jpg" class=" btn-slider2" href="#">GALERIA</a>
                </div>
            </div>
            <div class="imagenes">
                <img src="assets/img/screen5.jpg" alt="">
                <div class="overlay">
                    <h2>View Screenshot</h2>
                    <a  data-fancybox="gallery" href="assets/img/screen5-lx.jpg" class=" btn-slider2" href="#">GALERIA</a>
                </div>
            </div>
            <div class="imagenes">
                <img  class=" imgenes" src="assets/img/screen6.jpg" alt="">
                <div class="overlay">
                    <h2>View Screenshot</h2>
                    <a  data-fancybox="gallery" href="assets/img/screen6-lx.jpg" class=" btn-slider2" href="#">GALERIA</a>
                </div>
            </div>
            <div class="imagenes">
                <img src="assets/img/screen7.jpg" alt="">
                <div class="overlay">
                    <h2>View Screenshot</h2>
                    <a  data-fancybox="gallery" href="assets/img/screen7-lx.jpg" class=" btn-slider2" href="#">GALERIA</a>
                </div>
            </div>
            <div class="imagenes">
                <img src="assets/img/screen8.jpg" alt="">
                <div class="overlay">
                    <h2>View Screenshot
                    </h2>
                    <a  data-fancybox="gallery" href="assets/img/screen8-lx.jpg" class=" btn-slider2" href="#">GALERIA</a>

                </div>
            </div>
             <div class="imagenes">
                <img src="assets/img/screen9.jpg" alt="">
                <div class="overlay">
                    <h2>View Screenshot
                    </h2>
                    <a  data-fancybox="gallery" href="assets/img/screen9-lx.jpg" class=" btn-slider2" href="#">GALERIA</a>

                </div>
            </div>


        </div>
		</div>
	</article><!-- /article -->
	<article><!-- article -->
		<div class="titulo">
			<div class="titulo-ico"><img   src="assets/img/acerca.svg" alt=""></div>
			<div class="titulo-texto"><a name="acercade"> Acerca de mi</a></div>
		</div>
		<div class="acerca">
			<img src="assets/img/pic solias.png"  alt="Elias Q.">
			<p>Hola!  ¿Quien soy? </p>
<p>Soy Elías Q. Soy Desarrollador Web Front End,</p>  
<p>Diseñador Web, Gráfico, Blogger, Youtuber</p>
<div class="espacio"></div>
<a href="#contactos" class="button" >Contáctame</a>
<div class="espacio"></div>
		</div>
	</article><!-- /article -->

	<article>
			<div class="tool">
				<div class="web">
					<div class="titulo">
						
						<div class="titulo-texto"><img class="alto" src="assets/img/web.svg" alt=""></div>
						<hr class="raya">
								<p class="texto">Cuéntame, si tienes un proyecto o idea seria tremendo trabajar en el desarrollo de paginas estaticas, dinamicas como Front-End </p>
					</div>
				</div>
				<div class="grafico">
					<div class="titulo">
						<div class="titulo-texto"><img class="alto" src="assets/img/graphics.svg" alt=""></div>
						<hr class="raya">
						
						<p class="texto">Sin duda una imagen es uno de los elementos importantes de una empresa, creamos y damos forma a todo los graficos que necesitas.</p>
					</div>
				</div>

			</div>
		
	</article><!-- /article -->


	<article>
			<div class="tool">
				<div class="titulo">
					<div class="titulo-ico"><img   src="assets/img/contacto.svg" alt=""></div>
					<div class="titulo-texto"><a name="contactos">Contactos</a></div>
				</div>
				<div class="web">
					<div class="titulo">
						<h2>Escribemé</h2> 
					</div>
					<div class="formulario">
						<form method="post" action="" id="formCorreo" accept-charset="utf-8">
							<div class="textb">
								<input type="text" name="nombre" required>
								<div class="placeholder">Nombres</div>
								<div class="mensaje" id="_nombre"></div>
							</div>
							<div class="textb">
								<input type="text" name="telefono" required>
								<div class="placeholder">Nº de Teléfono</div>
								<div class="mensaje" id="_telefono"></div>
							</div>

							<div class="textb">
								<input type="text" name="email" required>
								<div class="placeholder">Correo</div>
								<div class="mensaje" id="_email"></div>
							</div>

							<div class="textb">
								<input type="text" name="asunto" required>
								<div class="placeholder">Asunto</div>
								<div class="mensaje" id="_asunto"></div>
							</div>

							<div class="textb">
								<textarea name="mensaje"></textarea>
								<div class="placeholder">Mensaje</div>
								<div class="mensaje" id="_mensaje"></div>
							</div>
							
							<div class="textb">
								<input type="hidden" name="latitud" value="" id="latitud">
							</div>
							<div class="textb">
								<input type="hidden" name="longitud"  value="" id="longitud" >				
							</div>

							<input type="submit" name="" class="btn" type="" id="btn" value="Enviar Mensaje" >
							<div class="mensaje" id="mensaje"></div>
						</form>	
					</div>
				</div>
				<div class="grafico">
					<div class="titulo">
						<h2 class="espacio">Social Media</h2>
						<ul class="menu-social">
						    <li><a href="https://github.com/soliasq" target="_blank" class="git"></a></li> 
						    <li><a href="#" target="_blank" class="ln"></a></li>
						    <li><a href="https://t.me/soliasq" target="_blank" class="tele"></a></li>
						    <li><a href="https://www.pinterest.com/soliasq" target="_blank" class="pin"></a></li>
						    <li><a href="https://www.facebook.com/Soliasq-105618498283911" target="_blank" class="face"></a></li>
						</ul>
						<h2 class="espacio espacio-alto">Seguiemé en </h2>
						<div class="youtube">
							<a  class="you" href="https://www.youtube.com/channel/UCOBSI6n-Uktm6iN4lqG-fSg" target="_blank" > </a>
							 </div>
						<div class="facebook espacio">
					

							<div id = "fb-root" > </div> 
							<script async diferir crossorigin = "anonymous" src = "https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v10.0" nonce = "T5vX9ls0" > </script> 

							<div class = "fb-like" data-href = "https://www.facebook.com/Soliasq-105618498283911" data-width = "" data-layout = "button" data-action = "like" data- size = "large" data-share = "true" > </div>
							
						</div>
				</div>

			</div>
		
	</article><!-- /article -->



	<footer>
		<div class="footer-datos">
			<div class="info">
				<p><a href="mailto:soliasq@gmail.com"> <img src="assets/img/gmail.svg"width="25px" height="25px" alt="Escríbeme Correo">&nbsp;&nbsp;soliasq@gmail.com</a></p>
				<p><a href="https://web.whatsapp.com/send?phone=59177077460&text=Para mas Información de acerca de mis servicios  chatéame" target="_blank"> <img src="assets/img/whatsapp.svg" width="25px" height="25px" alt=" Llámame por Whatsapp"> +59177077460 </a></p>
			</div>
			<div class="copy">
				<p>Portafolio :: Desarrollador Web, Diseñador web/Gráfico, Santa Cruz - Bolivia </p>
				<p>© Copyright 2019 Algunos derechos reservados   <a href="view/cookies.html" target="_blank" class="amarillo">&nbsp;&nbsp; Leer  Cookies,</a> <a href="view/politicas-privacida.html" target="_blank" class="amarillo">politicas de Privacidad</a></p>  
			</div>	
		</div>
		<div class="nav-footer">
			<div class="logo-footer">
				
					<img class="logo-foo" src="assets/img/logosoliasq.svg" alt="">
				   	 <ul >
				        <li><a href="#">Inicio</a></li><!--
				     --><li><a href="#trabajos">Trabajos</a> </li><!--
				     --><li><a href="#acercade">Acerca de mi</a></li><!--
				     --><li><a href="#contactos">Contactos</a></li>
				    </ul>
			 
			</div>
		</div>
		<div class="cookies">
			<div class="caja1">
				<p>Este sitio usa cookies propias y de terceros para facilitarle el uso y elaborar estadísticas. 
					Si continúa en el mismo, consideramos que acepta su uso. <a href="view/cookies.html" class="amarillo"> &nbsp;&nbsp;Más información</a>
				</p>
			</div>
			<div class="caja2">
				<a href="#"  target="blank" id="cookies"></a>	<img src="assets/img/close.svg" alt="" >
			</div>
			
		</div>
	</footer>
	

</div><!-- fin wrappe-->



 
	
<script defer src="assets/js/app.js"></script>

</body>
</html>


