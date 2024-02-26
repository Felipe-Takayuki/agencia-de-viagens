<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../src/style/style.css">
    <link rel="stylesheet" href="../src/style/fale_conosco_style.css">
</head>
<body>
<header>
    <img src="../src/assets/LOGO.png" alt="logo" style="width: 90px;">
    <a href="/agencia_de_viagens/index.php">Sobre</a>
    <a href="pages/pacotes_pagina.php">Planos de Viagens</a>
    <a href="pages/fale_conosco.php">Fale Conosco</a>
  </header>
  <article>
  <section id="dados">
    <div>
    <?php
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $assunto = $_POST['assunto'];
        $mensagem = $_POST['assunto'];

        echo "<h2>Email: $email </h2>";
        echo "<h2>Nome:  $nome </h2>";
        echo "<h2>Assunto: $assunto</h2>";
        echo "<h2>Mensagem: $mensagem</h2>";
    ?>
    </div>
  </section>
  </article>


</body>
</html>

