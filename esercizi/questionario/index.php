<!DOCTYPE html>
<html lang="en">
<head>

    <title>Form di accesso con password</title>

</head>

<body>

<h1><b> BENVENUT* NEL FORM CHE HAI COMPILATO, QUESTE SONO LE TUE INFORMAZIONI. </b></h1>

<table class="table">
    <thead>
        <tr>
            <th>COSA RICHIESTA</th>
            <th>INFORMAZIONI</ht>
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