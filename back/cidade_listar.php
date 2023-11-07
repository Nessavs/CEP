<?php
    //conectar com database
    require 'banco.php'

    $sql = "select * from cidade order by cidade"
    $consulta = $conexao->prepare($sql)
    $consulta->execute()
    // $linhas = $consulta->rowCount()

    // echo $linhas

    $dados = $consulta->fetchAll(PDO::FETCH_OBJ)

    $json = json_encode($dados)


    echo $json
?>
