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
    <table>
        <tr>
            <th>Matriculas Feitas</th>
            <th>Valor</th>
            <th>Maicon</th>
            <th>Vendedora</th>
            <th>Lucas + Larissa</th>
        </tr>

    <?php
        $matricula = 0;
        $saldo = 0;
        $maicon = 0;
        $vendas = 0;
        $lucas = 0;

        while($matricula < 100){
            $matricula += 10;
            $saldo = $matricula * 150;
            $maicon = $saldo / 3;
            $vendas = $saldo / 3;
            $lucas = $saldo / 3;

            echo "<tr>";
            echo "<td class='valor'>$matricula</td>";
            echo "<td class='valor'>R$ " . number_format($saldo, 2, ',', '.') . "</td>";
            echo "<td class='valor'>R$ " . number_format($maicon, 2, ',', '.') . "</td>";
            echo "<td class='valor'>R$ " . number_format($vendas, 2, ',', '.') . "</td>";
            echo "<td class='valor'>R$ " . number_format($lucas, 2, ',', '.') . " - INVES. PAGO</td>";
            echo "</tr>";
        }
        echo "</table>";
    ?>

</body>
</html>
