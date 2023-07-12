<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>..::Bienvenidos al sistema de Restaurantes::..</title>
	<link rel="stylesheet" type="text/css" href="<?php echo URL;?>public_html/css/bootstrap.min.css">
</head>
<body class="bg-secondary" >
	<div class="container py-4">
		<div class="row">
			<div class="col-md-6 mx-auto">
				<div class="card">
					<div class="card-header bg-dark text-white">
						<h2 class="text-center" >login</h2>
					</div>
					<!--inicio de form-->
					<div class="card-body">
						<form id="loginform" action="guardar.php" >
							<div class="form-label-group mb-4">
								<input type="text" class="form-control" id="user" name="user" placeholder="usuario">
							</div>
							<div class="form-label-group mb-4">
								<input type="password" class="form-control" id="pass" name="pass" placeholder="password">
							</div>
							<div class="alert alert-danger d-none mb-4" role="alert" id="mensaje">
							</div>
							<button class="btn btn-primary mb-4 btn-block" type="submit">Login</button>
							<p class="text-muted text-center">
								CRISTIAN&copy:2023
							</p>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
<script type="text/javascript" src="<?php echo URL;?>public_html/js/login.js"></script>
<script type="text/javascript" src="<?php echo URL;?>public_html/js/api.js"></script>
</html>