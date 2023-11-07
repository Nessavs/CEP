<?php
    $idcidade = $_GET['idcidade'];
    $cidade = $_GET['cidade'];
    $estado = $_GET['estado'];

    //conectar com database
    require 'banco.php';

    $sql = "update cidade
               set cidade = :cidade = :estado
            where idcidade = :idcidade";

    $sql = "select * from cidade order by cidade";
    $consulta = $conexao->prepare($sql);
    $consulta->blindParam(':idcidade', $idcidade, PDO::PARAM_STR);
    $consulta->blindParam(':cidade', $cidade, PDO::PARAM_STR);
    $consulta->blindParam(':estado', $estado, PDO::PARAM_STR);
    $consulta->execute();
    $linhas = $consulta->rowCount();

    echo $linhas;
?>