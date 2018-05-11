<?php 
require_once('PHPMailer/PHPMailerAutoload.php');	

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$mensagem = $_POST['mensagem'];

$mail = new PHPMailer();
$mail->isSMTP();
$mail->Host = 'mx1.hostinger.com.br';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username = "contato@advocaciadreer.com.br";
$mail->Password = "contato@dreer";

$mail->setFrom("contato@advocaciadreer.com.br","{$nome}");
$mail->addAddress("contato@advocaciadreer.com.br");
$mail->Subject = $assunto;
$mail->msgHTML("<html>de: {$nome}<br/>email: {$email}<br/>mensagem: {$mensagem}<br/>telefone: {$telefone}</html>");
$mail->AltBody= "de: {$nome}\nemail: {$email}\nmensagem: {$mensagem}";

if ($mail->send()) {
	header("Location: index.html/#contato/?email=sucesso");
}else{
	header("Location: index.html/#contato/?email=erro");
}
die();
 ?>
