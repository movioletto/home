<?php

	function elencaDir($dirname)
	{
		$arrayDir=Array();
		if(file_exists($dirname))
		{
			$handle = opendir($dirname);
	 		while (false !== ($dir = readdir($handle))) 
			{ 
				if(is_dir($dirname.$dir))
	    			{
	      				array_push($arrayDir,$dir);
				}
			}
			$handle = closedir($handle);
		}
		sort($arrayDir);
		return $arrayDir;
	}
	function elencaFile($dirname)
	{
		$arrayFiles=Array();
		if(file_exists($dirname))
		{
			$handle = opendir($dirname);
	 		while (false !== ($file = readdir($handle))) 
			{ 
	   			if(is_file($dirname.$file))
				{
					array_push($arrayFiles,$file);
	   			}
			}
			$handle = closedir($handle);
		}
		sort($arrayFiles);
		return $arrayFiles;
	}
	function cancellaDir($dir)
	{
		rmdir($dir);
		header(sprintf("Location: %s", "./"));
	}
	function cancellaFile($file)
	{
		unlink($nome);
		header(sprintf("Location: %s", "./")); 
	}
     
	$arrayDir=array();
	if(empty($_GET)) $dir="./";
	else $dir=$_GET['dir'];
	$arrayDir=elencaDir($dir);
	$stringa="<center><table border='1'><tr><td align='left'><form action='editor/crea.php?dir=$dir' method='post' name='crea'><input type='submit' name='Crea' value='Crea'></form></td></tr>";
	$stringa.= "<tr><td><font color='red'><a href='editor/upload1.php'>UPLOAD</a> </font></td></tr>";
	$stringa.= "<tr><td><font color='red'><a href='phpmyadmin/'>phpmyadmin/</a> </font></td></tr>";
	$stringa.= "<tr><td><font color='red'><a href='phpBB3/'>phpBB3/</a> </font></td></tr>";
	$stringa.= "<tr><td><font color='red'><a href='wordpress/'>wordpress/</a> </font></td></tr>";
	$stringa.= "<tr><td><font color='red'><a href='drupal/'>drupal/</a> </font></td></tr>";
	$stringa.= "<tr><td><font color='red'><a href='joomla/'>joomla/</a> </font></td></tr>";
	$stringa.= "<tr><td><font color='red'><a href='owncloud/'>owncloud/</a> </font></td></tr>";
	for($i=0;$i<count($arrayDir);$i++)
		$stringa.= "<tr><td><a href='index.php?dir=$dir$arrayDir[$i]/'>$arrayDir[$i]/</a> </td><td><a href='editor/rinomina.php?nome=$dir$arrayDir[$i]&dir=$dir'>rinomina</a></td><td><a href='editor/cancDir.php?nome=$dir$arrayDir[$i]&dir=$dir'>Cancella</a></td></tr>";
	$arrayFiles=array();
	$arrayFiles=elencaFile($dir);
	for($i=0;$i<count($arrayFiles);$i++)
		$stringa.= "<tr><td><a href='$dir$arrayFiles[$i]'>$arrayFiles[$i]</a> </td><td><a href='editor/rinomina.php?nome=$dir$arrayFiles[$i]&dir=$dir'>rinomina</a></td><td><a href='editor/cancFile.php?nome=$dir$arrayFiles[$i]&dir=$dir'>Cancella</a></td><td><a href='editor/modifica.php?nome=$dir$arrayFiles[$i]&dir=$dir'>Modifica</a></td></tr>";
	$stringa.="</table></center>";
	echo $stringa; 


// onClick=\"if(confirm('Vuoi cancellare la cartella?')) <?php cancellaDir() 
// else \"
?>


