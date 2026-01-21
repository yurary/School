<?php

$polaczenie = new mysqli("localhost", "root", "", "piekarnia");
if ($polaczenie->connect_error) {
    die("Błąd połączenia: " . $polaczenie->connect_error);
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <title>PIEKARNIA</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img src="wypieki.png" alt="Produkty naszej piekarni" class="tlo">

    <nav>
        <a href="kw1.png">KWERENDA1</a>
        <a href="kw2.png">KWERENDA2</a>
        <a href="kw3.png">KWERENDA3</a>
        <a href="kw4.png">KWERENDA4</a>
    </nav>

    
    <header>
        <h1>WITAMY</h1>
        <h4>NA STRONIE PIEKARNI</h4>
        <p>
            Od 31 lat oferujemy najwyższej jakości pieczywo. Naturalnie świeże, naturalnie smaczne. Pieczemy wyłącznie wypieki na naturalnym zakwasie bez polepszaczy i zagęstników. Korzystamy wyłącznie z najlepszych ziaren pochodzących z ekologicznych upraw położonych w rejonach zgierskim i ozorkowskim.
        </p>
    </header>

    
    <main>
        <h4>Wybierz rodzaj wypieków:</h4>
        <form method="post" action="piekarnia.php">
            <select name="rodzaj">
                <?php
               
                $sql_rodzaje = "SELECT DISTINCT Rodzaj FROM wyroby ORDER BY Rodzaj DESC";
                $wynik = $polaczenie->query($sql_rodzaje);
                if ($wynik->num_rows > 0) {
                    while ($r = $wynik->fetch_assoc()) {
                        $selected = (isset($_POST['rodzaj']) && $_POST['rodzaj'] == $r['Rodzaj']) ? "selected" : "";
                        echo "<option value='{$r['Rodzaj']}' $selected>{$r['Rodzaj']}</option>";
                    }
                }
                ?>
            </select>
            <input type="submit" name="wybierz" value="Wybierz">
        </form>

        <table>
            <tr>
                <th>Rodzaj</th>
                <th>Nazwa</th>
                <th>Gramatura</th>
                <th>Cena</th>
            </tr>
            <?php
            
            if (isset($_POST['wybierz'])) {
                $rodzaj_wybrany = $polaczenie->real_escape_string($_POST['rodzaj']);
                $sql_produkty = "SELECT * FROM wyroby WHERE Rodzaj = '$rodzaj_wybrany'";
                $wynik_produkty = $polaczenie->query($sql_produkty);

                if ($wynik_produkty->num_rows > 0) {
                    while ($w = $wynik_produkty->fetch_assoc()) {
                        echo "<tr>
                                <td>{$w['Rodzaj']}</td>
                                <td>{$w['Nazwa']}</td>
                                <td>{$w['Gramatura']}</td>
                                <td>{$w['Cena']} zł</td>
                              </tr>";
                    }
                }
            }
            ?>
        </table>
    </main>

   
    <footer>
        <p>AUTOR: 123456</p>
        <p>Data: 25.09.2025</p>
    </footer>

</body>
</html>

<?php

$polaczenie->close();
?>
