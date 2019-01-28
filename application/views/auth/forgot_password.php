<!DOCTYPE html>
<html>
<head>
	<title>Recuperar senha</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
</head>
<body>

	<div class="container">

		<h1><?php echo lang('forgot_password_heading');?></h1>
		<p><?php echo sprintf(lang('forgot_password_subheading'), $identity_label);?></p>

		<div id="infoMessage"><?php echo $message;?></div>

		<div class="card bg-primary">

			<div class="card-body"></div>

			<div class="container-fluid">

				<div class="form-group">

					<?php echo form_open("auth/forgot_password");?>

					<p>
						<label for="identity"><?php echo (($type=='email') ? sprintf(lang('forgot_password_email_label'), $identity_label) : sprintf(lang('forgot_password_identity_label')));?></label> <br />
						<?php echo form_input($identity, FALSE, 'class="form-control"');?>
					</p>

					<p><?php echo form_submit('submit', 'Enviar', 'class="btn btn-success"');?></p>

				</div>

			</div>

		</div>

	</div>


</body>
</html>