<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sla</title>
</head>
<body>     
    <?php
        $url = "https://swapi.dev/api/people/"; //endereço da api que vai ser consumida
        $ch = curl_init($url); //variavel para iniciar o cURL 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); //convertendo texto em um alrray
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false ) ; // colocar em relação ao ssh
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        $resultado = json_decode(curl_exec($ch));

        /* var_dump($resultado); */

        foreach ($resultado->results as $ator){
            /* var_dump($ator); */   // uma função básica que retorna uma string, e imprime os valores da raça e do nome do objeto que está sendo instanciado
            echo "Nome: " . $ator->name . "<br>";
            echo "Altura: " . $ator->height . "<br>";

            foreach ($ator-> films as $filme){
                echo "Filme: " . $filme . "<br>";
            }

            echo "<hr>";
        }
    ?>



    
</body>
</html>