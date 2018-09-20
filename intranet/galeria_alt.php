<?php
    include_once('sessao.php');
    
    include("../conexao.php");
    $id= $_GET['id']; //pega valor do banco
    $sql= "Select * from frota f "
            . " where frota_id= $id";
    $query =$mysqli->query($sql);
    $dados = $query->fetch_array();
        $frota_marca = $dados ['frota_marca'];
        $frota_modelo = $dados ['frota_modelo'];
        $frota_assentos = $dados ['frota_assentos'];
        $frota_descricao = $dados ['frota_descricao'];
        $imagem_frota_id = $dados ['imagem_frota_id'];
        $imagem_titulo = $dados ['frota_imagem_nome'];
        $imagem_1 = $dados ['frota_imagem1'];
        $imagem_2 = $dados ['frota_imagem2'];
?>
<form name="cadastro" action="fro_altBD.php?id=<?=$id;?>" method="POST" enctype="multipart/form-data">
    <table  align="center" width="70%">   
        <tbody>
            <tr>
                <td align="right">Marca:</td>
                <td><input type="text" name="frota_marca" value="<?=$frota_marca;?>" required/></td>
            </tr>
            <tr>
                <td align="right">Modelo:</td>
                <td><input type="text" name="frota_modelo" value="<?=$frota_modelo;?>" required/> </td>
            </tr> 
            <tr>
                <td align="right">Assentos:</td>
                <td><input type="text" name="frota_assentos" value="<?=$frota_assentos;?>" required/> </td>
            </tr>  
            <tr>
                <td align="right">Descrição:</td>
                <td><textarea type="text" align="justify" name="frota_descricao" rows='8' cols = '60'><?=$frota_descricao;?></textarea></td>
            </tr>
            <tr>
                <td align="right">Imagem do Título:</td>

                <td><input type="file" name="frota_imagem_nome" required/>.&nbsp;&nbsp;&nbsp;&nbsp;Imagem atual: <b><?=$imagem_titulo;?></b> </td>

                <td><br><input type="file" name="frota_imagem_nome" value="<?=$imagem_titulo;?>" required/> </td>

            </tr>
            <tr>
                <td align="right">Demais Imagens:</td>
                <td>

                    <p><input type="file" name="frota_imagem1" />.&nbsp;&nbsp;&nbsp;&nbsp;Imagem atual: <b><?=$imagem_1;?></b></p>
                    <p><input type="file" name="frota_imagem2" />.&nbsp;&nbsp;&nbsp;&nbsp;Imagem atual: <b><?=$imagem_2;?></b></p>

                    <p><?=$imagem_1;?><br><input type="file" name="frota_imagem1" /></p>
                    <p><?=$imagem_2;?><br><input type="file" name="frota_imagem2" /></p>

                
                </td>
            </tr>  
            <tr>
                <td></td>
                <td align="right"><input type="submit" value="SALVAR"/></td>
            </tr>
        </tbody>
    </table>    
</form>

