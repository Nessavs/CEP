<?php
    $idcidade = $_GET['idcidade'];

    //conectar com database
    require 'banco.php';

    $sql = "deleete from cidade
    where idcidade = :idcidade";

    $consulta = $conexao->prepare($sql);
    $consulta->bindParam(':idcidade', $idcidade, PDO::PARAM_STR);
    $consulta->execute();
    $linhas = $consulta->rowCount();

    echo $linhas;
?>
