<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
	<title>Organo Judicial | Login</title>
</head>
<body>

<ul>
	<?php foreach ($menu as $item): ?>
		<li><a href="<?= $item['url']; ?>"><?= $item['title']; ?></a></li>
	<?php endforeach; ?>
	</ul>

	
	<?= validation_errors(); ?>
		<div class="container">
			<div class="row justify-content-lg-center">
				<div class="col-lg-6">
					<div class="form-group">
						<br>
					<h1>LOGIN</h1>
					</div>
					<form id="frm_login" action="<?= base_url('login/validate') ?>" method="POST">
						<div class="form-group" id="email">
							<label for="exampleInputEmail1">Correo</label>
							<input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
							<small id="emailHelp" class="form-text text-muted">Ingrese su email.</small>
							<div class="valid-feedback d-block"> 
								El correo es vacio
							</div>
						</div>
						<div class="form-group" id="password">
							<label for="exampleInputPassword1">Password</label>
							<input type="password" name="password" class="form-control" id="exampleInputPassword1">
						</div>
						<div class="valid-feedback d-block"> 
								El correo es vacio
							</div>
						<button type="submit" class="btn btn-primary">Ingresar</button>
					</form>
				</div>

			</div>

		</div>
	
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
		<script src="<?= base_url('assets/js/auth/login.js'); ?>" type="text/javascript"></script>
</body>
</html>
