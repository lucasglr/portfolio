<?php $pg="proyecto";?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>proyecto</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,600,700,800,900&display=swap">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/estilos.css">

</head>

<body>
    <div class="container">
        <div class="row">
            <?php include_once("menu.php");?>
        </div>
    </div>
    <section class="proyecto">
        <div class="container">
            <div class="row mt-sm-5 mt-4">
                <div class="col-12 ">
                    <h1>Mis Proyectos </h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12  my-3">
                    <h2>Estos son algunos de los trabajos que he realizado:</h2>
                </div>
            </div>
            <div class="row my-2">
                <div class="col-12 col-sm-6 block my-2 my-sm-0">
                    <div class="bg-white">
                        <div class="row">
                            <div class="col-12">
                                <img src="imagenes/ambcliente.png" alt="AMB Ventas" class="img-fluid">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 ">
                                <h3>ABM Clientes</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 ">
                                <h4>Alta, Baja, modificación de un registro de clientes empleando:. Realizado en HTML, CSS, PHP, Bootstrap y Json.</h4>
                            </div>
                        </div>
                        <div class="row px-3 py-3">
                            <div class="col-6 ">
                                <a href="sistema/ABMClientes/" class="btn">Ver online</a>
                            </div>
                            <div class="col-6 text-right">
                                <a href="https://github.com/lucasglr/AMBCliente">Código fuente</a>
                            </div>
                        </div>
        
                    </div>
                </div>
                <div class="col-12 col-sm-6 block my-2 my-sm-0">
                    <div class="bg-white">
                        <div class="row">
                            <div class="col-12">
                                <img src="imagenes/ambventas.png" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 ">
                                <h3>Sistema de Gestión de ventas</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 ">
                                <h4>Sistema de gestión de clientes, productos y ventas. Realizado en HTML, CSS, PHP, MVC, Bootstrap, Js, Ajax, jQuery y MySQL de base de datos.</h4>
                            </div>
                        </div>
                        <div class="row px-3 py-3">
                            <div class="col-6 ">
                                <a href="" class="btn">Ver online</a>
                            </div>
                            <div class="col-6 text-right">
                                <a href="">Código fuente</a>
                            </div>
                        </div>
        
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6 block my-2 my-sm-4">
                    <div class="bg-white">
                        <div class="row">
                            <div class="col-12">
                                <img src="imagenes/img1.png" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 ">
                                <h3>ABM Clientes</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 ">
                                <h4>Alta, Baja, modificación de un registro de clientes empleando:. Realizado en HTML, CSS, PHP, Bootstrap y Json.</h4>
                            </div>
                        </div>
                        <div class="row px-3 py-3">
                            <div class="col-6 ">
                                <a href="" class="btn">Ver online</a>
                            </div>
                            <div class="col-6 text-right">
                                <a href="">Código fuente</a>
                            </div>
                        </div>
        
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <?php include_once("footer.php"); ?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
</body>

</html>