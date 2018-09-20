<?php

//conectar ao banco
include("../conexao.php");

$diretorio_img = "/upload/galeria/";
$uploadfile = $diretorio_img . basename($_FILES['caminho']['name']);
$caminho = $_FILES['caminho']['name'];
move_uploaded_file($_FILES['caminho']['tmp_name'], $uploadfile);

//passar dados do form par variaveis
$nome = $_POST ['nome'];
$descricao = $_POST ['descricao'];
$sql = "Insert into galeria (nome, descricao, caminho)"
        . "values('$nome', '$descricao', '$caminho');";
//enviar dados

    echo $sql;
    if ($mysqli->query($sql)) {
        header('location: index.php?url=gal');
        exit;
    } else {
        echo ("Erro: %s\n" . $mysqli->error);
    }
?>