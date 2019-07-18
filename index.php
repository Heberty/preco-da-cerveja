<!DOCTYPE html>
<html>
<head>
	<title>Calculo de preço de cerveja</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	
<?php 

function precoCerveja() {
	$nome = isset($_GET['nome']) ? $_GET['nome'] : '';
	$preco = isset($_GET['preco']) ? $_GET['preco'] : '';
	$ml = isset($_GET['ml']) ? $_GET['ml'] : '';
	$quantidade = isset($_GET['quantidade']) ? $_GET['quantidade'] : '';

	echo 'A cerveja mais barata é:' . $nome; 

	echo ($preco / $ml);
}


?>
<div class="container">
	<form action="" class="row">
		<div class="form-group col-12 col-md-6">
			<input class="form-control" type="text" name="nome" placeholder="Nome da cerveja">
		</div>
		<div class="form-group col-12 col-md-8">
			<input class="form-control money" type="text" name="preco" placeholder="Preço da cerveja">
		</div>
		<div class="form-group col-12 col-md-3">
			<input class="form-control" type="text" name="ml" placeholder="Quantidade em ml">
		</div>
		<div class="form-group col-12 col-md-3">
			<input class="form-control" type="text" name="quantidade" placeholder="Quantidade em unidade">
		</div>
		<div class="forn-group col-12 col-md-3">
			<button class="btn btn-success">Calcular</button>
		</div>
	</form>
</div>
<div class="container">
	<div class="row">
		<div class="col-12">
			<? precoCerveja() ?>
		</div>
	</div>
</div>

<footer>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
	<script>
		$('.money').mask('000.000.000.000.000,00', {reverse: true});
	</script>
</footer>
</body>
</html>