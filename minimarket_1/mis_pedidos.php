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
  <link href="assets/librerias/dataTables/datatables.min.css" type="text/css" rel="stylesheet" media="screen" />
</head>

<body>
  <div class="preloader loader" style="display: block; background:#f2f2f2;"> <img src="image/loader.gif" alt="#" /></div>
  <?php include_once 'include/header.php'; ?>
  <?php include_once 'include/nav.php'; ?>
  <div class="container">
    <ul class="breadcrumb">
      <li><a href="index"><i class="fa fa-home"></i></a></li>
      <li><a href="#">Mi cuenta</a></li>
      <li><a href="mis_pedidos">Pedidos</a></li>
    </ul>
    <div class="row">
      <?php include_once 'include/nav_cuenta.php'; ?>
      <div id="content" class="col-sm-9">
        <!-- <h1>Historial y detalles de mis pedidos</h1> -->
        <!-- <p>Ingrese la dirección de correo electrónico asociada con su cuenta. Haga click en enviar para recibir su contraseña por correo electrónico.</p> -->
        <div class="panel panel-default">
          <div class="panel-heading" style="text-transform: uppercase;"><b>Historial y detalles de mis pedidos</b></div>
        </div>
        <table id="tbl_pedido" class="table table-striped table-bordered" style="width:100%">
          <thead class="panel-heading">
            <tr style="text-transform: uppercase; text-align: center;">
              <th>Pedido N°</th>
              <th>Fecha registro</th>
              <th>Total</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <?php for ($i = 0; $i < 11; $i++) : ?>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td><a href="#">Ver detalles</a></td>
              </tr>
            <?php endfor; ?>
          </tbody>
        </table>
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
  <!-- libreria -->
  <script src="assets/librerias/dataTables/datatables.min.js"></script>
  <script src="assets/js/funcion_pedido.js"></script>
</body>

</html>