<?php 

	$GetPost = filter_input_array(INPUT_POST,FILTER_DEFAULT); 

	$Erro = true;
	$name = $GetPost['name'];
	$email = $GetPost['email'];

	include_once "phpmailer/class.smtp.php";
	include_once "phpmailer/class.phpmailer.php";

	$Mailer = new PHPMailer; 
	$Mailer->CharSet = "utf8";
	$Mailer->SMTPDebug = 3;
	$Mailer->IsSMTP();  
	$Mailer->Host ="email-ssl.com.br"; 
	$Mailer->SMTPAuth = true; 
	$Mailer->Username ="noreply@jackusephot.com";
	$Mailer->Password ="Mudar_123";
	$Mailer->SMTPSecure = "ssl";
	$Mailer->Port = 465 ;
	$Mailer->FromName = "{$name}";
	$Mailer->From = "noreply@jackusephot.com";
	$Mailer->addAddress("contato@jackusephot.com");
	$Mailer->IsHTML(true);
	$Mailer->Subject = "Cadastro realizado pelo site - {$name}"." ".date("H:i")." - ".date("d/m/Y");
	$Mailer->Body = "<p><strong>Mensagem enviada por:</strong> {$name} </p> 
					 <p><strong>E-mail:</strong> {$email} </p>";
	if($Mailer->Send()) {
		$Erro = false;
		}
	
	var_dump($Erro);

 ?>