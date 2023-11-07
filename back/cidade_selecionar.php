<?php

    $idcidade = $_GET['idcidade']

    //conectar com database
    require 'banco.php'

    $sql = "select * from cidade 
            where idcidade =:idcidade"
    $consulta = $conexao->prepare($sql)
    $consulta->bindParam(':idcidade', $idcidade, PDO::PARAM_STR)
    $consulta->execute()

    $dados = $consulta->fetchAll(PDO::FETCH_OBJ)

    $json = json_encode($dados)

    echo $json
?>
