<?php
    $host = "127.0.0.1";
    $user = "root";
    $pass = "";
    $db = "a_loja_sistema";
    $connect = new mysqli($host, $user, $pass, $db);
    if($connect->connect_error){
        die("Conncetion Failed: ".$connect->connect_erro);
    }else{
        //echo "conexão feita";
        $connect->set_charset("utf8");
    }
?>