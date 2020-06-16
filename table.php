<?php

    function table($query) {

        require("sql.php");
        $result = $conn->query($query);

        echo("<table>
            <tr>
                <th>Tytuł</th><th>Imie autora</th><th>Nazwisko autora</th><th>ISBN</th>
            </tr>");

        while($rs = $result->fetch_assoc()) {
            echo("<tr>
                <td>".$rs['tytul']."</td><td>".$rs['imie']."</td><td>".$rs['nazwisko']."</td><td>".$rs['ISBN']."</td>
                </tr>");
        }

        echo("</table>");

        $conn->close();

    }

?>