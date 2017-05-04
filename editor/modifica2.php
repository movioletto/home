<?php
   $nome=$_GET['nome'];
   $dir=$_GET['dir'];
   $codice=$_POST['codice'];
   $codice=rtrim($codice);
   for($i=0;$i<strlen(codice);$i++)
   {
      if(codice[$i]!="/")
         codice[$i]==codice[$i];
      else
         $i++;
   }
   $apri=fopen($nome,"w");
   fwrite($apri, $codice);
   fclose($apri);
   $url=$dir;
   header(sprintf("Location: %s", "../index.php?dir=$url"));

?>