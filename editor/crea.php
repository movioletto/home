<html>
<head><title>editor</title>
</head>
<body>
<?php
   $dir=$_GET['dir'];
   $action="crea2.php?dir=$dir";
?>
Inserisci qui il testo del file:
<form method="post" action="<?php echo $action; ?> " name="formeditor">
Codice<br>
<textarea name="codice" rows="5" cols="40">
</textarea><br>
Nome file:<input type="text" name="nome" value=""><br>
<input type="submit" name="submit" value="Salva">
</form>
</body>
</html>
