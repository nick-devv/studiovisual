<?php

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $mensagem = $_POST['msg'];
    $data_envio = date('d/m/Y');
    $hora_envio = date('H:i:s');

    //conteudo do email
    $arquivo = "<html><table width='510' border='1' cellpadding='1' cellspacing='1' bgcolor='#CCCCCC'><tr><td><tr><td width='500'>Nome:$nome</td></tr><tr><td width='320'>E-mail:<b>$email</b></td></tr><tr><td width='320'>Telefone:<b>$telefone</b></td></tr><tr><td width='320'>Mensagem:$nome</td></tr></td></tr><tr><td>Este e-mail foi enviado em <b>$data_envio</b> às <b>$hora_envio</b></td></tr></table></html>";

    //cabeçalho
    $destino = "nicolasissaho@gmail.com";
    $assunto = "Contato pelo Site";
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= 'From: $nome <$email>';

    //envio
    $enviar = mail($destino, $assunto, $arquivo, $headers);

    if($enviar){
        $mgm = "E-MAIL ENVIADO COM SUCESSO! <br> Aguarde, entraremos em contato";
        echo $mgm;
    } else {
        $mgm = "ERRO AO ENVIAR E-MAIL!";
        echo $mgm;
    }

?>