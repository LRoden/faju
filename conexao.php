<?php
//paramentros de configuração
$host = 'localhost';//Ip do servidor MySQL
$base = 'faju';
$usuario = 'root';
$senha = '1234';

//Conexao ao BD

$mysqli = new mysqli($host,$usuario,$senha,$base);
//caso algo tenha dado erro, exibe uma mensagem de erro
if(mysqli_connect_error())
    trigger_error(mysql_connect_error());
//alterar caracteres para utf8 (termos acentuados)
$mysqli->set_charset("utf8");
//modifica a zona de horario para o horario de sp
date_default_timezone_set('America/Sao_paulo');
