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
$mail->Username = "gustavo@estudiomalves.com";
$mail->Password = "10019266";

$mail->setFrom("gustavo@estudiomalves.com","{$nome}");
$mail->addAddress("gustavo@estudiomalves.com");
$mail->Subject = $assunto;
$mail->msgHTML("<html>de: {$nome}<br/>email: {$email}<br/>mensagem: {$mensagem}<br/>telefone: {$telefone}</html>");
$mail->AltBody= "de: {$nome}\nemail: {$email}\nmensagem: {$mensagem}";

if ($mail->send()) {
	header("Location: index.html?email=sucesso");
}else{
	header("Location: index.html?email=erro");
}
die();
 ?>
