<?php
$affiche=lectureDossier($dir);

function display($affiche) {
    
    foreach ($affiche as $key => $value) {
       
        if (filetype($value) != 'dir' ) {
            
            if (strchr($value, '.png') || strchr($value, '.svg') || strchr($value, '.jpeg') || strchr($value, '.jpg') || strchr($value, '.gif')) { 
               
                echo '<div class="dossier">'.'<img src="./img/pictures.svg" alt="">';
                    echo '<p>'.$value.'</p>';
                    echo '<p>'.'infos'.'</p>';
                echo '</div>';
            } else {
                echo '<div class="dossier">'.'<img src="./img/file.svg" alt="">';
                    echo '<p>'.$value.'</p>';
                    echo '<p>'.'infos'.'</p>';
                echo '</div>';
            }
            
        } else {
            echo '<div class="dossier">'.'<img src="./img/dossier.svg" alt="">';
                echo '<p>'.$value.'</p>';
                echo '<p>'.'infos'.'</p>';
            echo '</div>';
        }
    }
}

display($affiche);

?>