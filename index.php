<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>Formulário Retroalimentando</title>
</head>
<body>
    <?php        
        $valor1 = $_GET['valor1'] ?? 0;
        $valor2 = $_GET['valor2'] ?? 1;
    ?>

    <header><h1>Formulários Retroalimentando</h1></header>

    <main>
        <h1>Somador de valores</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="valor1"> Dividendo</label>
            <input type="number" name="valor1" id="valor1" min="0"  value="<?=$valor1?>">
            <label for="valor2"> Divisor</label>
            <input type="number" name="valor2" id="valor2" min="1" value="<?=$valor2?>">

            <input type="submit" value="Dividir">
        </form>
    </main>

    <section id="resultado">
        <h2 align="center">Resultado</h2>
        <?php 
            $quociente = (int) ($valor1 / $valor2); 
            $resto = $valor1 % $valor2;            
            
            echo "<ul>";
            echo "<li>Dividendo: $valor1</li>";
            echo "<li>Divisor: $valor2</li>";
            echo "<li>Quociente: $quociente</li>";
            echo "<li>Resto: $resto</li>";
            echo "</ul>";
        ?>
        <br>
        <table class="divisao">
            <tr>
                <td><?=$valor1?></td>
                <td><?=$valor2?></td>
            </tr>
            <tr>
                <td><?=$resto?></td>
                <td><?=$quociente?></td>
            </tr>
        </table>
    </section>
</body>
</html>