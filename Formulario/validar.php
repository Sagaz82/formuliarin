<?php

if (isset($_POST['submit'])){
    
    if(empty($nombre)){
        echo "<p class='error'> Agregar tu nombre </p>";
    } else {
        if(strlen($nombre)>60){
            echo "<p class='error'> maximo de 60 caracteres en el nombre</p>";
        }elseif(strlen($nombre)<5){
            echo "<p class='error'> minimo de 5 caracteres en el nombre</p>";
        }
    }

    if(empty($telefono)){
        echo "<p class='error'> Agregar tu telefono </p>";
    } else {
        if(strlen($telefono)>16){
            echo "<p class='error'> maximo de 16 caracteres en el telefono</p>";
        }elseif(strlen($telefono)<6){
            echo "<p class='error'> minimo de 6 caracteres en el telefono</p>";
        }elseif(!filter_var($telefono, FILTER_SANITIZE_NUMBER_INT)){
            echo "<p class='error'> El telefono no es valido </p>";
        }
    }

    if(empty($correo)){
        echo "<p class='error'> Agregar tu correo </p>";
    }else {
        
        if(!filter_var($correo, FILTER_VALIDATE_EMAIL)){
            echo "<p class='error'> El Correo no existe </p>";
        }
    }

    
    if(empty($numeroDoc)){
        echo "<p class='error'> Agregar tu Numero De Documentacion </p>";
    } else {
        
        if((strlen($numeroDoc)>12)&&($tipoId=="C.I")){
            echo "<p class='error'> maximo de 12 caracteres en C.C</p>";
        }elseif((strlen($numeroDoc)<6)&&($tipoId=="C.I")){
            echo "<p class='error'> minimo de 6 caracteres en C.C</p>";
        }elseif((strlen($numeroDoc)>18)&&($tipoId=="C.E")){
            echo "<p class='error'> maximo de 18 caracteres en C.E</p>";
        }elseif((strlen($numeroDoc)<8)&&($tipoId=="C.E")){
            echo "<p class='error'> minimo de 8 caracteres en C.E</p>";
        }elseif((strlen($numeroDoc)>18)&&($tipoId=="T.I")){
        echo "<p class='error'> maximo de 10 caracteres en T.I</p>";
        }elseif((strlen($numeroDoc)<8)&&($tipoId=="T.I")){
        echo "<p class='error'> minimo de 7 caracteres en T.I</p>";
    }
    }

    
    if(empty($consulta)){
        echo "<p class='error'> Agregar tu consulta </p>";
    } else {
        
        if(strlen($consulta)>300){
            echo "<p class='error'> maximo 300 caracteres en consulta</p>";
        }elseif(strlen($consulta)<8){
            echo "<p class='error'> minimo 8 caracteres en consulta</p>";
        }
    }

}

?>