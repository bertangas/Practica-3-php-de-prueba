<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tabla de divisores (50 a 60) dinámica</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fafafa;
        }
        table {
            border-collapse: collapse;
            margin: 30px auto;
            border: 2px solid #5e4b9b;
        }
        th, td {
            border: 1px solid #5e4b9b;
            width: 40px;
            height: 30px;
            text-align: center;
        }
        th {
            background-color: #c8a2ff;
            color: #000;
            font-weight: bold;
        }
        td:first-child {
            background-color: #c8a2ff;
            font-weight: bold;
        }
        .fila-par td {
            background-color: #fff2cc;
        }
        .fila-impar td {
            background-color: #ffe6b3;
        }
    </style>
</head>
<body>

    <?php
   
    function recupera(): array {
        $min = 1; 
        $max = 10;
        
       
        if (isset($_POST['num_min']) && isset($_POST['num_max'])) {
            $min = intval(value: $_POST['num_min']);
            $max = intval(value: $_POST['num_max']);
        }
        
       
        return [$min, $max]; 
    }

  
    list($divisor_min, $divisor_max) = recupera();
    ?>

    <table>
        <tr>
            <th></th>
            <?php 
   
            for ($num = 50; $num <= 60; $num++) {
                echo "<th>$num</th>";
            }
            ?>
        </tr>

        <?php
    
       
        for ($divisor = $divisor_min; $divisor <= $divisor_max; $divisor++) {
        
  
            $claseFila = ($divisor % 2 == 0) ? 'fila-par' : 'fila-impar';
            echo "<tr class='$claseFila'>";
            echo "<td>$divisor</td>";
                
            for ($num = 50; $num <= 60; $num++) {
                
                if ($num % $divisor == 0) {
                    echo "<td>*</td>";
                } else {
                    echo "<td>-</td>";
                }
            }

            echo "</tr>";
        }
        ?>
    </table>

</body>
</html>
