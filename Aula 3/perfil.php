<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <title>Perfil</title>
   <link rel="stylesheet" href="estilo.css">
</head>

<body>

<?php
 /*
    Bloco de apresentação
    Aqui vamos exibir o nome, idade e profissão
 */

 echo '<h1>Apresentação</h1>';
 echo 'Nome: Natã Santos dos Reis <br>';
 echo 'Idade: 17 anos <br>';
 echo 'Profissão: Nenhuma <br>';

 echo '<hr>';  //linha horizontal para separar seções

 //Informações sobre gostos pessoais
 echo '<h2>Meus Interesses</h2>';
 echo 'Gosto de jogos<br>';
 echo 'Gosto de carros';

 echo '<hr>'; // Separar seção
 
 // contato ficticio
 echo '<h2>Contato<br>';
 echo 'E-mail: nsr@gmail.com<br>';
 echo 'instagram:<br>';

 /*
    Exibição de uma citação inspiradora
    usando quebra de lina com <br> e aspas
  */

 echo '<hr>';
 echo '<h2>Frase que me inspira</h2>';
 echo '\'Se filha da puta voasse, não daria para ver o céu.\'<br>';

 // Final do script

 echo '<hr>';
 echo "<p style='text-align: center;'>Página gerada com PHP</p>";

 /*
    botões
 */

 echo '<hr>';
 echo "<form action='contato.php' method='get'>";
 echo "<button type='submit'>Ir para a Página de Contato</button>";
 echo "</form>";

 echo "<form action='metas.php' method='get'>";
 echo "<button type='submit'>Ir para a Página de Metas</button>";
 echo "</form>";

 echo "<form action='index.php' method='get'>";
 echo "<button type='submit'>Ir para o Início</button>";
 echo "</form>";
?>

 <?php
  $usuario_logado = "Natã Santos";
  $data_acesso = date('d/m/Y');
  $pagina_atual = "Perfil";

  echo "<br>Usuário Logado: $usuario_logado <br>";
  echo "Data de acesso: $data_acesso <br>";
  echo "Você está na página: $pagina_atual";
 ?>
</body>
</html>