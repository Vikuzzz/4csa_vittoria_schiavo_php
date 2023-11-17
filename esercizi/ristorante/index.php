<html>
    <head>
        <title>Sito dinamico di un ristorante ricorrendo a php</title>
    </head>

    <body bgcolor="#EEE8AA">

    <h1> RISTORANTE DA VITTORIA </h1>
    <h2> Primi Piatti </h2>
    
    <style>

        h1
        {
            
        }
    </style>
    
        <?php
        $a = [" Pasta al pesto " => 10, " Pasta alla carbonara " => 10, " Gnocchi ai 4 formaggi " => 10, " Ravioli alla zucca " => 10];

        foreach($a as $piatto => $prezzo)
        {     
            echo "<li>$piatto $prezzo</li>";

            if($piatto == " Pasta al pesto ")
            {
                echo " Ingredienti: Spaghetti, basilico, pinoli, olio, parmiggiano reggiano ";
            }
            else if($piatto == " Pasta alla carbonara ")
            {
               echo " Ingredienti: Spaghetti, uova, pecorino, guanciale ";
            }
            else if($piatto == " Gnocchi ai 4 formaggi ")
            {
               echo " Ingredienti: Gnocchi, gorgonzola, pecorino, parmiggiano reggiano ";
            }
            else if($piatto == " Ravioli alla zucca ")
            {
               echo " Ingredienti: Ravioli, zucca, grana padano ";
            }
        }
        ?>

    </body>
</html>

