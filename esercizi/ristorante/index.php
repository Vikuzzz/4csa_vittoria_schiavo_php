<html>
    <head>
        <title>Sito dinamico di un ristorante ricorrendo a php</title>
    </head>

    <body bgcolor="#EEE8AA">

    <h1><b> RISTORANTE DA VITTORIA </b></h1>
    <h2> Primi Piatti </h2>
    
    <style>
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

        table 
        {
            margin-top: 20px;
            margin-left: 20px;
            border-collapse: collapse;
            width: 90%;
            overflow-x: auto;
        }

        th, td 
        {
            border: 1px solid #000000;
            padding: 8px;
            text-align: center;
            background-color: #32CD32;
        }

        th 
        {
            background-color: #FFFFFF;
            color: black;
        }
    </style>

<table class="table table-hover table-dark">
        
        <thead>
                <tr>
                    <th scope="col">PIATTO</th>
                    <th scope="col">PREZZO</th>
                    <th scope="col">INGREDIENTI</th>
                </tr>
        </thead>
        
        <tbody>
        <?php
            $menuprimi = 
            [
                "Pasta al pesto" => ["prezzo" => 10, "ingredienti" => "Spaghetti, basilico, pinoli, olio, parmiggiano reggiano"],
                "Pasta alla carbonara" => ["prezzo" => 10, "ingredienti" => "Spaghetti, uova, pecorino, guanciale"],
                "Gnocchi ai 4 formaggi" => ["prezzo" => 10, "ingredienti" => "Gnocchi, gorgonzola, pecorino, parmiggiano reggiano"],
                "Ravioli alla zucca" => ["prezzo" => 10, "ingredienti" => "Ravioli, zucca, grana padano"]
            ];

            foreach($menuprimi as $piatto => $dettaglipiatti)
            {     
                echo "<td>$piatto</td>";
                echo "<td>{$dettaglipiatti['prezzo']}</td>";
                echo "<td>{$dettaglipiatti['ingredienti']}</td>";
                echo "</tr>";
            }
        ?>
        </tbody>
</table>
           
    
                

                   
                 
    </body>
</html>

