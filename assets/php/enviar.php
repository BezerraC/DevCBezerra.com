<?php  
$nome = $_GET['nome'];
$email = $_GET['email'];
$subject = $_GET['subject'];
$mensagem = $_GET['mensagem'];

$body = <<<HTML
    <h4>Contato | DevCBezerra</h4>
    <p>De: $nome / $email</p>
    <h4>Mensagem</h4>
    <p>$mensagem</p>
HTML;

$headers = "MIME-Version: 1.0 \r\n";
$headers.= "Content-type: text/html; charset=utf-8 \r\n";
$headers.= "From: $nome <$email> \r\n";
$headers.= "To: devcbezerra.com \r\n";
// $headers.= "Cc: cbezerraneto@gmail.com \r\n";
// $headers.= "Bcc: cbezerraneto@gmail.com \r\n";

//configuracao da mensagem
// var_dump($nome);
$rta = mail('cbezerraneto@gmail.com',
"Assunto: $subject", $body, $headers );
// var_dump($rta);

header("Location: ../../");

// if ($rta->send()){
//   echo ("<script>
//         alert('Email enviado com sucesso');
//         window.history.back();
//     </script>");
// }else {
//   echo ("<script>
//         window.alert('Falha ao enviar o Email')
//         window.history.back();
//     </script>");
// }

?>