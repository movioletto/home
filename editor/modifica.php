<?php
   $nome=$_GET['nome'];
   $dir=$_GET['dir'];
   $apri=fopen($nome,"r");
   $codice=fread($apri, filesize($nome));
   $stringa= "Stai modificando: $nome<br><form action='modifica2.php?nome=$nome&dir=$dir' method='post' name='modifica'><textarea name='codice' rows='5' cols='40'>$codice</textarea><br><input type='submit' name='submit' value='Modifica'><input type='button' name='annulla' value='Annulla'></form>";
   echo $stringa;
   fclose($apri);
?>