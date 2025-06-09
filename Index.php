<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Edu+SA+Hand:wght@400..700&display=swap" rel="stylesheet">
    <title>Calculadora de IMC</title>
    <link rel="shortcut icon" href="./favicon/imc.png" type="image/x-icon">
</head>

<body>
    <div class="container">
        <form action="" method="get">
            <h1>Calculadora de IMC</h1>
            
            <label for="peso">Peso</label>
            <input type="text" name="peso" id="peso">

            <label for="alt">Altura</label>
            <input type="text" name="alt" id="alt">

            <input type="submit" value="Calcular">

            <div class="resultado">
                <?php
                $peso = floatval(isset($_GET["peso"]) ? $_GET["peso"] : 0);
                $altura = floatval(isset($_GET["alt"]) ? $_GET["alt"] : 0);

                if ($peso > 0 && $altura > 0) {
                    $imc = $peso / ($altura * $altura);
                    $imc_formatado = number_format($imc, 2);

                    echo "Seu IMC é: $imc_formatado<br><br>";

                    if ($imc < 18.5) {
                        echo "Abaixo do peso ideal";
                    } else if ($imc <= 24.9) {
                        echo "Peso normal";
                    } else if ($imc <= 29.9) {
                        echo "Sobrepeso";
                    } else if ($imc <= 34.9) {
                        echo "Obesidade grau I";
                    } else if ($imc <= 39.9) {
                        echo "Obesidade grau II";
                    } else {
                        echo "Obesidade grau III";
                    }
                }
                ?>
            </div>
        </form>
    </div>
</body>

</html>
