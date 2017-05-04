<html>
<head><title>rinomina file o cartella</title>
</head>
<body>
<?php
   $nome=$_GET['nome'];
   $dir=$_GET['dir'];
?>
Inserire un nuovo nome da dare a: <?php echo $nome; ?>
<form action="<?php echo "rinomina2.php?nome=$nome&dir=$dir"; ?> " method="post" name="rinomina">
Nuovo nome: <input type="text" name="nuonom">
<input type="submit" name="rinomina" value="rinomina">
</form>
</body>
</html>









