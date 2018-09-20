<?php

//conectar ao banco
include("../conexao.php");

//passar dados do form par variaveis
$diretorio_img = "../upload/frota/";
$uploadfile = $diretorio_img . basename($_FILES['frota_imagem_nome']['name']);
$nome = $_FILES['frota_imagem_nome']['name'];
move_uploaded_file($_FILES['frota_imagem_nome']['tmp_name'], $uploadfile);

$uploadfile1 = $diretorio_img . basename($_FILES['frota_imagem1']['name']);
$nome1 = $_FILES['frota_imagem1']['name'];
move_uploaded_file($_FILES['frota_imagem1']['tmp_name'], $uploadfile1);

$uploadfile2 = $diretorio_img . basename($_FILES['frota_imagem2']['name']);
$nome2 = $_FILES['frota_imagem2']['name'];
move_uploaded_file($_FILES['frota_imagem2']['tmp_name'], $uploadfile2);

$frota_marca = $_POST ['frota_marca'];
$frota_modelo = $_POST ['frota_modelo'];
$frota_assentos = $_POST ['frota_assentos'];
$frota_descricao = $_POST ['frota_descricao'];
$empresa_id = 1;

$id =$_GET['id'];
//enviar dados
$sql= "Update frota set        
        frota_marca = '$frota_marca',
        frota_modelo = '$frota_modelo',
        frota_assentos = '$frota_assentos',
        frota_descricao = '$frota_descricao',
        frota_imagem_nome = '$nome',
        frota_imagem1 = '$nome1',
        frota_imagem2 = '$nome2',
        empresa_id='$empresa_id'   
        where frota_id= $id;";

//echo $sql;

if($mysqli->query($sql)){
    header('location: index.php?url=fro');
    exit;
}else{
    echo ("Erro: %s\n".$mysqli->error);
}

