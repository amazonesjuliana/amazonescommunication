<?php
    $url = $_SERVER['REQUEST_URI'];
    $explode_url = explode("com.br/", $url);
    $pag_atual = $explode_url[1];

    echo "link: ".$url;
?>

<div class="header">
    <div class="logo-header">
        <a href="./"><img src="./assets/logos/amazones.png" alt="Logo da empresa Amazones Communication"></a>
    </div>

    <div class="nav-header">
        <a href="./portifolio.php" <?php if($pag_atual == "portifolio.php"){ ?>class="pag-atual"<?php } ?>>PORTFÓLIO</a>
        <span>|</span>
        <a href="./sobre.php" <?php if($pag_atual == "sobre.php"){ ?>class="pag-atual"<?php } ?>>SOBRE</a>        
        <span>|</span>
        <a href="./parceiros.php" <?php if($pag_atual == "parceiros.php"){ ?>class="pag-atual"<?php } ?>>PARCEIROS</a>
        <span>|</span>
        <a href="./contato.php" <?php if($pag_atual == "contato.php"){ ?>class="pag-atual"<?php } ?>>CONTATO</a>
    </div>
        
    <div class="idiomas-header">
        <img src="./assets/images/bandeira_brasil.jpg" alt="Bandeira do Brasil">
        <img src="./assets/images/bandeira_reino_unido.jpg" alt="Bandeira do Reino Unido">
        <img src="./assets/images/bandeira_espanha.jpg" alt="Bandeira da Espanha">
    </div>
</div>