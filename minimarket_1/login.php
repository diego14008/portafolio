<!DOCTYPE html>
<html lang="en">

<head>
  <title>Fresh Food</title>
  <meta http-equiv="content-type" content="text/html;charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="e-commerce site well design with responsive view." />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" media="screen" />
  <link href="assets/fonts/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <link href="assets/css/fonts.css" rel="stylesheet">
  <link href="assets/css/stylesheet.css" rel="stylesheet">
  <link href="assets/css/responsive.css" rel="stylesheet">
  <link href="assets/css/owl.carousel.css" type="text/css" rel="stylesheet" media="screen" />
  <link href="assets/css/owl.transitions.css" type="text/css" rel="stylesheet" media="screen" />
</head>

<body class="account-login col-2">
  <div class="preloader loader" style="display: block; background:#f2f2f2;"> <img src="image/loader.gif" alt="#" /></div>
  <?php include_once 'include/header.php'; ?>
  <?php include_once 'include/nav.php'; ?>
  <div class="container">
    <ul class="breadcrumb">
      <li><a href="index"><i class="fa fa-home"></i></a></li>
      <li><a href="#">Mi cuenta</a></li>
      <li><a href="login">Login</a></li>
    </ul>
    <div class="row">
      <?php include_once'include/nav_cuenta.php'; ?>
      <div class="col-sm-9" id="content">
        <div class="row">
          <div class="col-sm-6">
            <div class="well">
              <h2>¿No Tienes una Cuenta?</h2>
              <br>
              <!-- <p><strong>Register Account</strong></p> -->
              <!-- <p>By creating an account you will be able to shop faster, be up to date on an order's status, and keep track of the orders you have previously made.</p> -->
              <a class="btn btn-primary" href="registrarse">Registrarme ahora</a>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="well">
              <h2>Ingresa a tu cuenta</h2>
              <!-- <p><strong>I am a returning customer</strong></p> -->
              <form id="form_login" enctype="multipart/form-data" method="post" action="login.html">
                <div class="form-group">
                  <label for="input-email" class="control-label">Correo</label>
                  <input type="text" class="form-control" id="input-email" placeholder="E-Mail" required name="email">
                </div>
                <div class="form-group">
                  <label for="input-password" class="control-label">Contraseña</label>
                  <input type="password" class="form-control" id="input-password" placeholder="Su contraseña" required name="password">
                  <br>
                  ¿Olvidaste tu contraseña? <a href="forget_password">Click Aquí</a></div>
                <input type="submit" class="btn btn-primary" value="Login">
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include_once 'include/footer.php'; ?>
  
  <script src="assets/js/jquery-2.1.1.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/jstree.min.js"></script>
  <script src="assets/js/template.js"></script>
  <script src="assets/js/common.js"></script>
  <script src="assets/js/global.js"></script>
  <script src="assets/js/owl.carousel.min.js"></script>
  <script src="assets/js/parally.js"></script>
</body>

</html>