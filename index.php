<?php


if (isset($_POST)) {
    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];
    $operacoes = $_POST['operacoes'];
}
switch ($operacoes) {
    case 'somar':
        $resultado = $numero1 + $numero2;
        break;
    case 'subtrair':
        $resultado = $numero1 - $numero2;
        break;
    case 'dividir':
        $resultado = $numero1 / $numero2;
        break;
    case 'multiplicar':
        $resultado = $numero1 * $numero2;
        break;
    case 'media':
        $resultado = ($numero1 + $numero2) / 2;
        break;
    case 'resto':
        $resultado = $numero1 % $numero2;
        break;
}



?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <style>
        body {
            background: rgb(132, 196, 233);
            background: linear-gradient(90deg, rgba(132, 196, 233, 1) 3%, rgba(194, 226, 245, 1) 35%, rgba(88, 178, 232, 1) 100%);
            color: white;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 15px;
        }

        form {
            margin: 20px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        fieldset {
            width: 300px;
            height: 330px;
            background-color: #79A9F5;
            border-radius: 10px;
            border: 1px solid #4B7BF5;
            box-shadow: 10px 10px 5px lightblue;
        }

        legend {
            font-size: 20px;
            background-color: #4B7BF5;
            border-radius: 10px;
            padding: 8px;
            width: 150px;
            text-align: center;
        }

        div {
            margin-top: 20px;
        }

        input {
            padding: 5px;
            border: none;
            border-radius: 10px;
            margin-top: 8px;
        }

        select {
            padding: 5px;
            border: none;
            border-radius: 10px;
            background-color: #4B7BF5;
            color: white;
        }

        .botao {
            padding: 8px;
            width: 100px;
            border: none;
            border-radius: 10px;
            background-color: #4B7BF5;
            color: white;
        }

        span {
            position: absolute;
            margin-top: 10px;
            font-size: 16px;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <form action="calc.php" method="POST">
        <fieldset>
            <legend>Calculadora</legend>
            <div>
                <label>Digite o primeiro número:</label>
                <input type="number" name="numero1" id="numero1" required>
                <br><br>
                <select name="operacoes" value="operacoes" id="operacoes" required>
                    <option value="somar">Somar</option>
                    <option value="subtrair">Subtrair</option>
                    <option value="dividir">Dividir</option>
                    <option value="multiplicar">Multiplicar</option>
                    <option value="media">Média</option>
                    <option value="resto">Resto da divisão</option>
                </select>
                <br><br>
                <label>Digite o segundo número:</label>
                <input type="number" name="numero2" id="numero2" required>
                <input type="submit" value="calcular" class="botao">
                <br><br>
                <input type="reset" value="limpar" class="botao">
                <br><br>
                <span>Resultado:
                    <?= $resultado ?>
                </span>

            </div>

        </fieldset>

    </form>

</body>

</html>
