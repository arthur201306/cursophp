<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Desafio PHP</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <main>
            <?php 
                $min =  1_320;
                $salario = $_GET["sal"] ?? 0;
            ?>
            <h1>Informe o seu salário</h1>
            <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
                <label for="sal">Salário</label>
                <input type="number" name="sal" id="sal" value="<?=$salario?>" step="0.01">
                <p>Considerando o salário minímo de <strong>R$ <?=number_format($min, 2, ",", ".")?></strong></p>
                <input type="submit" value="Calcular">
            </form>
        </main>
        
        <section id="resultado">
            <h2>Resultado final</h2>
            <?php 
                $tot = intdiv($salario, $min);
                $dif = $salario % $min;

                echo "<p>Quem recebe um salário de $salario ganha $tot salários mínimos + R\$ ". number_format($dif, 2, ",", ".") ."</p>"
            ?>
        </section>
    </body>
</html>