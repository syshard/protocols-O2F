<?php
    // Defina o caminho da pasta
    $folder = './php/files/';

    // Verifique se a pasta existe
    if(is_dir($folder)) {
        // Abra a pasta
        if($handle = opendir($folder)) {
            // Loop através de todos os arquivos e pastas dentro da pasta
            while(false !== ($file = readdir($handle))) {
                if($file != "." && $file != "..") {
                    // Verifique se o arquivo é um video
                    if(preg_match("/(\.mp4|\.avi|\.mkv|\.wmv|\.flv)$/i", $file)) {
                        // Exiba o video
                        echo '<video width="320" height="240" controls>';
                        echo '<source src="'.$folder.'/'.$file.'" type="video/mp4">';
                        echo '</video><br />';
                    }
                }
            }
            // Feche a pasta
            closedir($handle);
        }
    }
?>
