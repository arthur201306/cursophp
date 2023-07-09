<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Testando classes</title>
</head>
<body>
  <h1>Teste de classes</h1>
  <pre>
    <?php 
      require_once 'Caneta.php';

      $c1 = new Caneta;
      $c1->cor = "Azul";
      $c1->tampada = false;
      $c1->destampar();
      $c1->rabiscar();
    ?>
  </pre>
</body>
</html>