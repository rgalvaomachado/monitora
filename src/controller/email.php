<?php
require_once ('vendor/autoload.php');

use PHPMailer\PHPMailer\PHPMailer;
use Dompdf\Dompdf;

class Email {
    function envioEmail($html){
        $email = 'monitora@hubis.com.br';
        $senha = '3Iua*Z8d6yNcH&*R';

        // $path = '../public/files';
        // $file = $path.'/'.uniqid().'.pdf';
        // $dompdf = new Dompdf();
        // $dompdf->loadHtml($html);
        // $dompdf->setPaper('A4');
        // $dompdf->render();
        // file_put_contents($file, $dompdf->output());
        
        $mail = new PHPMailer;
        $mail->isSMTP();
        $mail->Host = 'mail.hubis.com.br';
        $mail->SMTPAuth = true;
        $mail->Username = $email;
        $mail->Password = $senha;
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;
        $mail->From = $email;
        $mail->FromName = 'Monitora Hubis';
        $mail->addAddress('rgalvaomachado@gmail.com','rgalvaomachado@gmail.com');
        $mail->Subject = 'Alerta';
        $mail->IsHTML(true);
        $mail->Body = "Internet Off";
        // $mail->AddAttachment($file);
        
        if($mail->Send()){
            // unlink($file);
            return json_encode([
                "access" => true,
                "message" => "Email enviado com sucesso"
            ]);
        } else {
            // unlink($file);
            return json_encode([
                "access" => false,
                "message" => $mail->ErrorInfo
            ]);
        }
    }
}