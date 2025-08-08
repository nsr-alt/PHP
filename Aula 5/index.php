<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>

        <img src="https://portaln10.com.br/wp-content/uploads/2025/03/black-mirror-poster-gbqux8n5pndwjdrn.jpg" alt="Logo">

        <div class="dropdown">
            <button class="dropbtn">Menu</button>
            <div class="drop-content">
                <a href="sobre.php">Sobre o episódio</a>
                <a href="analise.php">Análise Geral</a>
            </div>
        </div>
    </header>

    <section>

        <h1>Manda Quem Pode</h1>

        <p>Um dos episódios mais enfurecedores da 3° temporada</p><br>

        <img src="https://encenasaudemental.com/wp-content/uploads/2018/01/Capa-Individual-09.png" alt="Placeholder">

    </section>

    <footer>
     <?php
      $usuario_logado = "Natã Santos";
      $data_acesso = date('d/m/Y');
      $pagina_atual = "Início";
    
      echo "Usuário Logado: $usuario_logado <br>";
      echo "Data de acesso: $data_acesso <br>";
      echo "Você está na página: $pagina_atual";
     ?>

        <br><br><p><strong>Site de Fã - 2025</strong></p>
    </footer> 
    
</body>
</html>