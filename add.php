<?php

    require("sql.php");

    $duplicate = false;

    $result = $conn->query("SELECT * FROM autorzy WHERE imie='".$_GET['imie-autora']."' AND nazwisko='".$_GET['nazwisko-autora']."'");

    if ($result->fetch_row()) $duplicate=true;

    if (!$duplicate) $conn->query("INSERT INTO autorzy (`id_autor`, `imie`, `nazwisko`) VALUES (null, '".$_GET['imie-autora']."', '".$_GET['nazwisko-autora']."')");
    $conn->query("INSERT INTO tytuly (`id_tytul`, `tytul`, `ISBN`) VALUES (null, '".$_GET['tytul']."', '".$_GET['isbn']."')");


    $idAutor = "";
    $idTytul = "";


    $result = $conn->query("SELECT * FROM autorzy WHERE imie='".$_GET['imie-autora']."' AND nazwisko='".$_GET['nazwisko-autora']."'");

    while($rs = $result->fetch_assoc()) {
        $idAutor = $rs['id_autor'];
    }

    $result = $conn->query("SELECT * FROM tytuly WHERE tytul='".$_GET['tytul']."' AND ISBN='".$_GET['isbn']."'");

    while($rs = $result->fetch_assoc()) {
        $idTytul = $rs['id_tytul'];
    }

    $conn->query("INSERT INTO krzyzowa (`id`, `id_autor`, `id_tytul`) VALUES (null, '".$idAutor."', '".$idTytul."')");

    $conn->close();

    header("location: ./index.php");

?>