<html>
    <head>
        <title>Sito dinamico di un ristorante ricorrendo a php</title>
    </head>

    <body>

    <h1>PASTA AL PESTO</h1>
    <h2></h2>

    <style>

    #Pastaalpesto
    {
        position: relative;
        left: 0;
        top:0;
        width:200px;
        height:30px;
        margin-top:20px;
        margin-left:auto;
    }
    </style>
    
        <?php
        $a = [" Pasta al pesto ", " Pasta alla carbonara ", " Gnocchi ai 4 formaggi ", " Ravioli alla zucca "];
        mettere un altro array con testo e prezzo
        foreach($a as $piatto)
        {     
            echo "<li>$piatto</li>";
            echo "Il pesto alla genovese è un condimento tradizionale tipico originario della Liguria. Con tale denominazione è inserito tra i Prodotti agroalimentari tradizionali liguri. Il suo ingrediente base è il basilico, e più specificamente il Basilico Genovese. ";
        }
        ?>
    </body>
</html>

