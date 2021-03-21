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
                <div class="col"><button class="btn btn-primary" data-bss-hover-animate="swing" type="button" style="color: rgb(0,0,0);background: rgb(255,255,255);">Ver promedio</button></div>
                <div class="col"><button class="btn btn-primary" data-bss-hover-animate="swing" type="button" style="background: rgb(255,255,255);color: rgb(0,0,0);">Ver mediana</button></div>
                <div class="col"><button class="btn btn-primary" data-bss-hover-animate="swing" type="button" style="color: rgb(0,0,0);background: rgb(255,255,255);">Ver matriz</button></div>
            </div>
        </div>
        <div class="container hero">
            <h1 class="text-center">Datos del estacionamiento</h1>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr class="text-center" style="background: var(--gray-dark);color: var(--light);">
                            <th>Column 1</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="text-center" style="background: var(--white);">
                            <td>Cell 1</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </header>
    <div class="modal fade" role="dialog" tabindex="-1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">La media de los datos es:</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <p></p>
                </div>
                <div class="modal-footer"><button class="btn btn-light" type="button" data-dismiss="modal">Cerrar</button><button class="btn btn-primary" type="button">Ok</button></div>
            </div>
        </div>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">La mediana de los datos es:</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <p></p>
                </div>
                <div class="modal-footer"><button class="btn btn-light" type="button" data-dismiss="modal">Cerrar</button><button class="btn btn-primary" type="button">Ok</button></div>
            </div>
        </div>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Los pagos del carro son:</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <p></p>
                </div>
                <div class="modal-footer"><button class="btn btn-light" type="button" data-dismiss="modal">Cerrar</button><button class="btn btn-primary" type="button">Ok</button></div>
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
