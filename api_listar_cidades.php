<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    header('Content-type: application/json');

    // Conexção com o Banco de Dados

    require_once('dbConect.php');

    // Definir UTF para conexão

    mysqli_set_charset($conn, $charset);

    $response = array();

    $stmt = mysqli_prepare($conn, "SELECT id,estadoID,nome FROM cidade");


    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);
    mysqli_stmt_bind_result($stmt, $id, $estadoID, $nome);

    // apresentar os dados da consulta
    // var_dump($stmt);

    if (mysqli_stmt_num_rows($stmt) > 0) {
        while (mysqli_stmt_fetch($stmt)) {
            array_push($response, array(
                'id' => $id,
                'estadoID' => $estadoID,
                'nome' => $nome
            ));
        }

        echo json_encode($response);
    } else {
        echo json_encode($response);
    }
}