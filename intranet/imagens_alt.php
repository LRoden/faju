<?php
    include_once('sessao.php');
    
    include("../conexao.php");
    $id= $_GET['id']; //pega valor do banco
    $sql= "Select * from imagens";
    $query =$mysqli->query($sql);
    $dados = $query->fetch_array();
        $imagem_fundo = $dados ['imagem_fundo'];
        $imagem_inicio = $dados ['imagem_inicio'];
        $imagem_logo = $dados ['imagem_logo'];
        $imagem_contato = $dados ['imagem_contato'];
?>
<form name="cadastro" action="imagens_altBD.php?id=<?=$id;?>" method="POST" enctype="multipart/form-data">
    <table  align="center" width="70%">   
        <tbody>
            <tr>
                <td align="right">Imagem do fundo:</td>
                <td><input type="text" name="imagem_fundo" value="<?=$imagem_fundo;?>" required/></td>
            </tr>
            <tr>
                <td align="right">Imagem de Início:</td>
                 <td><textarea type="text" align="justify" name="imagem_inicio"  rows='8' cols = '60'><?=$imagem_inicio;?> </textarea></td>
            
            </tr> 
            <tr>
                <td align="right">Logo:</td>
                <td><input type="text" name="imagem_logo" value="<?=$imagem_logo;?>" required/></td>
            </tr>
            <tr>
                <td align="right">Imagem Contato:</td>
                 <td><textarea type="text" align="justify" name="imagem_contato"  rows='8' cols = '60'><?=$imagem_contato;?> </textarea></td>
            
            </tr> 
            <tr>
                <td></td>
                <td align="right"><input type="submit" value="SALVAR"/></td>
            </tr>
        </tbody>
    </table>    
</form>

