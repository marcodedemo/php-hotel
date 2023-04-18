

<?php 

$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];

$arrayKeys = array_keys($hotels[0]);


?>




<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">


    <title>PHP Hotel</title>

</head>


<!-- css -->
<style>

    #filters{
        text-align: center;

        padding: 50px;
    }

</style>



<body>
 
    <form id="filters" action="index.php" method="GET">

        <input type="checkbox" id="parking" value="available" name="parking">
        <label for="parking">Parcheggio</label> <br>

        <label for="vote">Voto Hotel:</label>
        <select name="vote" id="vote">
            <option value="0"></option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>


        </select>
        <br>

        <input type="submit">


    </form>


    <div class="container text-center">

        <?php 

        // div row per i titoli
        echo "<div class='row py-2'>";
        
        // ciclo for per la creazione dei titoli
        for($i=0; $i< count($hotels); $i++){
            echo "<strong class='col text-uppercase'>{$arrayKeys[$i]}</strong>";

        }
        // chiusura row titoli
        echo "</div>";


        




        if(!isset($_GET['parking'])){
            // ciclo foreach per la creazione di una row per ogni hotel
            foreach($hotels as $hotel){
                echo "<div class='row py-2'>";

                // ciclo foreach per la creazione di una col per ogni info 
                foreach($hotel as $key => $info){
                    echo "<div class='col'>{$info}</div>";
                }

                // chiusura row singolo hotel
                echo "</div>";
            }

        }elseif($_GET['parking'] == "available"){

            foreach($hotels as $hotel){

                
                if($hotel['parking'] == true){

                    echo "<div class='row py-2'>";

                    // ciclo foreach per la creazione di una col per ogni info 
                    foreach($hotel as $info){
                        echo "<div class='col'>{$info}</div>";
                    }

                    // chiusura row singolo hotel
                    echo "</div>";
                    
                }
                
                
            }
            
        };

        ?>

    </div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>
</html>