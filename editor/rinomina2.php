<?php
   $nome=$_GET['nome'];
   $nuonom = $_POST['nuonom'];
   $url=$_GET['dir'];
   if(file_exists("$nome"))
   {
      $stringa="Il file gia esiste<br>Non posso sostituirlo.<a href='rinomina.php?nome=$nome&dir=$dir'>Cambia nome</a> o <a href='elenco.php?dir=$url'>torna all'elenco</a>.";
      echo $stringa;
   }
   else
   {
      rename($_GET['nome'], "$nuonom");
      $vai= "../index.php?dir=$url";
      header(sprintf("Location: %s", $vai));
   }
?>