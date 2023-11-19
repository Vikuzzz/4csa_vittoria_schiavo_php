<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sito dinamico di un ristorante ricorrendo a php</title>

    <style>
        body 
        {
            margin: 0;
            padding: 0;
            font-family: Times New Roman',  Times, serif;
        }

        h1
        {
            margin-top:20px;
            margin-left:400px;
        }

        h2
        {
            margin-top:20px;
            margin-left:550px;
        }

        .sezioni-di-piatti 
        {
            flex: 0 0 calc(50% - 20px);
            box-sizing: border-box;
            padding: 20px;
            text-align: center; /* Allinea il testo al centro */
        }


        .even 
        {
            background-color: #AFEEEE;
        }

        .odd 
        {
            background-color: #DDA0DD;
        }

        img 
        {
            max-width: 400px;
            max-height: 400px;
            margin-right: 10px;
            margin-left: 700px;
        }
    </style>

</head>

<body bgcolor="#EEE8AA">

<h1><b> RISTORANTE DA VITTORIA </b></h1>
<h2> Primi Piatti </h2>

<?php
    $menuprimi = 
    [
    "Pasta al pesto" => ["prezzo" => 10, "ingredienti" => "Spaghetti, basilico, pinoli, olio, parmiggiano reggiano", "immagine" => "https://www.fattoincasadabenedetta.it/wp-content/uploads/2022/07/AdobeStock_235021478-1200x900.jpg"],
    "Pasta alla carbonara" => ["prezzo" => 10, "ingredienti" => "Spaghetti, uova, pecorino, guanciale", "immagine" => "carbonara.jpg"],
    "Gnocchi ai 4 formaggi" => ["prezzo" => 10, "ingredienti" => "Gnocchi, gorgonzola, pecorino, parmiggiano reggiano", "immagine" => "gnocchi.jpg"],
    "Ravioli alla zucca" => ["prezzo" => 10, "ingredienti" => "Ravioli, zucca, grana padano", "immagine" => "ravioli.jpg"]
    ];

    $count = 0; 

    foreach ($menuprimi as $piatto => $dettaglipiatti) 
    {
        $class = ($count % 2 == 0) ? 'even' : 'odd';
        echo "<div class='.sezioni-di-piatti $class'>";
        echo "<h3>{$piatto}</h3>";
        echo "<img src='{$dettaglipiatti['immagine']}' alt='{$piatto}'>";
        echo "<p><b>Prezzo:</b> {$dettaglipiatti['prezzo']} Euro</p>";
        echo "<p><b>Ingredienti:</b> {$dettaglipiatti['ingredienti']}</p>";
        echo "</div>";
        $count++;
}
?>

</body>
</html>
