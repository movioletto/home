<html>
<head><title></title>
</head>
<body>
<?php
   $nome=$_GET['nome'];
   $dir=$_GET['dir'];
?>
Vuoi cancellare il file:<?php echo $nome ?>
<form action="<?php echo "cancFile2.php?nome=$nome&dir=$dir"; ?> " method="post" name="delete">
Si<input type="radio" name="siNo" value="si">
No<input type="radio" name="siNo" value="no">
<input type="submit" value="Conferma" name="Conferma">
</form>
</body>
</html>
