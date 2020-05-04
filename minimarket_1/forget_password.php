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

<body>
  <div class="preloader loader" style="display: block; background:#f2f2f2;"> <img src="image/loader.gif" alt="#" /></div>
  <?php include_once 'include/header.php'; ?>
  <?php include_once 'include/nav.php'; ?>
  <div class="container">
    <ul class="breadcrumb">
      <li><a href="index"><i class="fa fa-home"></i></a></li>
      <li><a href="forget_password">Contraseña olvidada</a></li>
    </ul>
    <div class="row">
      <?php include_once 'include/nav_cuenta.php'; ?>
      <div id="content" class="col-sm-9">
        <h1>¿Olvidaste tu contraseña?</h1>
        <p>Ingrese la dirección de correo electrónico asociada con su cuenta. Haga click en enviar para recibir su contraseña por correo electrónico.</p>
        <form id="form_recuperar" action="forgotten" method="post" enctype="multipart/form-data" class="form-horizontal">
          <fieldset>
            <legend>Ingrese su correo</legend>
            <div class="form-group required">
              <label class="col-sm-2 control-label" for="input-email">Correo</label>
              <div class="col-sm-10">
                <input type="text" name="email" value="" placeholder="E-Mail" id="input-email" class="form-control" />
              </div>
            </div>
          </fieldset>
          <div class="buttons clearfix">
            <div class="pull-left"><a href="login" class="btn btn-default">Regresar</a></div>
            <div class="pull-right">
              <input type="submit" value="enviar" class="btn btn-primary" />
            </div>
          </div>
        </form>
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