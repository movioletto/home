<?php
   $nome=$_POST['nome'];
   $dir=$_GET['dir'];
   $codice=$_POST['codice'];
   if(file_exists("$nome"))
   {
      $action= "crea3.php?nome=$nome&dir=$dir";
      $stringa="Il file gia esiste<br>Vuoi sovrascrivere il file: $nome<br><form action='crea3.php?nome=$nome&dir=$dir' method='post' name='delete'>Si<input type='radio' name='siNo' value='si'>No<input type='radio' name='siNo' value='no'><input type='hidden' value='$codice' name='codice'><input type='submit' value='Conferma' name='Conferma'></form>";
      echo $stringa;
   }
   else
   {
      $crea = fopen("$dir$nome", "w");
      fwrite($crea, $codice);
      fclose($crea);
      $url=$dir;

      header(sprintf("Location: %s", "../index.php?dir=$url")); 
   }
?>