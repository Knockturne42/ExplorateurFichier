<?php
$dir = "./sources/php explorer/";
function lectureDossier($dir){
	if (is_dir($dir)){
		if ($dh = opendir($dir)){
			$table = array();
			while(($file = readdir($dh)) !== false){
				array_push($table, $file);
			}
			closedir($dh);
		}
	}
	return $table;
}
?>
