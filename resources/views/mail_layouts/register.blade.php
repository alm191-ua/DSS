<!DOCTYPE html>
<html>
<head>
	<title>Registrado en WordWaves</title>
    <!-- <link rel="stylesheet" href="{{ asset('css/mail.css') }}"> -->
    <!-- No se si poner lo del css, porque al no poder comprobarlo prefiero no mezclar cosas-->
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
		<img src="{{asset ('images/logo.png')}}" alt="Logo de WordWaves">
        <h1>Hi {{ $name }},</h1>
        <h1 style="border-bottom: 2px solid #ADD8E6; padding-bottom: 2px;"></h1>

        <p>Thank you for registering with us.</p>
        <p>Thanks,<br>
        Word Waves :D</p>
		<a class="button" href="#">Visit our web</a>
	</div>
</body>
</html>







