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
            foreach ($_GET as $k => $v) 
            {
                //$v = $v ?: "NULL";
                echo "<tr> <td> $k </td> <td> $v </td> </tr>";
            }
        ?>
    </tbody>
</table>

</body>
</html>