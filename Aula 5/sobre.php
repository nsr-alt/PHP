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
                <a href="index.php">título do episódio</a>
                <a href="analise.php">Análise Geral</a>
            </div>
        </div>
    </header>

    <section>

        <h1>Sinopse do episódio</h1>

        <p>A dinâmica do episódio se dá na coleta de dados comprometedores para alguém e ameaça constante 
            de exposição virtual em troca de favores extremos. Kenny é filmado se masturbando em frente 
            seu notebook. Fazendo passar a obedecer às ordens de desconhecidos que iriam expor sua 
            intimidade perversa. A angústia aqui se dá na consciência do que é errado e da 
            repercussão, da reação familiar e o desdobramento para uma prisão. Uma conclusão 
            estigmatizada como punição. Sendo necessário até roubar um banco ou mesmo matar 
            outra pessoa com as próprias mãos, tudo para evitar um contato mais direto consigo.
        </p><br>

        <img src="https://static1.srcdn.com/wordpress/wp-content/uploads/2020/12/Black-mirror-Shut-up-and-dance-.jpg" alt="Placeholder">

    </section>

    <footer>
     <?php
      $usuario_logado = "Natã Santos";
      $data_acesso = date('d/m/Y');
      $pagina_atual = "Sobre";
    
      echo "Usuário Logado: $usuario_logado <br>";
      echo "Data de acesso: $data_acesso <br>";
      echo "Você está na página: $pagina_atual";
     ?>

        <br><br><p><strong>Site de Fã - 2025</strong></p>
    </footer> 
    
</body>
</html>