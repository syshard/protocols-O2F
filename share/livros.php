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
                    // Verifique se o arquivo é um pdf
                    if(preg_match("/(\.pdf)$/i", $file)) {
                        // Exiba o pdf
                        echo '<a href="'.$folder.'/'.$file.'">'.$file.'</a><br />';
                    }
                }
            }
            // Feche a pasta
            closedir($handle);
        }
    }
?>
