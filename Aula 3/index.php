 <?php
  $titulo = "Página Inicial";
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $titulo ?></title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1><?= $titulo ?></h1>

    <p>Bem-vindo ao nosso site de controle pessoal.</p>
    
    <a href="perfil.php">Ir para o Perfil</a> |
    <a href="metas.php">Ir para as Metas</a> |
    <a href="contato.php">Entre em Contato</a>

    <hr>
    <h3>Informações do Sistema</h3>

 <?php
  $usuario_logado = "Natã Santos";
  $data_acesso = date('d/m/Y');
  $pagina_atual = "Início";

  echo "Usuário Logado: $usuario_logado <br>";
  echo "Data de acesso: $data_acesso <br>";
  echo "Você está na página: $pagina_atual";
 ?>
</body>
</html>