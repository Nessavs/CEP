<?php
    $cidade = $_GET['cidade']
    $estado = $_GET['estado']

    //conectar com database
    require 'banco.php'

    $sql = "insert into cidade (cidade, estado) values (:cidade, :estado)"

    $consulta = $conexao->prepare($sql)
    $consulta->bindParam(':cidade', $cidade, PDO::PARAM_STR)
    $consulta->bindParam(':estado', $estado, PDO::PARAM_STR)
    $consulta->execute()
    $linhas = $consulta->rowCount()

    echo $linhas
?>
