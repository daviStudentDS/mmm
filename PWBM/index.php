<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício01PHP</title>
</head>
<body>
  <?php
    echo  "Data de Hoje ".date("d/m/Y");
    echo "<br>";
    echo "Esta página foi processada ás".date ("H:i:s");
    echo "<hr>";
    echo "<hr>";

    $hora = date("H");
    $saudacao = " ";


    if($hora >=0 && $hora < 12){
      $saudacao = "Bom Dia !! :)";

    }

    else if($hora >=12 && $hora < 18 ){
        $saudacao = "Boa Tarde !! :[";
    
    }

    else{
        $saudacao = "Boa Noite !! :}";
    }

    print $saudacao;

    /*
      day == dia d
      month == mes M
      Year == ano Y
      Hour == hora H
      minutes == minutos - i
      seconds == segundos - s


    */

  ?>
</body>
</html>