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
                    // Verifique se o arquivo é uma música
                    if(preg_match("/(\.mp3|\.m4a|\.flac|\.ogg|\.wav)$/i", $file)) {
                        // Exiba o audio
                        echo '<audio controls>';
                        echo '<source src="'.$folder.'/'.$file.'" type="audio/mpeg">';
                        echo '</audio>'.$file.'<br />';
                    }
                }
            }
            // Feche a pasta
            closedir($handle);
        }
    }
?>
