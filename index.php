<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

    <div class="table">
        <?php
            require("table.php");

            table("SELECT * FROM autorzy, tytuly, krzyzowa WHERE krzyzowa.id_autor=autorzy.id_autor AND krzyzowa.id_tytul=tytuly.id_tytul");
        ?>
    </div>

    <div class="add">
        <h2>Dodaj książkę</h2>
        <form action="add.php" method="GET">

            <input type="text" name="imie-autora" placeholder="Imie">
            <input type="text" name="nazwisko-autora" placeholder="Nazwisko">
            <input type="text" name="tytul" placeholder="Tytuł">
            <input type="text" name="isbn" placeholder="ISBN">
            <input type="submit" value="Dodaj">

        </form>
    </div>

    <div class="remove">
        <h2>Usuń książkę</h2>
        <form action="remove.php" method="GET">

            <input type="text" name="imie-autora" placeholder="Imie">
            <input type="text" name="nazwisko-autora" placeholder="Nazwisko">
            <input type="text" name="tytul" placeholder="Tytuł">
            <input type="submit" value="Usuń">

        </form>
    </add>
    
</body>
</html>