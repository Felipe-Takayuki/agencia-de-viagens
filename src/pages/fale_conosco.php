<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/fale_conosco_style.css">
</head>
<body>
  <header>
    <img src="../assets/LOGO.png" alt="logo" style="width: 90px;">
    <a href="/agencia_de_viagens/index.php">Sobre</a>
    <a href="../pages/pacotes_pagina.php">Planos de Viagens</a>
    <a href="../pages/fale_conosco.php">Fale Conosco</a>
  </header>
  <article>
  <div id="fale-conosco">
   <form action="../form-dados.php" method="post">
    <label for="txt_nome"><p>Nome: </p></label>
    <input type="text" name="nome" id="txt_nome" required>

    <label for="txt_email">Email: </label>
    <input type="email" name="email" id="txt_email" required>
    
    <label for="txt_assunto">Assunto: </label>
    <input type="text" name="assunto" id="txt_assunto" required>

    <p>Mensagem</p>
    <textarea name="mensagem" id="txt_mensagem" cols="30" rows="10" required></textarea>

    <input type="submit" value="Enviar" id="button_form">
   </form>
  </div>
  </article>
  <footer>
    <img src="../assets/LOGO.png">
    <a href="">Código</a>
    <p>Site sem fins lucrativos apenas para estudo, feito por Felipe Takahashi</p>
  </footer>
</body>
</html>