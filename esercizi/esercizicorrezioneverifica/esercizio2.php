<!DOCTYPE html>
<html lang="en">
<head>

    <title>Form di accesso con password</title>

</head>

<body bgcolor="#2CD3E7">

<style>
    
    table 
    {
        margin: auto;
    }

    th, td
    {
        text-align: center;
    }

    </style>

<h1 style="color:#A52A2A; text-align: center; font-family: Times New Roman', Times, serif;"><b> BENVENUT* NEL FORM CHE HAI COMPILATO, QUESTE SONO LE TUE INFORMAZIONI. </b></h1>

<table class="table">
    <thead>
        <tr>
            <th>COSA RICHIESTA</th>
            <th>INFORMAZIONI</th>
        </tr>
    </thead>
        
    <tbody>

        <?php

        $passwordgiusta = "info2023";
        $utentegiusto = "utente";
        $contatoretentativi = 0;

        foreach ($_POST as $k => $v) //utilizziamo $_POST perché vengono inviati dati sensibili come la password, di conseguenza ci garantisce più sicurezza,
                                    // tuttavia essenso che non sono riuscita a usare due metodi differenti, uno per la password e uno per le altre informazioni, 
                                    //ho optato $_POST per tutte le info inserite dall'autente.
        {
            echo "<tr><td> $k </td><td> $v </td></tr>";

            //il form riconosce quando la password è giusta o sbagliata, ma 
            // 1: stampa 6 volte la scritta 
            // 2: una volta inserita la password tre volte e in maniera errata, l'accesso non viene negato
            // 3: il contatore che dice quanti tentativi mancano non funziona bene, vedi per esempio quando si inserisce la seconda volta la password sbagliata
            // si crea un po' di confusione tra negare l'accesso e contare i tentativi

            if($_POST['password'] == $passwordgiusta & $_POST['Nome' ==  $utentegiusto])
            {
                echo "<h1 style='color:black; text-align:center;'> Hai eseguito l'accesso correttamente! </h1>";
            }else
            {
                $contatoretentativi++;

                if($contatoretentativi >=3)
                {
                    echo "<h1 style='color:black; text-align:center;'> Il tuo accesso è negato. Tentativi di inserimento password esauriti. </h1>";
                }else
                {
                    $tentativi_rimasti = 3 - $contatoretentativi;
                    echo "<h1 style='color:black; text-align:center;'> Password errata. Tentativo $contatoretentativi di 3. </h1>";
                }
            }

        }
            
        ?>
    </tbody>
</table>

</body>
</html>