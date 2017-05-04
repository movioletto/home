<?php
   $nome=$_GET['nome'];
   $url=$_GET['dir'];
   $siNo=$_POST['siNo'];
   $vai="../index.php?dir=$url";
   if($siNo=="si"){
      rmdir($nome);
      header(sprintf("Location: %s", $vai));
   }
   else header(sprintf("Location: %s", $vai)); 
?>