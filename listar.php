<?php

require_once "BancoDados.php";

function listarCategorias(){
    try {
        $conexao = Conexao::getConexao();

        $stmt = $conexao->prepare("SELECT * FROM noticias ORDER BY id");//Seleciona as colunas id, nome, login, senha da table pessoas
        $stmt->execute();
        
        foreach($stmt as $linha){
            echo"<tr>";
                echo"<td> ".$linha['id'] ." </td>";
                echo"<td> ".$linha['titulo'] ." </td>";
                echo"<td> ".$linha['subtitulo'] ." </td>";
                echo"<td> ".$linha['conteúdo'] ." </td>";
                echo"<td> ".$linha['data'] ." </td>";
                echo"<td> ".$linha['editavel'] ." </td>";
                echo"<td> ".$linha['idCategoria'] ." </td>";

            echo"<tr>";
        }
        
    }catch (Exception $th) {
        echo $th->getMessage();
        exit;
    }

}
