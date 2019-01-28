<!DOCTYPE html>
<html>
<head>
  <title>Entrar</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
</head>
<body>

  <div class="container mt-2">

    <br />

    <p><?php echo lang('login_subheading');?></p>

    <div id="infoMessage"><?php echo $message;?></div>

    <div class="card">

      <div class="card-body bg-primary">

        <div class="form-group">

          <?php echo form_open("auth/login");?>

          <p>
            <label for="email">Email:</label>
            <?php echo form_input($identity, FALSE, 'class="form-control"');?>
          </p>

          <p>
            <label for="email">Senha:</label>
            <?php echo form_input($password, FALSE, 'class="form-control"');?>
          </p>

          <p>
            <label for="email">Mantenha-me conectado:</label>
            <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
          </p>


          <p><?php echo form_submit('submit', 'Entrar', 'class="btn btn-success"');?></p>

          <?php echo form_close();?>

        </div>

      </div>

    </div>

    <p class="mt-2"><a href="forgot_password">Esqueceu sua senha?</a></p>

  </div>

</body>
</html>