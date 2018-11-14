<?php
              $destinatario = "pablo.ingino@gmail.com";
              $asunto = "Este mensaje es de prueba";
              $cuerpo = '
                          <html>
                          <head>
                             <title>Prueba de correo</title>
                          </head>
                          <body>
                          <h1>Hola amigos!</h1>
                          <p>
                          <b>Esto es una prueba
                          </p>
                          </body>
                          </html>
                          ';

              //para el envío en formato HTML
              $headers = "MIME-Version: 1.0\r\n";
              $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

              //dirección del remitente
              $headers .= "From: Pablo Ariel Ingino <pablo.ingino@gmail.com>\r\n";

              //dirección de respuesta, si queremos que sea distinta que la del remitente
              $headers .= "Reply-To: pablo.ingino@gmail.com\r\n";

              //ruta del mensaje desde origen a destino
              $headers .= "Return-path: pablo.ingino@gmail.com\r\n";

              //direcciones que recibián copia
              $headers .= "Cc: pablo.ingino@gmail.com\r\n";

              //direcciones que recibirán copia oculta
              $headers .= "Bcc:pablo.ingino@gmail.com\r\n";

              mail($destinatario,$asunto,$cuerpo,$headers)
?>
