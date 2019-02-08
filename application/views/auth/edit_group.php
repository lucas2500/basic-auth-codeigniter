<!DOCTYPE html>
<html>
<head>
	<title>Editar grupo</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
</head>
<body>

	<div class="card">
		<div class="card-header"><h1>Editar grupo</h1></div>
		<div class="container-fluid">
			<p>Por favor preencha as informações do grupo abaixo.</p>

			<div id="infoMessage"><?php echo $message;?></div>

			<?php echo form_open(current_url());?>

			<p>
				<label for="nomeGrupo">Nome do grupo:</label>
				<?php echo form_input($group_name, FALSE, 'class="form-control"');?>
			</p>

			<p>
				<label for="Descrocap">Descrição do grupo:</label>
				<?php echo form_input($group_description, FALSE, 'class="form-control"');?>
			</p>

			<p><?php echo form_submit('submit', 'Finalizar alterações', 'class="btn btn-success"');?></p>
		</div>
	</div>

	<?php echo form_close();?>

</body>
</html>