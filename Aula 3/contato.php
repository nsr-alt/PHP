<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <title>Perfil</title>
   <link rel="stylesheet" href="estilo.css">
</head>

<body>

<?php
 // Página de Contato

 echo '<h1>Entre em Contato</h1>';

 echo '<p>Você pode me encontrar nas redes sociais:</p>';

 echo '<ul>';
 echo '<li>Email: nsr@gmail.com</li>';
 echo '<li>Whatsapp: (11) 55986-8787</li>';
 echo '</ul>';

 echo "<hr>"; // separar seção
?>

    <form action='perfil.php' method='get'>
        <button type='submit'>Voltar ao Perfil</button>
    </form>

    <form action='metas.php' method='get'>
        <button type='submit'>Ir para as metas</button>
    </form>

 <?php
  $usuario_logado = "Natã Santos";
  $data_acesso = date('d/m/Y');
  $pagina_atual = "Contato";

  echo "Usuário Logado: $usuario_logado <br>";
  echo "Data de acesso: $data_acesso <br>";
  echo "Você está na página: $pagina_atual";
 ?>
</body>
</html>    

