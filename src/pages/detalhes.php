<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agência de Viagens</title>
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/details_style.css">
    <link rel="shortcut icon" href="../assets/favicon/favicon.ico" type="image/x-icon">
</head>
<body>
    <header>
        <img src="../assets/LOGO.png" alt="logo" style="width: 90px;">
        <a href="/agencia_de_viagens/index.php">Sobre</a>
        <a href="../pages/pacotes_pagina.php">Planos de Viagens</a>
        <a href="../pages/fale_conosco.php">Fale Conosco</a>
  </header>
  <?php
if (isset($_GET['pacote'])) {
    $pacote = $_GET['pacote'];


    $dados_pacote = obterInformacoesDoPacote($pacote);  
    echo "<h1 class='details-title'>{$dados_pacote['titulo']}</h1>";
    echo "<p>{$dados_pacote['descricao']}</p>";
    echo "<p class='details-includes'> Incluidos {$dados_pacote['incluidos']}</p> ";
    echo "<p class='details-subtitle'>Preço por pessoa</p>";
    echo "<h3 class='details-price'>R$ {$dados_pacote['preco']}</h3>";


} else {

    echo "Pacote não encontrado.";
}


function obterInformacoesDoPacote($pacote) {
    $pacotes = array(
        'gramado' => 
            array(
                'titulo' => 'Gramado',
                'descricao' => 'Gramado é um município localizado na Serra Gaúcha, no Rio Grande do Sul, Brasil. Sua população estimada em 2022 é de 40.134 habitantes. A cidade é conhecida por suas atrações turísticas, como o Lago Negro, o Mini Mundo e a Igreja Matriz São Pedro. Com forte influência alemã e italiana, Gramado é uma das mais belas cidades do Brasil e atrai milhões de turistas anualmente.',
                'preco' => '1750',
                'incluidos' => 'Hospedagem para 7 dias, Voo ida e volta'
            ),
        'jericoara' => 
            array(
                'titulo' => 'Jericoara',
                'descricao' => 'Jericoacoara, mais conhecida como Jeri, é uma pequena vila de pescadores localizada no município de Jijoca de Jericoacoara, no Ceará, Nordeste do Brasil. A vila está a cerca de 300 km de Fortaleza, no litoral Oeste do estado e a aproximadamente 580 km de São Luís, no Maranhão. Jeri é um destino encantador, com suas belezas naturais que atraem turistas em busca de cenários paradisíacos.',
                'preco' => '1500',
                'incluidos' => 'Hospedagem para 7 dias, Voo ida e volta'
            ),
        'fernando_de_noronha' => 
            array(
                'titulo' => 'Fernando de Noronha',
                'descricao' => 'Fernando de Noronha, um arquipélago brasileiro localizado no estado de Pernambuco, é um verdadeiro paraíso. Composto por 21 ilhas, ilhotas e rochedos de origem vulcânica, Fernando de Noronha ocupa uma área total de 26 km², sendo que 17 km² pertencem à ilha principal. Ele está situado no Oceano Atlântico, a nordeste do Brasil continental, a 350 km do Rio Grande do Norte e a 545 km da capital pernambucana',
                'preco' => '7500',
                'incluidos' => 'Hospedagem para 7 dias, Voo ida e volta'
            ),
        'paranapiacaba' => 
            array(
                'titulo' => 'Paranapiacaba',
                'descricao' => 'Paranapiacaba, um distrito do município brasileiro de Santo André, é um verdadeiro encanto. Fundada em 1865, a Vila de Paranapiacaba possui um clima aconchegante, com casarões históricos e construções de estilo inglês. Localizada no topo da Serra do Mar, essa charmosa vila oferece uma experiência única para os visitantes.',
                'preco' => '1200',
                'incluidos' => 'Hospedagem para 7 dias, Voo ida e volta'
            ),            
        );

    return isset($pacotes[$pacote]) ? $pacotes[$pacote] : null;
}
?>
  <footer>
    <img src="../assets/LOGO.png">
    <a href="">Código</a>
    <p>Site sem fins lucrativos apenas para estudo, feito por Felipe Takahashi</p>
  </footer>
</body>
</html>



