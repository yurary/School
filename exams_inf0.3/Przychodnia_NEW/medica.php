<?php
    $conn = mysqli_connect("localhost", "root", "", "medica");
    if(!$conn){
        die("brak".mysqli_connect_error());
       
    }
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="img/obraz2.2.png">
    
    <title>Przychodnia Medica</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <nav><h1>Abonamenty w przychodni Medica</h1></nav>
    <article>
         <?php
                $zap = mysqli_query($conn, "select nazwa, cena, opis from abonamenty;");
                while($row = $zap-> fetch_assoc()){
                    echo("<h3> Pakiet ");
                    echo($row["nazwa"]);
                    echo("-cena");
                    echo($row["cena"]);
                    echo("zł </h3>");
                    echo("<p>");
                    echo($row["opis"]);
                    echo("</p>");
                }
        ?>
            <a href="opis.html">Dowiedz się więcej</a>
    </article>
    <main>
        <section>
            <h2 class="nagluwek">Standardowy</h2>
            <ul>
                <?php
                    $zap2 = mysqli_query($conn, "select a.nazwa AS abonament, c.cecha from abonamenty a join SzczegolyAbonamentu sa on a.id = sa.abonamenty_id join cechy c on sa.cechy_id = c.id where a.id = 1;");
                    while($rowCechy = $zap2 -> fetch_assoc()){
                        echo("<li>");
                        echo($rowCechy["cecha"]);
                        echo("</li>");
                    }
                ?>
            </ul>
           
            
        </section>
        <section>
            <h2 class="nagluwek">Premium</h2>
            <ul>
                <?php
                    $zap2 = mysqli_query($conn, "select a.nazwa AS abonament, c.cecha from abonamenty a join SzczegolyAbonamentu sa on a.id = sa.abonamenty_id join cechy c on sa.cechy_id = c.id where a.id = 2;");
                    while($rowCechy = $zap2 -> fetch_assoc()){
                        echo("<li>");
                        echo($rowCechy["cecha"]);
                        echo("</li>");
                    }
                ?>
            </ul>
        </section>
        <section>
            <h2 class="nagluwek">Dziecko</h2>
            
            <ul>
                <?php
                    $zap2 = mysqli_query($conn, "select a.nazwa AS abonament, c.cecha from abonamenty a join SzczegolyAbonamentu sa on a.id = sa.abonamenty_id join cechy c on sa.cechy_id = c.id where a.id = 3;");
                    while($rowCechy = $zap2 -> fetch_assoc()){
                        echo("<li>");
                        echo($rowCechy["cecha"]);
                        echo("</li>");
                    }
                ?>
            </ul>
        </section>
    </main>
    <footer>
        <P><img src="img/obraz2.2.png" alt="Przychodnia">Stronę przygotował: 00000000000</p>
    </footer>
    <?php
        mysqli_close($conn);
    ?>
</body>
</html>