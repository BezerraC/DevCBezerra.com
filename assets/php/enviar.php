<?php  


$nome = $_GET['nome'];
$email = $_GET['email'];
$subject = $_GET['subject'];
$mensagem = $_GET['mensagem'];

//configuracao da mensagem
// var_dump($nome);
$rta = mail('cbezerraneto@gmail.com',
"Assunto: $subject", $mensagem );
// var_dump($rta);

if ($rta->send()){
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