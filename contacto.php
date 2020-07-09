<?php $pg="contacto";?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contacto</title>
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
    <section id="contacto">
        <div class="container">
            <div class="row">
                <div class="col-12 my-5 ">
                    <h1>¡Trabajemos juntos! </h1>
                </div>
            </div>
            <div class="row mb-5 ">
                <div class="col-sm-5 col-12 ">
                    <h2>Para más detalles sobre mi
                        trabajo podés ver mi <u>Linkedin</u>,
                        descargar mi <u>CV</u> o mandarme
                        un <u>mensaje</u>.
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-10">
                    <form action="" method="POST">
                        <div class="row">
                            <div class="my-2 col-sm-6 col-12 mx-sm-0 ">
                                <input type="text" class="form-control" placeholder="NOMBRE">
                            </div>
                            <div class="my-2 col-sm-6 col-12 mx-sm-0 ">
                                <input type="email" class="form-control" placeholder="CORREO">
                            </div>
                        </div>
                        <div class="row">
                            <div class="my-2 col-12 mx-sm-0 ">
                                <input type="text" class="form-control" placeholder="ASUNTO">
                            </div>
                        </div>
                        <div class="row ">
                            <div class="my-2 col-12 mx-sm-0">

                                <textarea class="form-control" placeholder="MENSAJE" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="my-2 mx-auto">
                                <button type="submit" class="btn ">ENVIAR</button>
                            </div>
                        </div>
                    </form>
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