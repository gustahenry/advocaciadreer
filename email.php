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
$mail->Username = "form@advocaciadreer.com.br";
$mail->Password = "form@dreer";

$mail->setFrom("form@advocaciadreer.com.br","{$nome}");
$mail->addAddress("form@advocaciadreer.com.br");
$mail->Subject = "Contato Site ".$nome;
$mail->msgHTML("<html>de: {$nome}<br/>email: {$email}<br/>mensagem: {$mensagem}<br/>telefone: {$telefone}</html>");
$mail->AltBody= "de: {$nome}\nemail: {$email}\nmensagem: {$mensagem}";

if ($mail->send()) {
	header("Location: index.php?email=sucesso#contato");
}else{
	header("Location: index.php?email=erro#contato");
}
die();
 ?>
