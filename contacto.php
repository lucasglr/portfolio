<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$pg = "contacto";

include_once "PHPMailer/src/SMTP.php";
include_once "PHPMailer/src/PHPMailer.php";
$msg = "";

function guardarCorreo($correo)
{
    $archivo = fopen("mails.txt", "a+");
    fwrite($archivo, $correo . ";\n\r");
    fclose($archivo);
}

if ($_POST) { /* es postback */

    $nombre = $_POST["txtNombre"];
    $correo = $_POST["txtCorreo"];
    $asunto = $_POST["txtAsunto"];
    $mensaje = $_POST["txtMensaje"];

    if ($nombre != "" && $correo != "") {
        guardarCorreo($correo);

        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPAuth = true;
        $mail->Host = "info@lopezlucas.com.ar"; // SMTP a utilizar. Por ej. mail.dominio.com.ar
        $mail->Username = "info@lopezlucas.com.ar"; // Correo completo a utilizar
        $mail->Password = "l36629320";
        $mail->Port = 25;
        $mail->From = "info@lopezlucas.com.ar"; // Desde donde enviamos (Para mostrar)
        $mail->FromName = "Lucas Gaston Lopez Requena ";
        $mail->IsHTML(true);
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true,
            ),
        );

        //Destinatario
        $mail->addAddress($correo);
        //$mail->addBCC("lucas-glr@hotmail.com");
        $mail->Subject = "Contacto página web";
        $mail->Body = "Recibimos tu consulta, <br>te responderemos a la brevedad.";
        //  if(!$mail->Send()){
        //     $msg = "Error al enviar el correo, intente nuevamente mas tarde.";
        //   }
        $mail->ClearAllRecipients(); //Borra los destinatarios

        //Nosotros
        $mail->addAddress("lucas-glr@hotmail.com");
        $mail->Subject = "Recibiste un mensaje desde tu página web";
        $mail->Body = "Te escribió $nombre cuyo correo es $correo, con el asunto $asunto y el siguiente mensaje:<br><br>$mensaje";

        if ($mail->Send()) {
          
            header('Location: confirmacion-envio.php');
        } else {
            $msg = "Error al enviar el correo, intente nuevamente mas tarde.";
        }
    } else {
        $msg = "Complete todos los campos";
    }

}



?>
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
        <?php if (isset($msg) && $msg != ""): ?>
        <div class="row">
            <div class="col-12">
                <div class="alert alert-danger" role="alert">
                <?php echo $msg; ?>
                </div>
            </div>
        </div>
        <?php endif;?>
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
                                <input type="text" class="form-control" name="txtNombre" placeholder="NOMBRE">
                            </div>
                            <div class="my-2 col-sm-6 col-12 mx-sm-0 ">
                                <input type="email" class="form-control" name="txtCorreo" placeholder="CORREO">
                            </div>
                        </div>
                        <div class="row">
                            <div class="my-2 col-12 mx-sm-0 ">
                                <input type="text" class="form-control" name="txtAsunto" placeholder="ASUNTO">
                            </div>
                        </div>
                        <div class="row ">
                            <div class="my-2 col-12 mx-sm-0">

                                <textarea class="form-control" placeholder="MENSAJE" name="txtMensaje" cols="30" rows="10"></textarea>
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