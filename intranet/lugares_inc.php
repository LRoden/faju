<?php
include_once('sessao.php');
?> 

<form name="cadastro" action="" method="POST" enctype="multipart/form-data">
    <table  align="center" width="70%">   

        <tbody>
            <tr>
                <td align="right">Nome:</td>
                <td><input type="text" name="nome" value="" required/></td>
            </tr>
            <tr>
                <td align="right">Descrição:</td>
                <td><textarea type="text" align="justify" name="descricao"  rows='8' cols = '60'> </textarea></td>

            </tr>
            <tr>
                <td align="right">Localização:</td>
                <td><input type="text" name="localizacao" value="" required/></td>
            </tr> 
            <tr>
                <td align="right">Foto Principal:</td>
                <td><input type="file" name="foto_principal"  /></td>
            </tr>


            <tr>
                <td align="right">Parada:</td>
                <td>
                    <?php
                    include '../conexao.php';                    
                    $sql = "SELECT * FROM parada;";
                    $query = $mysqli->query($sql);
                    $row = mysqli_num_rows($query);
                    ?>
                   
                    <!-- Select Basic -->
                            <select id="id" name="nome[]" class="form-control">
                                <option value="nome[]x" selected="selected">
                                <?php print_r($row);
                                include '../conexao.php';                                 
                                while ($row2 = mysql_fetch_assoc($row)) {
                                    echo "<option value=$row2[id]>$row2[nome]</option>";
                                    print_r($row);
                                }
                                ?></option>
                            </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td align="right"><input type="submit" value="SALVAR"/></td>
            </tr>
        </tbody>
    </table>    
</form>