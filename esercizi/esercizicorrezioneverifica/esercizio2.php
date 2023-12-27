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

    <?php

    $passwordgiusta = "info2023";
    $utentegiusto = "utente";
    $contatoretentativi = 0;

    if($_GET['password'] == $passwordgiusta && $_GET['nome'] ==  $utentegiusto && $contatoretentativi <= 3)
    {

        echo "<h1 style='color:black; text-align:center;'> Hai eseguito l'accesso correttamente! </h1>";

    }else if($_GET['password'] == $passwordgiusta && $_GET['nome'] !=  $utentegiusto && $contatoretentativi <= 3)
    {

        echo "<h1 style='color:black; text-align:center;'> Nome utente sbagliato! Riprova a rienserire i tuoi dati fino allo scadere dei tentativi. </h1>";

    }else if($_GET['password'] != $passwordgiusta && $_GET['nome'] ==  $utentegiusto && $contatoretentativi <= 3)
    {

        echo "<h1 style='color:black; text-align:center;'> Passoword errata. Riprova a rienserire i tuoi dati fino allo scadere dei tentativi. </h1>";

    }else
    {

        echo "<h1 style='color:black; text-align:center;'> Il tuo accesso è negato. Password e/o utente sono errati! Attenzione hai tre tentativi. </h1>";
        
    }
            
        ?>
    </tbody>
</table>

</body>
</html>