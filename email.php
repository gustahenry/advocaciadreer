<?php 
require_once('PHPMailer/PHPMailerAutoload.php');	

$nome = $_POST['nome'];
$email = $_POST['email'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];

$mail = new PHPMailer();
$mail->isSMTP();
$mail->Host = 'mx1.hostinger.com.br';
$mail->Port = 2525;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username = "contato@advocaciadreer.com.br";
$mail->Password = "010203";

$mail->setFrom("contato@advocaciadreer.com.br","{$nome}");
$mail->addAddress("contato@advocaciadreer.com.br");
$mail->Subject = $assunto;
$mail->msgHTML("<html>de: {$nome}<br/>email: {$email}<br/>mensagem: {$mensagem}</html>");
$mail->AltBody= "de: {$nome}\nemail: {$email}\nmensagem: {$mensagem}";

if ($mail->send()) {
	header("Location: contato.php?email=sucesso");
}else{
	header("Location: contato.php?email=erro");
}
die();
 ?>
