<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $n = $_POST['number'];

        echo "<h2>Résultat :</h2>";

        for ($i = 1; $i <= $n; $i++) {
            if ($i % 2 == 0) {
                echo "$i est pair<br>";
            } else {
                echo "$i est impair<br>";
            }
        }
    }
    echo "hhhhhh"
    ?>