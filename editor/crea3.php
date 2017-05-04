<?php
   $nome=$_GET['nome'];
   $dir=$_GET['dir'];
   $codice=$_POST['codice'];
   $siNo=$_POST['siNo'];
   if($siNo=="si")
   {
      $crea = fopen("$dir$nome", "w");
      fwrite($crea, $codice);
      fclose($crea);
      $vai= "../index.php?dir=$dir";
      header(sprintf("Location: %s", $vai)); 
   }
   else
   {
      $vai= "../index.php?dir=$dir";
      header(sprintf("Location: %s", $vai)); 
   }
?>