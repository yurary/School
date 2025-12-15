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

            </section>
            <section style="background-color: #7986CB;">
                <h3>Najnowsze zamówienie</h3>
            </section>


        </div>
        

    </main>
    <footer></footer>
    
</body>
</html>