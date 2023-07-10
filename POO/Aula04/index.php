<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO - Programação Orientada a Objeto</title>
  </head>
  <body>
    <main>
      <h1>Testando a classe Caneta</h1>
      <pre>
        <?php 
          require_once 'Caneta.php';

          $c1 = new Caneta("BIC Cristal", "Azul", 0.5);
          $c1->setModelo("Pilot Rollerball");
          echo "<h2>" . $c1->getModelo() . "</h2>";

          print_r($c1);
        ?>
      </pre>
    </main>
  </body>
</html>