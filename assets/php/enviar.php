<?php  
$nome = $_GET['nome'];
$email = $_GET['email'];
$subject = $_GET['subject'];
$mensagem = $_GET['mensagem'];

$body = <<<HTML
    <h1>Contado DevCBezerra.com</h1>
    <p>De: $nome / $email</p><br/>
    <h2>Mensagem</h2>
    <p>$mensagem</p>
HTML;

//configuracao da mensagem
var_dump($nome);
$rta = mail('cbezerraneto@gmail.com',
"Assunto: $subject", $body );
var_dump($rta);

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