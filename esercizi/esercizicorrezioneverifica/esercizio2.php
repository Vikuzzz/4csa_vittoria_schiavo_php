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

    if($_GET['password'] == $passwordgiusta && $_GET['Nome'] ==  $utentegiusto && $contatoretentativi <= 3)
    {

        echo "<h1 style='color:black; text-align:center;'> Hai eseguito l'accesso correttamente! </h1>";

    }else
    {
        if($contatoretentativi > 3)
        {

            echo "<h1 style='color:black; text-align:center;'> Il tuo accesso è negato. Tentativi di inserimento password esauriti. </h1>";
        
        }
    }
            
        ?>
    </tbody>
</table>

</body>
</html>