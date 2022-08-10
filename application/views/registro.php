<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>REGISTRO</title>
</head>
<body>
	<H1>REGISTRO</H1>
	<ul>
	<?php foreach ($menu as $item): ?>
		<li><a href="<?= $item['url']; ?>"><?= $item['title']; ?></a></li>
	<?php endforeach; ?>
	</ul>

	<?php echo validation_errors(); ?>


	<?php  
		echo form_open('registro/create', array('method' => 'POST'));
			echo form_label('Nombre de Usuario ');
			echo form_input('username');

			echo '</br>';
			echo '</br>';

			echo form_label('Correo Electronico ');
			echo form_input(array('type' => 'email', 'name' => 'email'));

			echo '</br>';
			echo '</br>';

			echo form_label('Password ');
			echo form_password('password');

			echo '</br>';
			echo '</br>';

			echo form_label('Confirmar Password ');
			echo form_password('password_confirm');

			echo '</br>';
			echo '</br>';

			echo form_submit('submit','Crear usuario');

		echo form_close();
	?>

	<!-- Mensaje de Error o Confirmacion -->
	<?= isset($msg) ? $msg : ''; ?>

</body>
</html>
