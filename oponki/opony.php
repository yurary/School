<?php 
    $connect = mysqli_connect("localhost", "root", "", "opony");
    if($connect -> connect_error){
        die("");
    }else{
        
    }

?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl.css">
    <title>OPONY</title>
</head>
<body>
    <main>
        <div class="block_boczny">
            
            <?php
                $zap1 = mysqli_query($connect, "select * from opony order by cena asc limit 10;");
                while($opona = $zap1 -> fetch_assoc()){
                    if($opona['sezon'] =="letnia"){
                        $img = "lato.png";
                    }else if($opona['sezon'] =="uniwersalna"){
                        $img = "uniwer.png";

                    }else{$img = "zima.png";}
                    echo("
                    <div class='opona'>
                    <img src='$img'>
                    <h4 class='model'>Opona $opona[model]:</h4>
                    <h3 class='cena'>Cena:$opona[cena]</h3>

                    </div>
                    ");

                }
            
            ?>
            <a href="https://opona.pl/"><p>więcej ofert</p></a>
        </div>
        <div class="section_conainer">

            <section style="background-color: #9FA8DA;"> 
                <img class="lewy_obraz" src="opona.png">
                <h2>Opona dnia</h2>

                <?php

                    $zap = mysqli_query($connect, "select producent, model, sezon, cena from opony where nr_kat = 10;"); 
                    while($days_opona = $zap -> fetch_array()){
                        echo("
                            <h2>$days_opona[producent], model $days_opona[model]</h2>
                            <h2>Sezon: $days_opona[sezon]</h2>
                            <h2>Tylko  $days_opona[cena]zł!</h2>

                        ");
                    }
                ?>

            </section>
            <section style="background-color: #7986CB;">
                <?php
                    $zap = mysqli_query($connect, "select zamowienie.id_zam, zamowienie.ilosc, opony.model, opony.cena from zamowienie join opony on zamowienie.nr_kat = opony.nr_kat order by rand() limit 1;");
                    while($zam = $zap -> fetch_assoc()){
                        $wartosc = $zam['cena']*$zam['ilosc'];
                        echo("
                            <h2>$zam[id_zam], $zam[ilosc], sztuki modelu $zam[model] </h2>
                            <h2>Wartość zamówienia: $wartosc zł</h2>
                        ");

                    }
                ?>

                <h3>Najnowsze zamówienie</h3>
            </section>


        </div>
        

    </main>
    <footer></footer>
    
</body>
</html>