<?php

    $nombre=$_FILES['archivo']['name'];
    $guardado=$_FILES['archivo']['tmp_name'];

    if(!file_exists('archivos')){
        mkdir('archivos',0777, true);
        if(file_exists('archivos')){
            if(move_uploaded_file($guardado, 'archivos/'.$nombre)){
                echo "Archivo guardado exitosamente";
            } else{
                echo "Archivo no guardado ";
            }
        }
    } else{
        if(move_uploaded_file($guardado, 'archivos/'.$nombre)){
            echo "Archivo guardado exitosamente";
        } else{
            echo "Archivo no guardado ";
        }
    }

    

?>