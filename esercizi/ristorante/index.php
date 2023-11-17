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
        $a = [" Pasta al pesto " => 10, " Pasta alla carbonara " => 10, " Gnocchi ai 4 formaggi " => 10, " Ravioli alla zucca " => 10];
        
        //mettere un altro array con testo e prezzo
        foreach($a as $piatto => $prezzo)
        {     
            echo "<li>$piatto $prezzo</li>";
            //echo "Il pesto alla genovese è un condimento tradizionale tipico originario della Liguria. Con tale denominazione è inserito tra i Prodotti agroalimentari tradizionali liguri. Il suo ingrediente base è il basilico, e più specificamente il Basilico Genovese. ";
        }
        ?>
    </body>
</html>

