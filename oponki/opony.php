<?php 
    $connect = mysqli_connect("localhost", "root", "", "opony");
    if($connect -> connect_error){
        die("");
    }else{
        $zap1 = mysqli_query($connect, "select * from opony order by cena asc limit 10;");
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
        <div>
            
            <?php
                while($opona = $zap1 -> fetch_assoc()){
                    if($opona['sezon'] =="letnia"){
                        $img = "lato.png";
                    }else{
                        $img = "uniwer.png";

                    }
                    echo("
                    <div id='opona'>
                    <img src='$img'>
                    <h4 class='model'>Opona $opona[model]:</h4>
                    <h3 class='cena'>Cena:$opona[cena]</h3>

                    </div>
                    ");

                }
            
            ?>
            <a href="https://opona.pl/"><p>więcej ofert</p></a>
        </div>
        <section></section>
        <section></section>

    </main>
    <footer></footer>
    
</body>
</html>