<?php  
header("Set-Cookie: key4=value; path=/; domain=www.devcbezerra.com; HttpOnly; Secure; SameSite=Strict");

$nome = utf8_encode($_GET['nome']);
$email = utf8_encode($_GET['email']);
$projeto = utf8_encode($_GET['projeto']);
$mensagem = utf8_encode($_GET['mensagem']);

require 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;
$mail->isSMTP();

//Configuracoes do servidor de email

$mail->Host = "smtp.hostinger.com";
$mail->Port = "465";
$mail->SMTPSecure = "ssl";
$mail->SMTPAuth = "true";
$mail->Username = "carlos@devcbezerra.com";
$mail->Password = "Sbwxdr2d2x";

//configuracao da mensagem

$mail->setFrom($mail->Username, "DevCBezerra"); // Remetente
$mail->addAddress('cbezerraneto@gmail.com'); // Destinatario
$mail->Subject = "DevCBezerra"; // Assunto e-mail

$conteudo_email = "
Você recebeu uma mensagem de: $nome E-mail: $email
<br><br>
Projeto: $projeto  <br><br>
Mensagem: <br> 
$mensagem
";

$mail->IsHTML(true);
$mail->Body = $conteudo_email;

if ($mail->send()){
  echo ("<script>
        alert('Email enviado com sucesso');
        window.history.back();
    </script>");
}else {
  echo ("<script>
        window.alert('Falha ao enviar o Email')
        window.history.back();
    </script>");
}
?>