<?php
  require('assets/php/Consultas.php');
  $consultas = new Consultas();
  $datas = $consultas->GetData();
  $tot = $consultas->getDataTotal();
  $prom = $consultas->getDataAVG();
  $medi = $consultas->getDataMediana();
  $coche = $consultas->getDataCocheRep();
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>EstacionamientoPiquero</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Footer-Clean.css">
    <link rel="stylesheet" href="assets/css/Header-Blue.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <header class="header-blue">
        <nav class="navbar navbar-dark navbar-expand-md navigation-clean-search">
            <div class="container-fluid"><a class="navbar-brand" href="index.html">Estacionamiento SA</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="#">Administrador</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="row text-center">
                <div class="col"><button data-toggle="modal" data-target="#prom" class="btn btn-primary" data-bss-hover-animate="swing" type="button" style="color: rgb(0,0,0);background: rgb(255,255,255);" >Ver promedio</button></div>
                <div class="col"><button data-toggle="modal" data-target="#medi" class="btn btn-primary" data-bss-hover-animate="swing" type="button" style="background: rgb(255,255,255);color: rgb(0,0,0);">Ver mediana</button></div>
                <div class="col"><button data-toggle="modal" data-target="#casoespec" class="btn btn-primary" data-bss-hover-animate="swing" type="button" style="color: rgb(0,0,0);background: rgb(255,255,255);">Ver matriz</button></div>
            </div>
        </div>
        <div class="container hero">
            <h1 class="text-center">Datos del estacionamiento</h1>
            <div class="table-responsive">
                <table class="table" style="">
                    <thead>
                        <tr class="text-center" style="background: var(--gray-dark);color: var(--light);">
                            <th>CveReg</th>
                            <th>Cliente</th>
                            <th>Fecha Entrada</th>
                            <th>Fecha Salida</th>
                            <th>Placas</th>
                            <th>Dejo llave</th>
                            <th>Horas cobradas</th>
                            <th>#Noches</th>
                            <th>Perdio Ticket</th>
                            <th>Sincronizado</th>
                            <th>Pagado</th>
                            <th>IVA</th>
                            <th>Total Pagado</th>
                            <th>Cobrado Por</th>
                            <th>Fotos</th>
                        </tr>
                    </thead>
                    <tbody>
                        <div class="" style="width:500px; height:100px; overflow:auto;">
                          <?php foreach ($datas as $data) {?>
                          <tr class="text-center" style="background: var(--white);">
                              <td><?php echo $data['CveReg'];?></td>
                              <td><?php echo $data['Cliente'];?></td>
                              <td><?php echo $data['FechaEntrada'];?></td>
                              <td><?php echo $data['FechaSalida'];?></td>
                              <td><?php echo $data['Placas'];?></td>
                              <td><?php echo $data['DejoLlave'];?></td>
                              <td><?php echo $data['HorasCobradas'];?></td>
                              <td><?php echo $data['NumNoches'];?></td>
                              <td><?php echo $data['PerdioTicket'];?></td>
                              <td><?php echo $data['Sincronizado'];?></td>
                              <td><?php echo $data['Pagado'];?></td>
                              <td><?php echo $data['IVA'];?></td>
                              <td>$<?php echo $data['TotalPagado'];?></td>
                              <td><?php echo $data['CobradoPor'];?></td>
                              <td><?php echo $data['Fotos'];?></td>
                          </tr>
                          <?php } ?>
                        </div>
                    </tbody>
                </table>
            </div>
        </div>
    </header>
    <div id="prom" class="modal fade" role="dialog" tabindex="-1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">La media del Total Pagado es: </h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                  <?php foreach ($tot as $t): ?>
                    <p>Total del Total Pagado: $<?php echo $t['TOTAL']; ?></p>
                  <?php endforeach; ?>
                    <?php foreach ($prom as $p): ?>
                      <p>Promedio: $<?php echo $p['PROMEDIO']; ?></p>
                    <?php endforeach; ?>
                </div>
                <div class="modal-footer"><button class="btn btn-light" type="button" data-dismiss="modal">Cerrar</button></div>
            </div>
        </div>
    </div>
    <div id="medi" class="modal fade" role="dialog" tabindex="-1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">La mediana del Total Pagado es:</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                  <?php foreach ($tot as $t): ?>
                    <p>Total del Total Pagado: $<?php echo $t['TOTAL']; ?></p>
                  <?php endforeach; ?>
                  <?php foreach ($medi as $m): ?>
                    <p>Mediana: $<?php echo $m['MEDIANA']; ?></p>
                  <?php endforeach; ?>
                </div>
                <div class="modal-footer"><button class="btn btn-light" type="button" data-dismiss="modal">Cerrar</button></div>
            </div>
        </div>
    </div>
    <div id="casoespec" class="modal fade" role="dialog" tabindex="-1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Los pagos del carro son:</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                  <p>El coche con placas JJJ4657 tiene los siguientes pagos: </p>
                  <?php
                  $sum = 0;
                  $cont = 0;
                  foreach ($coche as $c): ?>
                    <p>$<?php echo $c['TotalPagado'];
                        $sum = $sum + $c['TotalPagado'];
                        $cont = $cont + 1;
                    ?></p>
                  <?php endforeach;
                  $prom = $sum/$cont;
                  ?>
                  <p>Siendo su promedio de pago: $<?php echo $prom; ?></p>
                </div>
                <div class="modal-footer"><button class="btn btn-light" type="button" data-dismiss="modal">Cerrar</button></div>
            </div>
        </div>
    </div>
    <footer class="footer-clean">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-3 col-xl-12 offset-xl-0 text-center item social"><a href="https://www.facebook.com/ECR2399"><i class="icon ion-social-facebook"></i></a><a href="https://twitter.com/R23Ec"><i class="icon ion-social-twitter"></i></a><a href="https://www.instagram.com/eliascamacho.css/"><i class="icon ion-social-instagram"></i></a>
                    <p class="copyright">Elias Camacho © 2021</p>
                </div>
            </div>
        </div>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
</body>

</html>
