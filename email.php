<?php

if(isset($_POST['email']) && !empty($_POST['email'])){

$nome = addslashes($_POST['name']);
$fone = addslashes($_POST['phone']);
$email = addslashes($_POST['email']);
$mensagem = addslashes($_POST['message']);

$to = "contato@bonsaistudio.com.br";
$subject = "Contato - Bonsai Studio";
$body = "Nome: ".$nome. "\r\n".
        "Fone: ".$fone. "\r\n".
        "Email: ".$email. "\r\n".
        "Mensagem: ".$mensagem;

$header = "From:contato@bonsaistudio.com.br"."\r\n".
          "Reply-To:".$email."\e\n".
          "X=Mailer:PHP/".phpversion();

if(mail($to,$subject,$body,$header)){

  echo("Email enviado com sucesso.");
}else{
  echo("O email não pode ser enviado");
}
}

 ?>
