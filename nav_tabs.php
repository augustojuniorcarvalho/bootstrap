<html>
<head>
<meta charset="UTF8"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<title>Aula de bootstrap</title>
<link rel="stylesheet" href="bootstrap/bootstrap.min.css"/>
<script type="text/javascript" src="bootstrap/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="bootstrap/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	<ul class="nav nav-tabs">
		<li class="active"><a href="#home" data-toggle="tab">HOME</a></li>
		<li><a href="#empresa" data-toggle="tab">EMPRESA</a></li>
		<li><a href="#contato" data-toggle="tab">CONTATO</a></li>
	</ul>
	<div class="tab-content">
		<div id="home" class="tab-pane active in">
			Página Home
		</div>
		<div id="empresa" class="tab-pane">
			Página Empresa
		</div>
		<div id="contato" class="tab-pane">
			Página Contato
		</div>
	</div>
</div>
</body>
</html>