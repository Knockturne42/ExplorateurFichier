<?php
	$dir = "./";
	function is_my_dir($dir)
	{
		if (is_dir($dir)) {
			if ($dh = opendir($dir))
			{
				while(($file = readdir($dh)) !== false)
				{
					echo "fichier/dossier: ".$file." type:".filetype($file).'<br>';
				}
				closedir($dh);
			}
		}
	}

	is_my_dir($dir);
?>