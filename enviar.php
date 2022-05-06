<?php
//Variáveis

$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];
$data_envio = date('d/m/Y');
$hora_envio = date('H:i:s');

// Compo E-mail
  $arquivo = "
    <html>
      <table style='font-size:16px;'>
        <tr>
          <td><b style='color:deepskyblue;'>Nome:</b>$nome</td>
        </tr>
        <tr>
          <td><b style='color:deepskyblue;'>E-mail:</b>$email</td>
        </tr>
        <tr>
          <td><b style='color:deepskyblue;'>Mensagem:</b>$mensagem</td>
        </tr>
        <tr>
          <td><p>Este e-mail foi enviado em <b style='color:deepskyblue;'>$data_envio</b> às <b style='color:deepskyblue;'>$hora_envio</b></p></td>
        </tr>
      </table>
    </html>
  ";

  //enviar

  // emails para quem será enviado o formulário
  $emailenviar = "contact@apeislandgame.io";
  $destino = $emailenviar;
  $assunto = "Contato site";

  // É necessário indicar que o formato do e-mail é html
  $headers  = 'MIME-Version: 1.0' . "\r\n";
      $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
      $headers .= 'From:'.$nome.'<'.$email.'>';
  //$headers .= "Bcc: $EmailPadrao\r\n";

  mail($destino, $assunto, $arquivo, $headers);
  session_start();
  $_SESSION['mostrar']='show';

  header('location: index.php');
?>
