<html>

<head><title></title>

</head>

<body>

<?php

   $nome=$_GET['nome'];

   $dir=$_GET['dir'];

?>

<center>

<table border='1'>

<tr><td>

Vuoi cancellare la cartella:

<form action="<?php echo "cancDir2.php?nome=$nome&dir=$dir"; ?> " method="post" name="delete">

Si<input type="radio" name="siNo" value="si">

No<input type="radio" name="siNo" value="no">

<input type="submit" value="Conferma" name="Conferma">

</form>

</td></tr>

</center>

</body>

</html>