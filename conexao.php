<?php

// Verifica se o POST existe antes de inserir uma nova tenis
if(isset($_POST["acao"])){
    if ($_POST["acao"]=="inserir"){
        inserirtenis();
    }
    if ($_POST["acao"]=="alterar"){
        alterartenis();
    }
    if($_POST["acao"]=="excluir"){
        excluirtenis();
    }
}

// Responsável por criar uma conexão com meu banco
function abrirBanco() {
    $conexao = new mysqli("localhost: 3306", "root", "", "loja");
    return $conexao;
}

// Função responsável inseir uma tenis no meu banco de dados
    function inserirtenis() {
        $banco = abrirBanco();
        $sql = "INSERT INTO tenis(vendedor, marca, tamanho, valor) 
        VALUES ('{$_POST["vendedor"]}','{$_POST["marca"]}','{$_POST["tamanho"]}','{$_POST["valor"]}')";
        $banco->query($sql);
        $banco->close();
        voltarIndex();
    }

// Função responsável editar uma tenis no meu banco de dados
    function alterartenis() {
        $banco = abrirBanco();
        $sql = "UPDATE tenis SET vendedor='{$_POST["vendedor"]}',marca='{$_POST["marca"]}',tamanho='{$_POST["tamanho"]}',valor='{$_POST["valor"]}' WHERE id='{$_POST["id"]}'";
        $banco->query($sql);
        $banco->close();
        voltarIndex();
    }

// Função responsável excluir uma tenis no meu banco de dados
    function excluirtenis() {
        $banco = abrirBanco();
        $sql = "DELETE FROM tenis WHERE id='{$_POST["id"]}'";
        $banco->query($sql);
        $banco->close();
        voltarIndex();
    }

    function selectAlltenis() {
        $banco = abrirBanco();
        $sql = "SELECT * FROM tenis ORDER BY vendedor";
        $resultado = $banco->query($sql);
        $banco->close();
        // Laço que pega as informações do meu banco, organiza linha a linha e armazena na var $grupo
        while($row = mysqli_fetch_array($resultado)) {
            $grupo[] = $row;
        }
        return $grupo;
    }

    function selectIdtenis($id) {
        $banco = abrirBanco();
        $sql = "SELECT * FROM tenis WHERE id=".$id;
        $resultado = $banco->query($sql);
        $banco->close();
        // Laço que pega as informações do meu banco, organiza linha a linha e armazena na var $grupo
        $tenis = mysqli_fetch_assoc($resultado);
        return $tenis;
    }

// Após inserir uma nova tenis, retorna para a página principal
    function voltarIndex(){
        header("Location:index.php");
    }

?>