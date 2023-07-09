<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Desafio PHP</title>
</head>
<body>
  <main>
    <?php 
      $cotacao = 4.96;

      $real = 100;

      $dolar = $real / $cotacao;

      $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

      echo "Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a " . numfmt_format_currency($padrao, $dolar, "USD")
    ?>
    <button onclick="javascript:history.go(-1)">Voltar</button>
  </main>
</body>
</html>


