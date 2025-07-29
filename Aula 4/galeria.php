<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            margin: 0;
        }

        body {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }

        header {
            background-color: #5386E4;
            display: flex;
            justify-content: space-between;
        }

        header button {
            margin-right: 45px;
            margin-left: 45px;
            margin-top: 20px;
            margin-bottom: 20px;
        }

        section {
            background-color: #FFFF;
            padding: 15px;
            height: 722px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            font-size: 20px;
        }

        footer {
            background-color: #03256C;
            color: white;
            padding: 20px;
        }

        .login{
            background-color:rgb(48, 116, 241);
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
        }
        .dropbtn {
            background-color:rgb(48, 116, 241);
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .drop-content {
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        .drop-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .drop-content a:hover {
            background-color: #ddd;
        }

        .dropdown:hover .drop-content {
            display: block;
        }

        .dropdown:hover .dropbtn {
            background-color: rgb(22, 86, 206);
        }

        .login:hover {
            background-color: rgb(22, 86, 206);
        }
    </style>
</head>
<body>
    <header>
        <div class="dropdown">
            <button class="dropbtn">Menu</button>
            <div class="drop-content">
                <a href="sobre.php">Sobre nós</a>
                <a href="serviços.php">Conheça nossos serviços</a>
                <a href="equipe.php">Veja a equipe</a>
            </div>
        </div>

        <h1>Tech SOS</h1>

        <button class="login">Sair</button>
    </header>

    <section>
    
        <h1>Redes e Conectividade</h1>

        <ul>
            <li>Configuração de roteadores e redes Wi-Fi</li>
            <li>Instalação de redes cabeadas (LAN)</li>
            <li>Compartilhamento de arquivos e impressoras em rede</li>
            <li>Segurança de rede (firewall, senhas, controle de acesso)</li>
        </ul>

        <br>

        <h1>Serviços Corporativos</h1>

        <ul>
            <li>Manutenção preventiva em empresas</li>
            <li>Suporte técnico remoto</li>
            <li>Consultoria para compra de equipamentos</li>
            <li>Montagem de infraestrutura de TI</li>
            <li>Serviços de backup em nuvem</li>
        </ul>

        <br>

        <div class="img">
            <img src="img/Galeria/download.jpg" alt="TI 1">  
            
            <img src="img/Galeria/download (2).jpg" alt="TI 2">

            <img src="img/Galeria/download (3).jpg" alt="TI 3">
        </div>


    </section>
 
    <footer>
     <?php
      $usuario_logado = "Natã Santos";
      $data_acesso = date('d/m/Y');
      $pagina_atual = "Galeria";
    
      echo "Usuário Logado: $usuario_logado <br>";
      echo "Data de acesso: $data_acesso <br>";
      echo "Você está na página: $pagina_atual";
     ?>
    </footer>  
</body>
</html>