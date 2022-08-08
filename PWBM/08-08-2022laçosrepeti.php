<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Estrutura de Repetição em PHP</title>
</head>
<body>

<!-- exercicio 2 while-->

    <table border="1" width="40%">
    
        <?php
        $opa =0;
        for($opa=0; $opa <= 20; $opa ++){
        $pareando = ($opa % 2 == 0? "green" : "greenyellow");
        $txtnum = "O número se trata de um:"  .$pareando;

        echo "<tr>
                <td width='5%' style ='background-color: $pareando;'>$opa</td>
                <td width='20%' style ='background-color: $pareando;'>$txtnum</td>
                </tr>";
        }
                ?>

                </table>
    
</body>
</html>