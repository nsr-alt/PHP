<?php
  include "header.php";

  echo "<h2>Sanções Aplicadadas - Comparação</h2>";

  $paisA = 10; //sanções aplicadas
  $paisB = 5;
 
  echo "<p>O Rússia recebeu $paisA sanções, enquanto Kosovo recebeu $paisB.</p>";

  echo "<p><strong>Total de sanções aplicadas</strong> ".($paisA + $paisB)."</p>";

  include "footer.php";
?>