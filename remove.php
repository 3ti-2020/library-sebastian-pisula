<?php

    require("sql.php");

    $idAutor = "";
    $idTytul = "";

    $result = $conn->query("SELECT * FROM autorzy WHERE imie='".$_GET['imie-autora']."' AND nazwisko='".$_GET['nazwisko-autora']."'");

    while($rs = $result->fetch_assoc()) {
        $idAutor = $rs['id_autor'];
    }

    $result = $conn->query("SELECT * FROM tytuly WHERE tytul='".$_GET['tytul']."'");

    while($rs = $result->fetch_assoc()) {
        $idTytul = $rs['id_tytul'];
    }

    $conn->query("DELETE FROM krzyzowa WHERE id_autor='".$idAutor."' AND id_tytul='".$idTytul."'");

    $conn->query("DELETE FROM autorzy WHERE imie='".$_GET['imie-autora']."' AND nazwisko='".$_GET['nazwisko-autora']."'");
    $conn->query("DELETE FROM tytuly WHERE tytul='".$_GET['tytul']."'");

    header("location: ./index.php");

    $conn->close();

?>