<html>
<head>
	<meta charset="UTF8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<title>Primeira aula de bootstrap</title>
	<link rel="stylesheet" href="bootstrap/bootstrap.min.css"/>
	<script type="text/javascript" src="bootstrap/jquery-3.6.0.min.js"></script>
	<script type="text/javascript" src="bootstrap/bootstrap.min.js"></script>
</head>
<body>
	<p>
<div class="container">
	<h1>Meu primeiro site em bootstrap</h1>
	<p>GRID:</p>
	<div class="row">
		<div class="col-sm-4" style="text-align:center;background-color:red">A</div>
		<div class="col-sm-4" style="text-align:center;background-color:green">B</div>
		<div class="col-sm-4" style="text-align:center;background-color:blue">C</div>
	<hr/>
	<P>ESTILO DE TEXTO</P>
	<p>Exemplo com <mark>a tag mark</mark> no <abbr title="Um framework css">bootstrap</abbr></p>
    <p>Para salvar aperte <kbd>ctrl+s</kbd></p>
    <table class="table table-hover">
    	<thead>
    	<tr>
    		<th>Nome</th>
    		<th>Endereço</th>
    		<th>E-mail</th>
    	</tr>
    </thead>
    	<tr>
    		<td>Augusto junior carvalho</td>
    		<td>rua x-25 Jardim olímpico</td>
    		<td>augustojuniorcarvalho@gmail.com</td>
    	</tr>
    	<tr>
    		<td>Augusto junior carvalho</td>
    		<td>rua x-25 Jardim olímpico</td>
    		<td>augustojuniorcarvalho@gmail.com</td>
    	</tr>
    	<tr>
    		<td>Augusto junior carvalho</td>
    		<td>rua x-25 Jardim olímpico</td>
    		<td>augustojuniorcarvalho@gmail.com</td>
    	</tr>
    	<tr>
    		<td>Augusto junior carvalho</td>
    		<td>rua x-25 Jardim olímpico</td>
    		<td>augustojuniorcarvalho@gmail.com</td>
    	</tr>
    </table>
	</div>
	<button type="button" class="btn btn-outline-primary">Primary</button>
    <button type="button" class="btn btn-outline-secondary">Secondary</button>
    <hr>
    Grupo de botões:
    <div class="btn-group">
        <button class="btn btn-primary">Apple</button>
        <button class="btn btn-primary">Samsung</button>
        <button class="btn btn-primary">Apple</button>
    </div>
    <div class="alert alert-warning">
        <h1>O amor é lindo</h1>
    </div>
    <?php $n=10; ?>
    <a href="sdf.php" class="btn btn-primary">Mensagem<span class="badge"><?php echo $n; ?></span></a>
    </div>
</body>
</html>