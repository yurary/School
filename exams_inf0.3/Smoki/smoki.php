<?php
    $conn =mysqli_connect("localhost", "root","","smoki");
    if($conn -> connect_error){
        die("404");
        
    }else{

        $zap1 = mysqli_query($conn,"SELECT DISTINCT pochodzenie FROM smok ORDER BY pochodzenie ASC;" );
    }

?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smoki</title>
    <link rel="stylesheet" href="styl.css">

</head>
<body>
    <header class="naglowek"></header>
    <nav class="navigacja">
        <div class="blok1" onclick="block1()" id="block1" ><b>Baza</b></div>
        <div class="blok"  onclick="block2()" id="block2" ><b>Opisy</b></div>
        <div class="blok"  onclick="block3()" id="block3" ><b>Galeria</b></div>
    </nav>
    <main>
        
        <section class="sec1" id="sec1">
            <h3>Baza Smoków</h3>
            <form method="post">
               <select id="krajS" name="KrajS" class="liata_rozwin">
                
                <?php
                while($kraj = $zap1 ->fetch_assoc())
                
                    echo("<option>$kraj[pochodzenie]</option>");
               
                ?>
              
               </select>
                <button type="submit" id="szukaj"></button>
                </form>
                    <table>
                        <tr id="col1">
                        <td>Nazwa</td>
                        <td>Długość</td>
                        <td>Szerokość</td>
                        </tr>
                        <?php 



                            $krajS = $_POST["KrajS"] ?? " ";
                            $zap2 = mysqli_query($conn,"SELECT nazwa, dlugosc, szerokosc FROM smok WHERE pochodzenie = '$krajS' ");
                            while($smok = $zap2 -> fetch_assoc()){
                                echo("
                                <tr>
                                    <td>$smok[nazwa]</td>
                                    <td>$smok[dlugosc]</td>
                                    <td>$smok[szerokosc]</td>
                            
                                </tr>
                                

                                
                                ");
                            }



                         ?>
                        
                        
                    </table>


            
    </section>
        <section id="sec2" class="sec2">
            <h3>Opisy smoków</h3>
            <ul>
                
                <li>
                    <strong>Smok czerwony</strong><br>
                    Pochodzi z Chin. Ma 1000 lat. Żywi się mniejszymi zwierzętami. Posiada łuski cenne na rynkach wschodnich do wyrabiania lekarstw. Jest dziki i groźny.
                </li>
                
                <li>
                    <strong>Smok zielony</strong><br>
                    Pochodzi z Bułgarii. Ma 10000 lat. Żywi się mniejszymi zwierzętami, ale tylko w kolorze zielonym. Jest kosmaty. Z sierści zgubionej przez niego, tka się najdroższe materiały.

                    
                </li>
                
                <li>
                    <strong>Smok niebieski </strong><br>
                    Pochodzi z Francji. Ma 100 lat. Żywi się owocami morza. Jest natchnieniem dla najlepszych malarzy. Często im pozuje. Smok ten jest przyjacielem ludzi i czasami im pomaga. Jest jednak próżny i nie lubi się przepracowywać.

                    
                </li>

                

            </ul>
            
        </section>
        <section id="sec3" class="sec3">
            <h3>Galeria</h3>
            <img src="smok1.png"> 
            <img src="smok2.JPG"> 
            <img src="smok3.JPG"> 


        </section>
    </main>
    <footer class="stopka"> 
        <p>Stronę opracował: grizli kakaszki</p>
    </footer>
    <script >
        const sec1 = document.getElementById("sec1");
        const sec2 = document.getElementById("sec2");
        const sec3 = document.getElementById("sec3");
        const B1 = document.getElementById("block1");
        const B2 = document.getElementById("block2");
        const B3 = document.getElementById("block3");
        function block1(){
            sec1.style.display = "block";
            sec2.style.display = "none";
            sec3.style.display = "none";
        }
        function block2(){
            sec1.style.display = "none";
            sec2.style.display = "block";
            sec2.style.backgroundColor = " #FFAEA5";
            sec3.style.display = "none";
        }
        function block3(){
            sec1.style.display = "none";
            b1.style.backgroundColor = "MistyRose";
            sec2.style.display = "none";
            b2.style.backgroundColor = "MistyRose";
            sec3.style.display = "block";
            b3.style.backgroundColor = " #FFAEA5";
            console.log("tak");
        }



    </script>
    
</body>
</html>