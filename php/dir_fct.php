<?php
$dir = "./";
function lectureDossier($dir){
	if (is_dir($dir)){
		if ($dh = opendir($dir)){
			$table = array();
			while(($file = readdir($dh)) !== false){
				array_push($stack, $file);
			}
			closedir($dh);
		}
	}
	return $table;
}

lectureDossier($dir);
?>
