<!DOCTYPE html>
<html lang="en">
<head>

    <title>Crea un sito web che prenda in ingresso un testo T ed due numeri A, B dall’utente e crei una tabella AxB contenente in ogni cella il testo T.</title>

</head>

<body bgcolor="#2CD3E7">

<h1 style="color:#A52A2A; text-align: center; font-family: Times New Roman', Times, serif;"><b> BENVENUT* IN QUESTO SITO WEB, ORA DEVI INSERIRE LE INFORMAZIONI CHE PREFERISCI. </b></h1>
        
    <?php

        echo "<table border = '1' style='margin: auto; font-weight: bold;'>";

           // Creare le righe della tabella
            for ($righe = 0; $righe < $_GET['Numero1']; $righe++) 
            {
                echo "<tr>";
                // Creare le colonne della tabella
            
                for ($colonne = 0; $colonne < $_GET['Numero2']; $colonne++) 
                {
                    echo "<td>";
                    echo $_GET['Testo']."</td>";
                }
    
                echo "</tr>";
            }
        

        echo "</table>";

    ?>

</body>
</html>