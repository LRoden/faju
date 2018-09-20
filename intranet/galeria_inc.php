<?php
    include_once('sessao.php');
?> 
<form name="cadastro" action="galeria_incBD.php?id=<?=$id;?>" method="POST" enctype="multipart/form-data">
    <table  align="center" width="70%">   
        <tbody>
            <tr>
                <td align="right">NOme:</td>
                <td><input type="text" name="nome" value=" " required/></td>
            </tr>
            <tr>
                <td align="right">Descrição:</td>
                 <td><textarea type="text" align="justify" name="descricao" rows='8' cols = '60'> </textarea></td>
            
            </tr> 
            <tr>
                <td align="right">Imagem do Título:</td>
                <td><input type="file" name="caminho" required/></td>
            </tr>
            <tr>
                <td></td>
                <td align="right"><input type="submit" value="SALVAR"/></td>
            </tr>
        </tbody>
    </table>    
</form>