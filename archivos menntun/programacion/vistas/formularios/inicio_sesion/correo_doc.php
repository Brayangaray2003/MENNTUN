<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
include("../../../conexion/conectar.php");

$correo_doc = $_POST['correo_doc'];
$obj = new conexion ();
$c = $obj->conectando();

$query = "select * from docente where correo_doc = '$correo_doc'";
$ejecutar = mysqli_query ($c, $query);

if(mysqli_fetch_array($ejecutar)){



//Load Composer's autoloader
            require 'phpmailer/PHPMailer.php';
            require 'phpmailer/Exception.php';
            require 'phpmailer/SMTP.php';

            //Create an instance; passing `true` enables exceptions
            $mail = new PHPMailer(true);


            try {
                //Server settings
                //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
                $mail->isSMTP();                                            //Send using SMTP
                $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                $mail->Username   = 'menntun0@gmail.com';                     //SMTP username
                $mail->Password   = 'xbygdrxwdqccbxqr';                               //SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                //Recipients
                $mail->setFrom('menntun0@gmail.com', 'Menntun');
                $mail->addAddress($correo_doc);     //Add a recipients //Optional name

                //Content
                $mail->isHTML(true);                                  //Set email format to HTML
                $mail->Subject = 'Cambio de contraseña';
                $mail->Body    = 'Espero que estes muy bien. En estos momentos, solo falta un paso para terminar el proceso de cambio de contraseña. <br><a href="http://localhost/menntun/vistas/formularios/inicio_sesion/formulario_can_doc_c.php"><input type="button" style=" color: blue; background: white; border-radius: 5px; border: solid blue 1px; " value="Click aqui"></a>';
                //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
                $mail->CharSet = 'UTF-8';
                $mail->send();
                echo "<script>alert('¡Felicidades! Se ha enviado un correo para el cambio de contraseña');window.location.href='login_docente.php'</script>";
            } catch (Exception $e) {
                echo "Error: {$mail->ErrorInfo}";
            }
}else{
    echo "<script>alert('Menntun no encontró el correo del docente');window.location.href='cambiar_contraseña_doc.php'</script>";
}