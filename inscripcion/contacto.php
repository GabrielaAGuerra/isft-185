<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $dni = $_POST['dni'];
    $fecha = $_POST['dd/mm/aaaa'];
    $nacimiento = $_POST['nacimiento'];
    $domicilio = $_POST['domicilio'];
    $ciudad = $_POST['ciudad'];
    $partido = $_POST['partido'];
    $carerra = $_POST['carrera'];
    $titulo = $_POST['titulo'];
  
     // Documentos adjuntos
     $file1 = $_FILES['file1']['tmp_name'];
     $file2 = $_FILES['file2']['tmp_name'];
     $file3 = $_FILES['file3']['tmp_name'];
     $file4 = $_FILES['file4']['tmp_name'];
     $file5 = $_FILES['file5']['tmp_name'];
 
     $content1 = file_get_contents($file1);
     $encoded_content1 = base64_encode($content1);
 
     $content2 = file_get_contents($file2);
     $encoded_content2 = base64_encode($content2);
 
     $content3 = file_get_contents($file3);
     $encoded_content3 = base64_encode($content3);
 
     $content4 = file_get_contents($file4);
     $encoded_content4 = base64_encode($content4);
 
     $content5 = file_get_contents($file5);
     $encoded_content5 = base64_encode($content5);
 
     // ... (aquí van las variables que ya tienes)
 
     $from = 'From: contacotform@example.com';
     $to = 'correo@dominio.com'; /*correo de la institucion */
     $subject = 'Contacto desde el sitio web';
 
     $boundary = md5(uniqid(time()));
 
     $headers = "MIME-Version: 1.0\r\n";

    if (mail($to, $subject, $body, $from)) {
        echo '<script>alert("¡Mensaje enviado exitosamente!")</script>';
    } else {
        echo '<script>alert("¡Error al enviar el mensaje!")</script>';
    }
}
?>
