<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
</head>
<body>

	<!-- <p><?php echo lang('index_subheading');?></p> -->

	<div id="infoMessage"><?php echo $message;?></div>
	<div class="card">
		<div class="card-header">
			<h3 class="mt-4">Usuários cadastrados</h3>
		</div>

		<div class="card-body bg-light">
			<div class="container-fluid">
				<table class="table table-bordered text-center">
					<tr>
						<th>Nome</th>
						<th>Sobrenome</th>
						<th>Email</th>
						<th>Grupo(s)</th>
						<th>Status</th>
						<th>Ação</th>
					</tr>
					<?php foreach ($users as $user):?>
						<tr>
							<td><?php echo htmlspecialchars($user->first_name,ENT_QUOTES,'UTF-8');?></td>
							<td><?php echo htmlspecialchars($user->last_name,ENT_QUOTES,'UTF-8');?></td>
							<td><?php echo htmlspecialchars($user->email,ENT_QUOTES,'UTF-8');?></td>
							<td>
								<?php foreach ($user->groups as $group):?>
									<?php echo anchor("auth/edit_group/".$group->id, htmlspecialchars($group->name,ENT_QUOTES,'UTF-8')) ;?><br />
								<?php endforeach?>
							</td>
							<td><?php echo ($user->active) ? anchor("auth/deactivate/".$user->id, lang('index_active_link')) : anchor("auth/activate/". $user->id, lang('index_inactive_link'));?></td>
							<td><?php echo anchor("auth/edit_user/".$user->id, 'Editar', 'class="btn btn-primary"') ;?></td>
						</tr>
					<?php endforeach;?>
				</table>

				<p><?php echo anchor('auth/create_user',  'Criar novo usuário', 'class="btn btn-success"')?> | <?php echo anchor('auth/create_group', 'Criar novo grupo', 'class="btn btn-info"')?></p>
			</div>
		</div>

	</div>

</body>
</html>