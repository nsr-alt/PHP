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

        h2 {
            font-size: 20px;
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

        .img {
            display: flex;
        }

        .member {
            margin-left: 20px;
            margin-right: 20px;
            margin-top: 20px;
            margin-bottom: 20px;
            text-align: center;
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
                <a href="galeria.php">Ilustrações e trabalhos feitos</a>
            </div>
        </div>

        <h1>Tech SOS</h1>

        <button class="login">Sair</button>
    </header>

    <section>
    
        <div class="img">

            <div class="member">
                <img src="img/Equipe/Goro.jpg" alt="Integrante 1"> 
                <h2>Goro Majima</h2>               
            </div>
  
            <div class="member">
                <img src="img/Equipe/Snoop.jpg" alt="Integrante 2">   
                <h2>Snoop Dogg</h2>      
            </div>

            <div class="member">
                <img src="img/Equipe/Travis.jpg" alt="Integrante 3"> 
                <h2>Travis Touchdown</h2>               
            </div>

        </div>

        <div class="img">

            <div class="member">
                <img src="img/Equipe/Dante.jpg" alt="Integrante 4"> 
                <h2>Anthony Redgrave</h2>               
            </div>
  
            <div class="member">
                <img src="img/Equipe/Joe.jpg" alt="Integrante 5">          
                <h2>Joe Yabuki</h2>      
            </div>

        </div>


    </section>
 
    <footer>
     <?php
      $usuario_logado = "Natã Santos";
      $data_acesso = date('d/m/Y');
      $pagina_atual = "Equipe";
    
      echo "Usuário Logado: $usuario_logado <br>";
      echo "Data de acesso: $data_acesso <br>";
      echo "Você está na página: $pagina_atual";
     ?>
    </footer>  
</body>
</html>