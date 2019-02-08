<!DOCTYPE html>
<html>
<head>
  <title>Criar novo usuário</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
</head>
</head>
<body>

  <div class="card">
    <div class="card-header">
      <h1 class="mt-2">Criação de usuário</h1>
    </div>
  </div>
  <div class="container-fluid">
    <p>Por favor preencha todos os campos abaixo.</p>

    <div id="infoMessage"><?php echo $message;?></div>

    <?php echo form_open("auth/create_user");?>

    <div class="form-group">
      <p>
        <label for="nome">Nome:</label>
        <?php echo form_input($first_name, FALSE, 'class="form-control"');?>
      </p>

      <p>
        <label for="sobrenome">Sobrenome:</label>
        <?php echo form_input($last_name, FALSE, 'class="form-control"');?>
      </p>
    </div>

    <?php
    if($identity_column!=='email') {
      echo '<p>';
      echo lang('create_user_identity_label', 'identity');
      echo '<br />';
      echo form_error('identity');
      echo form_input($identity);
      echo '</p>';
    }
    ?>

    <p>
     <label for="empresa">Empresa:</label>
     <?php echo form_input($company, FALSE, 'class="form-control"');?>
   </p>

   <p>
    <label for="email">Email:</label>
    <?php echo form_input($email, FALSE, 'class="form-control"');?>
  </p>

  <p>
    <label for="telefone">Telefone:</label>
    <?php echo form_input($phone, FALSE, 'class="form-control"');?>
  </p>

  <p>
    <label for="password">Password:</label>
    <?php echo form_input($password, FALSE, 'class="form-control"');?>
  </p>

  <p>
    <label for="confirmPassword">Confirmar senha:</label>
    <?php echo form_input($password_confirm, FALSE, 'class="form-control"');?>
  </p>

  <p><?php echo form_submit('submit', 'Criar usuário', 'class="btn btn-success"');?></p>

  <?php echo form_close();?>
</div>


</body>
</html>