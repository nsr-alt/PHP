
<?php include 'header.php'; ?>

 <h2>Entre em Contato</h2><br>
 <form action="processar.php" method="POST">
     <label>Nome:</label><br>
     <input type="text" name="nome" required><br><br>

     <label>Email:<label><br>
     <input type="email" name="email" required><br><br>

     <label>Mensagem:<label><br>
     <textarea name="mensagem" required></textarea><br><br>

     <input type="submit" value="Enviar">
 </form>

 <?php include 'footer.php'; ?>
