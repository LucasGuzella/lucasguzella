<!DOCTYPE html>
<html>
<head>
    <title>Financeiro</title>
    <link rel="shortcut icon" href="img/logo.png" width="35px"/>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            color: #333;
        }


        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            padding: 8px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
            color: rgb(25, 195, 125);
        }

        h1, h2, h3 {
            color: rgb(25, 195, 125);
        }

        p {
            margin-top: 20px;
        }

        .valor {
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"] {
            padding: 8px;
            width: 200px;
        }

        input[type="submit"] {
            padding: 10px 20px;
            border-radius: 5px;
            background-color: rgb(25, 195, 125);
            color: white;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: rgb(0, 225, 125);
        }
    </style>
</head>
<body>
    <div style="text-align: center; margin-bottom: 1.5em;">
        <h2>Rendimento com Juros Compostos</h2>
        <form method="POST" action="">
            <label for="valor_inicial">Valor a depositar todo mês:</label>
            <input type="text" name="valor_inicial" id="valor_inicial" required value="<?php echo isset($_POST['valor_inicial']) ? $_POST['valor_inicial'] : ''; ?>"><br><br>

            <input type="submit" value="Calcular">
        </form>
    </div>
    <hr>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $valorInicial = $_POST["valor_inicial"];
        $valorDesejado = 500000;
        $jurosMensais = 0.008; // 0.8% ao mês

        $meses = 0;
        $saldo = 0;
        $rendeu = 0;

        echo "<table>";
        echo "<tr>";
        echo "<th>Mês</th>";
        echo "<th>Valor Atual</th>";
        echo "<th>Rendimento</th>";
        echo "<th>Rendimento Total</th>";
        echo "</tr>";

        while ($saldo < $valorDesejado && $meses < 360) {
            $saldo += $valorInicial;
            $rendimento = $saldo * $jurosMensais;
            $saldo += $rendimento;
            $meses++;
            $rendeu += $rendimento;

            echo "<tr>";
            echo "<td class='valor'>$meses</td>";
            echo "<td class='valor'>R$ " . number_format($saldo, 2, ',', '.') . "</td>";
            echo "<td class='valor'>R$ " . number_format($rendimento, 2, ',', '.') . "</td>";
            echo "<td class='valor'>R$ " . number_format($rendeu, 2, ',', '.') . "</td>";
            echo "</tr>";
        }

        echo "</table>";
        echo "<p>Foram necessários $meses meses para alcançar o valor desejado de R$ " . number_format($saldo, 2, ',', '.') . ".</p>";
    }
    ?>
</body>
</html>
