<!DOCTYPE html>
<html>
<head>
	<title>Boostrap Ejemplo</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial.scale=1.0, maximum.scale=1.0, minimum.scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<br>

		<a href="#seccion" class="btn btn-primary" data-toggle="collapse">Mostrar/Ocultar</a>
		<div class="collapse" id="seccion">
			<br>
			<div class="well">
				<p>Bootstrap fue desarrollado por Mark Otto y Jacbod Thornton de Twitter, como un marco de trabajo (framework) para fomentar la consistencia entre las herramientas internas. Antes de Bootstrap, se usaban varias librerias para el desarrollo de interfaces de usuario, las cuales llevaban a inconsistencias y a una gran carga de trabajo en su mantenimiento.</p>
			</div>
				
		</div>
		

	</div>
	<br>
	<!--Acordeon -->

		<div class="pan1-group" id="accordion" role="tablist">
			<div class="panel panel-default">
				 <div class="panel-heading" role="tab" id="heading1">
				 <h4 class="panel-tittle">
					<a href="#collapse1" data-toggle="collapse" data-parent="#accordion">
						Creadores
					</a>
				</h4>	
		    </div>
		    	<div id="collapse1" class="panel-collapse collapse in">
		    		<div class="panel-body">
		    			Un pequenio grupo de desarrolladores nos reunimos a diseniar y construir una nueva herramienta interna y
 						vimos una oportunidad de hacer mas. A traves de ese proceso, nos vimos construyendo algo mucho mas sustancial que otra herramienta interna.
 						Meses despues terminamos con una primera version de Bootstrap como una manera de documentar y compartir bienes y patrones de disenio comunes dentro de la compania
		    </div>
          </div>
	   </div>	
	</div>



<!--Acordeon 2 -->

		<div class="pan1-group" id="accordion" role="tablist">
			<div class="panel panel-default">
				 <div class="panel-heading" role="tab" id="heading2">
				 <h4 class="panel-tittle">
					<a href="#collapse2" data-toggle="collapse" data-parent="#accordion">
						Caracteristicas
					</a>
				</h4>	
		    </div>
		    	<div id="collapse2" class="panel-collapse collapse in">
		    		<div class="panel-body">
		    			Bootstrap tiene un soporte relativamente incompleto para HTML5 y CSS 3, pero es compatible con la mayoria de los navegadores web. La informacion basica de compatibilidad de sitios web o aplicaciones esta disponible para todos los dispositivos y navegadores. Existe un concepto de compatibilidad parcial que hace disponible la informacion basica de un sitio web para todos los dispositivos y navegadores. Por ejemplo, las propiedades introducidas en CSS3 para las esquinas redondeadas, gradientes y sombras son usadas por Bootstrap a pesar de la falta de soporte de navegadores antiguos. Esto extiende la funcionalidad de la herramienta, pero no es requerida para su uso.

						Desde la version 2.0 tambien soporta disenios sensibles. Esto significa que el disenio grafico de la pagina se ajusta dinamicamente, tomando en cuenta las caracteristicas del dispositivo usado (Computadoras, tabletas, telefonos moviles).

						Bootstrap es de codigo abierto y esta disponible en GitHub. Los desarrolladores estan motivados a participar en el proyecto y a hacer sus propias contribuciones a la plataforma.
		    </div>
          </div>
	   </div>	
	</div>

	<!--Acordeon 3 -->

		<div class="pan1-group" id="accordion" role="tablist">
			<div class="panel panel-default">
				 <div class="panel-heading" role="tab" id="heading3">
				 <h4 class="panel-tittle">
					<a href="#collapse3" data-toggle="collapse" data-parent="#accordion">
						Versiones
					</a>
				</h4>	
		    </div>
		    	<div id="collapse3" class="panel-collapse collapse in">
		    		<div class="panel-body">
		    				
					Version 1	v1.4.0, v1.3.0, v1.2.0, v1.1.1, v1.1.0 , v1.0.0
					Version 2	v2.3.2,v2.3.1,v2.3.0 ,v2.2.2,v2.2.1,v2.2.0,v2.1.1,v2.1.0,v2.0.4,v2.0.3,v2.0.2,v2.0.1,v2.0.0
					Version 3	v3.1.1,v3.1.0,v3.0.3,[2],v3.0.1,v3.0.0, v3.3.6
		    </div>
          </div>
	   </div>	
	</div>


	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>