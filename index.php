<?php
	$port = $_SERVER['SERVER_PORT'];
	if($port == 80){$protocolo = "http://";}
	if($port == 443){$protocolo = "https://";}
	$url = $protocolo . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
?>

<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>Utilidades</title>
		<!-- Bootstrap core CSS -->

		<?php 
		$path = $_SERVER['DOCUMENT_ROOT'];
		$path .= "/utilidades/raw/bootstrap";
		include_once($path);
		?>



		<link href="<?=$url?>css/bootstrap.min.css?version=4.5.3" rel="stylesheet">
		<!-- ??? pirate fontawesome.com -->
		<link rel="stylesheet" href="<?=$url?>css/all.min.css?version=5.15.1">
		<!-- Custom styles for this template -->
		<link href="css/style.css" rel="stylesheet">
		<!-- Favicon for this template -->
	</head>
<body>
<!-- Container -->
<div class="container-fluid">
	<div class="row m-3">
		<div class="col-md">
			<div class="card"> 
				<div class="card-header"><h3 class="">Bootstrap <i class="fab fa-bootstrap"></i></h3></div>
					<div class="card-body">
					<h4>Version 4.5.3</h4>
						<textarea class="" name="" id="" rows="5"><link href="<?=$url?>css/bootstrap.min.css?version=4.5.3" rel="stylesheet"> <script src="js/bootstrap.min.js"></script></textarea>
					</div>
				<div class="card-footer"><a href='https://getbootstrap.com' target="_blank">getbootstrap.com</a> Update: 17/11/2020</div>
			</div>
		</div>
		<div class="col-md">
			<div class="card"> 
				<div class="card-header"><h3 class="">Fontawesome <i class="fab fa-font-awesome-flag"></i></h3></div>
					<div class="card-body">
					<h4>Version 5.15.1</h4>
						<textarea class="" name="" id="" rows="5"><link rel="stylesheet" href="<?=$url?>css/all.min.css?version=5.15.1"></textarea>
					</div>
				<div class="card-footer"><a href='https://github.com/ttungbmt/fontawesome-pro' target="_blank">fontawesome-pro</a> Update: 17/11/2020</div>
			</div>
		</div>
		<div class="col-md">
			<div class="card"> 
				<div class="card-header"><h3 class="">JQuery <i class="fab fa-js-square"></i></h3></div>
					<div class="card-body">
					<h4>Version 3.5.1</h4>
						<textarea class="" name="" id="" rows="5"><script src="<?=$url?>js/jquery-3.5.1.slim.min.js?version=3.5.1"></script></textarea>
					</div>
				<div class="card-footer"><a href='https://code.jquery.com/' target="_blank">code.jquery.com/</a> Update: 23/06/2020</div>
			</div>
		</div>

	</div>              
	<div class="row m-3">
		<div class="col-md">
			<div class="card"> 
				<div class="card-header"><h3 class="">Popper.js <i class="fal fa-popcorn"></i></h3></div>
					<div class="card-body">
					<h4>Version 2.4.2</h4>
						<textarea class="" name="" id="" rows="5"><script src="<?=$url?>js/popper.min.js?version=2.5.4"></script></textarea>
					</div>
				<div class="card-footer"><a href='https://popper.js.org/' target="_blank">popper.js.org</a> Update: 17/11/2020</div>
			</div>
		</div>
		<div class="col-md">
			<div class="card"> 
				<div class="card-header"><h3 class="">ChartJS <i class="fal fa-chart-area"></i></h3></div>
					<div class="card-body">
					<h4>Version 2.9.3</h4>
						<textarea class="" name="" id="" rows="5"><script src="<?=$url?>js/chart.min.js?version=2.9.3"></script></textarea>
					</div>
				<div class="card-footer"><a href='https://www.chartjs.org' target="_blank">www.chartjs.org</a> Update: 17/11/2020</div>
			</div>
		</div>
		<div class="col-md">
			<div class="card"> 
				<div class="card-header"><h3 class="">Repositorio Utilidades <i class="fab fa-github"></i></h3></div>
					<div class="card-body">
					<h4>Version 17/11/2020</h4>
						<textarea class="" name="" id="" rows="5">https://github.com/juanmaioli/utilidades</textarea>
					</div>
				<div class="card-footer"><a href='https://github.com/juanmaioli/utilidades' target="_blank">github.com</a> Update: 17/11/2020</div>
			</div>
		</div>
	</div>
</div> 
<!-- /Container -->
<script src="<?=$url?>js/jquery-3.5.1.slim.min.js?version=3.5.1"></script>
<script src="<?=$url?>js/popper.min.js?version=2.5.4"></script>
<script src="<?=$url?>js/bootstrap.min.js?version=4.5.3"></script>
<script src="<?=$url?>js/chart.min.js?version=2.9.4"></script>
</body>

</html>
