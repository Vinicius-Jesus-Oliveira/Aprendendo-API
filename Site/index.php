<?php

    require_once 'Models/hgAPI.php';

    $hgAPI = new HG_API();
    $Clima = $hgAPI->GetClima();
    $Dolar = $hgAPI->GetDolar();
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API e POO</title>

    <style>
        body
        {
           
        }
    </style>
</head>
<body>
    <div>
        <h1 style="text-align: center;"> Bem vindo ao site pega moedas </h1>
        
        <br/>

        <div style="margin-left: 10%; font-size: 20px;" class="Moeda" id="Dolar">
            <h4> Dólar </h4>
            <p> Preço de compra: R$<?php echo $Dolar['buy']; ?> </p>
            <p> Preço de venda: R$<?php echo $Dolar['sell']; ?> </p>
            <p> variação <?php echo $Dolar['variation']; ?> </p>
        </div>

        <div  style="margin-right: 10%; font-size: 20px;" class="Clima">
            <h4> Clima </h4>
            <p> Temperatura: <?php echo $Clima['temp']; ?>°C </p>
            <p> Ultima atualização feita ás <?php echo $Clima['time']; ?> </p>
            <p> Descrição: <?php echo $Clima['description']; ?> </p>
            <p> Umidade: <?php echo $Clima['humidity']; ?>% </p>

            <h3> Amanhã </h3>
            <?php $Amanha = $Clima['forecast'][0]; ?>
            <p> Data: <?php echo $Amanha['date']; ?>, <?php echo $Amanha['weekday']; ?> </p>
            <p> Máxima: <?php echo $Amanha['max']; ?>°C </p>
            <p> Mínima: <?php echo $Amanha['min']; ?>°C </p>
        </div>
    </div>
    
</body>
</html>