<?php
//se o email foi preenchido (isset($_POST['email'])) e se não esta vazio (!empty($_POST['email']))
if(isset($_POST['email']) && !empty($_POST['email'])){

    $nome = $_POST['celular'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = "danileg09@gmail.com";
    $subject = "Contato - cursoPHP";
    $body = "Nome: ".$nome. "\r\n" .
             "Email: " .$email. "\r\n".
             "Menssagem ". $message; 
    $header = "From:danileginfo@gmail.com". "\r\n". 
              "Reply-To:". $email. "\r\n".
              "x=Mailer:PHP/".phpversion();

    if(mail($to, $subject, $body, $header)){
        echo("email enviado com sucesso");
    }else{
        echo("email não pode ser enviado");
    }          



};







?>