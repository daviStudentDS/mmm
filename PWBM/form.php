<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário método 01/08</title>
</head>
<body>
   <!-- <form action = "POST" action ="dados.php">
        <imput type ="text" name="cliente" id = ""><br>
        <h1>Informe o seu Sexo irmão(ã)</h1>
        <select nome ="sexo" id=""><br>
        <option value="poa">Masculino</option>
        <option value="poa">Feminino</option>
</select>

<br>
<br>

<imput type="rádio" nome="Solteira" id=""> 
Solteira
<imput type="rádio" nome="CASADA!?" id=""> 
Casada
<imput type="rádio" nome="Divorciada" id=""> 
Divorciada

</form> -->echo

<?php
$num= 2;
$resultado ="";

if($num % 2 == 0 ){
    $resultado = $num."é um número par.";

}
else{
    $resultado = $num."é um número impar";
}
?>
</body>
</html> 
