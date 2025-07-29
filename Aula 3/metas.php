<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <title>Perfil</title>
   <link rel="stylesheet" href="estilo.css">
</head>

<body>

<?php
 // Páginas de metas

 echo '<h1>Minhas metas para esse ano:</h1><br>';

 /*
    Lista de metas com linhas e textos
 */

 echo '<ol>';
 echo '<li>Terminar o curso.</li>';
 echo '<li>Zerar os jogos no meu video game.</li>';
 echo '<li>Terminar o ensino médio.</li>';

 // Linha horizontal 
 echo '<hr>';

 /*
    Frase motivacional com destaque
 */

 echo "<blockquote>\"Com calma e jeito, chega-se ao bumbum de qualquer sujeito.\"</blockquote>";
?>
    <form action='perfil.php' method='get'>
        <button type='submit'>Ir para a Página do Perfil</button>
    </form>

 <?php
  $usuario_logado = "Natã Santos";
  $data_acesso = date('d/m/Y');
  $pagina_atual = "Metas";

  echo "Usuário Logado: $usuario_logado <br>";
  echo "Data de acesso: $data_acesso <br>";
  echo "Você está na página: $pagina_atual";
 ?>
</body>
</html>
