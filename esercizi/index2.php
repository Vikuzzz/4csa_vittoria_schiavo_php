<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sito dinamico di un ristorante ricorrendo a php</title>

    <style>
        body 
        {
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
            box-sizing: border-box;
        }

        .even 
        {
            background-color: #FFF5EE;
        }

        .odd 
        {
            background-color: #E6E6FA;
        }

        img 
        {
            max-width: 350px;
            max-height: 350px;
            margin-right: 200px;
            margin-left: 450px;
            margin-top: 20px;
        }

        .dettaglipiatti 
        {
            text-align: center;
        }
    </style>

</head>

<body bgcolor="#A52A2A">

<h1><b> RISTORANTE DA VITTORIA </b></h1>
<h2> Primi Piatti </h2>

<?php
    $menuprimi = 
    [
    "Pasta al pesto" => ["prezzo" => 10, "ingredienti" => "Spaghetti, basilico, pinoli, olio, parmiggiano reggiano", "immagine" => "https://www.fattoincasadabenedetta.it/wp-content/uploads/2022/07/AdobeStock_235021478-1200x900.jpg"],
    "Pasta alla carbonara" => ["prezzo" => 10, "ingredienti" => "Spaghetti, uova, pecorino, guanciale", "immagine" => "https://www.giallozafferano.it/images/219-21928/Spaghetti-alla-Carbonara_650x433_wm.jpg"],
    "Gnocchi ai 4 formaggi" => ["prezzo" => 10, "ingredienti" => "Gnocchi, gorgonzola, pecorino, parmiggiano reggiano", "immagine" => "https://www.fattoincasadabenedetta.it/wp-content/uploads/2023/01/sito-08-Gnocchi-ai-4-formaggi_cover.jpg"],
    "Ravioli alla zucca" => ["prezzo" => 10, "ingredienti" => "Ravioli, zucca, grana padano", "immagine" => "https://www.cucchiaio.it/content/cucchiaio/it/ricette/2009/12/ricetta-tortelli-zucca/_jcr_content/header-par/image_single.img.jpg/1634034344612.jpg"]
    ];

    $count = 0; 

    foreach ($menuprimi as $piatto => $dettaglipiatti) 
    {
        $class = ($count % 2 == 0) ? 'even' : 'odd';
        echo "<div class='.sezioni-di-piatti $class'>";
        echo "<img src='{$dettaglipiatti['immagine']}' alt='{$piatto}'>";
        echo "<h3 class='.dettaglipiatti'>{$piatto}</h3>";
        echo "<p class='.dettaglipiatti'><b>Prezzo:</b> {$dettaglipiatti['prezzo']} Euro</p>";
        echo "<p class='.dettaglipiatti'><b>Ingredienti:</b> {$dettaglipiatti['ingredienti']}</p>";
        echo "</div>";
        $count++;
}
?>

</body>
</html>
