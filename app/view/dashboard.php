<!DOCTYPE html>
<html>

<head>
	<?php include_once "app/view/secciones/css.php"; ?>
</head>

<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-3 bg-dark">
				<section id="menu">
					<?php include_once "app/view/secciones/menu.php"; ?>
				</section>
				<!--fin del menu-->
			</div>
			<div class="col-md-9">
				<section id="encabezado">
					<?php include_once "app/view/secciones/encabezado.php"; ?>
				</section>
				<!--fin del encabezado-->
				<section id="contenido">
					<div class="card-group">
						<div class="card">
							<img src="<?php echo URL; ?>public_html/images/aliser.jpg" class="card-img-top" alt="...">
							<div class="card-body">
								<h5 class="card-title">Restaurante Estela</h5>
								<p class="card-text"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
									Dolorum cupiditate voluptatibus harum. Sapiente</p>
								<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
							</div>
						</div>
						<div class="card">
							<img src="<?php echo URL; ?>public_html/images/slider2.jpg" class="card-img-top" alt="...">
							<div class="card-body">
								<h5 class="card-title">Restaurante Sol y Mar</h5>
								<p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
									Dolorum cupiditate voluptatibus harum. Sapiente</p>
								<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
							</div>
						</div>
						<div class="card">
							<img src="<?php echo URL; ?>public_html/images/slider3.jpg" class="card-img-top" alt="...">
							<div class="card-body">
								<h5 class="card-title">Restaurante Luna</h5>
								<p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
									Dolorum cupiditate voluptatibus harum. Sapiente</p>
								<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
							</div>
						</div>
					</div>
					<!---->
					<div class="card-group mt-4">
						<div class="card">
							<img src="<?php echo URL; ?>public_html/images/slider2.jpg" class="card-img-top" alt="...">
							<div class="card-body">
								<h5 class="card-title">Restaurante Ester</h5>
								<p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
									Dolorum cupiditate voluptatibus harum. Sapiente</p>
								<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
							</div>
						</div>
						<div class="card">
							<img src="<?php echo URL; ?>public_html/images/aliser.jpg" class="card-img-top" alt="...">
							<div class="card-body">
								<h5 class="card-title">Restaurante Iris</h5>
								<p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
									Dolorum cupiditate voluptatibus harum. Sapiente.</p>
								<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
							</div>
						</div>
						<div class="card">
							<img src="<?php echo URL; ?>public_html/images/slider3.jpg" class="card-img-top" alt="...">
							<div class="card-body">
								<h5 class="card-title">Restaurante ResortSun</h5>
								<p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
									Dolorum cupiditate voluptatibus harum. Sapiente</p>
								<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
							</div>
						</div>
					</div>
				</section>
				<!--fin del contenido-->
				<section id="pie">
					<?php include_once "app/view/secciones/footer.php"; ?>
				</section>
			</div>
		</div>
	</div>
	<?php include_once "app/view/secciones/script.php"; ?>
</body>

</html>