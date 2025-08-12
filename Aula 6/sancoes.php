<?php
  include "header.php";

  echo "<h2>Lista de Sanções</h2>";

  $sancoes = [
            "Congelamento de Ativos",
            "Proibição de Viagens",
            "Restrição de Transações Financeiras",
            "Embargo Comercial",
            "Suspensão de Acordos Diplomáticos"
  ];

 
  echo "<ul>";
  foreach ($sancoes as $sancao) {
    echo "<li>$sancao</li>";
  }

  echo "</ul>";

  include "footer.php";
?>
