<?php


?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="css/inserir.css">
<meta charset="UTF-8">
<div class="container">
    <form  class="formu" name="dadostenis" action="conexao.php" method="post">
        <table>
            <tbody> 
                <tr>
                    <td><label for="vendedor">Vendedor:</label><br><input class="input" type="text" name="vendedor" value=""><span class="input-border"></span></td>
                </tr>
                <tr>
                    <td><label for="marca">Marca:</label><br><input class="input" type="text" name="marca" value=""><span class="input-border"></span></td>
                </tr>
                <tr>
                    <td><label for="tamanho">Tamanho:</label><br><input class="input" type="numb" name="tamanho" value=""><span class="input-border"></span></td>
                </tr>
                <tr>
                    <td><label for="valor">Valor:</label><br><input class="input" type="numb" name="valor" value=""><span class="input-border"></span></td>
                </tr>
                <tr>
                    <td><input type="hidden" name="acao" value="inserir"></td>
                    <td><input class="button" type="submit" name="Enviar" value="Enviar"></td>
                </tr>
            </tbody>
        </table> 
    </form>
</div>