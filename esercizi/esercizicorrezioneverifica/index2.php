<!DOCTYPE html>
<html lang="en">
<head>

    <title>Form di accesso con password</title>

</head>

<body bgcolor="#2CD3E7">

<h1 style="color:#A52A2A; text-align: center; font-family: Times New Roman', Times, serif;"><b> BENVENUT* NEL FORM CHE HAI COMPILATO, QUESTE SONO LE TUE INFORMAZIONI. </b></h1>

    <?php

    $passwordgiusta = "info2023";
    $utentegiusto = "utente";
    $contatoretentativi = 0;
    $tentativimassimi = 3;

    if($_GET['password'] == $passwordgiusta && $_GET['nome'] ==  $utentegiusto && $contatoretentativi <= $tentativimassimi)
    {

        echo "<h1 style='color:black; text-align:center;'> Hai eseguito l'accesso correttamente! </h1>";

    }else if($_GET['password'] == $passwordgiusta && $_GET['nome'] !=  $utentegiusto && $contatoretentativi <= $tentativimassimi)
    {

        echo "<h1 style='color:black; text-align:center;'> Nome utente sbagliato! Riprova a rienserire i tuoi dati fino allo scadere dei tentativi. </h1>";
        echo "<a href=\"esercizio2.html\">Torna al form</a>";
        $contatoretentativi++;

    }else if($_GET['password'] != $passwordgiusta && $_GET['nome'] ==  $utentegiusto && $contatoretentativi <= $tentativimassimi)
    {

        echo "<h1 style='color:black; text-align:center;'> Passoword errata. Riprova a rienserire i tuoi dati fino allo scadere dei tentativi. </h1>";
        echo "<a href=\"esercizio2.html\">Torna al form</a>";
        $contatoretentativi++;

    }else if($_GET['password'] != $passwordgiusta && $_GET['nome'] !=  $utentegiusto && $contatoretentativi <= $tentativimassimi)
    {

        echo "<h1 style='color:black; text-align:center;'> Passoword e nome utente errati. Riprova a rienserire i tuoi dati fino allo scadere dei tentativi. </h1>";
        echo "<a href=\"esercizio2.html\">Torna al form</a>";
        $contatoretentativi++;

    }
    else if("$contatoretentativi > $tentativimassimi")
    {

        echo "<h1 style='color:black; text-align:center;'> Il tuo accesso è negato. Password e/o utente sono errati! Attenzione hai tre tentativi. </h1>";

    }
            
    ?>

</body>
</html>