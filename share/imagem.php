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
                    // Verifique se o arquivo é uma imagem
                    if(preg_match("/(\.jpg|\.png|\.gif)$/i", $file)) {
                        // Exiba a imagem
                        echo '<img src="'.$folder.'/'.$file.'" alt="'.$file.'" /><br />';
                    }
                }
            }
            // Feche a pasta
            closedir($handle);
        }
    }
?>
