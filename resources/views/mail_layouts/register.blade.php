<!DOCTYPE html>
<html>
<head>
	<title>Registrado en WordWaves</title>
	<style type="text/css">
		.container{
			max-width: 600px;
			margin: auto;
			font-family: Arial, Helvetica, sans-serif;
			background-color: #F4F6FA;
			padding: 20px;
			border-radius: 10px;
		}

		h1{
			color: #1265C8;
			text-align: center;
			font-size: 32px;
			margin-bottom: 20px;
		}

		p{
			color: #666;
			font-size: 18px;
			line-height: 1.5;
			margin-bottom: 20px;
			text-align: justify;
		}

		.button{
			display: block;
			background-color: #1265C8;
			color: #fff;
			padding: 10px 20px;
			border-radius: 5px;
			text-align: center;
			text-decoration: none;
			font-size: 20px;
			margin: 20px auto;
			max-width: 200px;
		}

		.button:hover{
			background-color: #0B3E7B;
		}

		img{
			max-width: 100%;
			height: auto;
			margin-bottom: 20px;
		}
	</style>
</head>
<body>
	<div class="container">
		<img src="https://img.icons8.com/?size=512&id=5etvAbl0lZ4F&format=png" width="75px" height="75px" alt="Logo de WordWaves">
        <h1>Hola {{ $name }},</h1>
        <h1 style="border-bottom: 2px solid #ADD8E6; padding-bottom: 2px;"></h1>

        <p>Gracias por registrarte en WordWaves.¡Bienvenido a WordWaves, la librería online perfecta para todos los amantes de la lectura! Estamos emocionados de tenerte como parte de nuestra comunidad de lectores y queremos asegurarnos de que tengas una experiencia increíble al leer libros en nuestra plataforma. Podrás encontrar una amplia variedad de libros en diferentes géneros y formatos. Esperamos que disfrutes de tu experiencia en WordWaves y que encuentres los libros que estás buscando para disfrutar de horas de lectura y aprendizaje.</p>
        <p>Gracias y disfruta de nuestra página web,<br>
        WordWaves</p>
		<a class="button" href="127.0.0.1:8000">Visita WordWaves</a>
	</div>
</body>
</html>