<!doctype html>
<html>

<head>
	<title>Sistemas mjailton</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?php echo ASSETS ?>css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo ASSETS ?>css/auxiliar.css">
	<link rel="stylesheet" type="text/css" href="<?php echo ASSETS ?>css/grade.css">
	<link rel="stylesheet" type="text/css" href="<?php echo ASSETS ?>css/m-style.css">

	<script type="text/javascript" src="<?php echo ASSETS ?>js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="<?php echo ASSETS ?>js/js.js"></script>

</head>

<body>
	<!--Cabeçalho-->
	<?php include_once("cabecalho.php") ?>


	<div class="site">

		<!--Barra Lateral-->
		<?php include_once("menu_lateral.php") ?>

		<!--Conteudo Dinamico-->
		<?php $this->load($view, $viewData); ?>

	</div>

</body>

</html>