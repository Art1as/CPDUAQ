<?php 
    require "connect.php";
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $conteudo = $_POST['conteudo'];
    $data = $_POST['data'];

    $conteudo = htmlentities(addslashes($conteudo));
    $sql = 'INSERT INTO posts (titulo, conteudo, autor, data)
    VALUES ("'.$titulo.'","'.$conteudo.'","'.$autor.'","'.$data.'")';

    $RESULT = $conn->exec($sql);
    if ($RESULT == TRUE) {
        echo "New record created sucessfully";
    } else {
        echo "Error: " . $sql . "<br>" . print_r($conn->errorInfo());
    }

    // $conn->close();
?>