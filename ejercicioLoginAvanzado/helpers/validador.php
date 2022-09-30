<!-- si eres admin pude registrar 

un listado de todos, con un enlace al formulario del admin que permite añadir nuevos users

un boton arriba "sing out", para mandarlo al login principal.

 -->

 <?php
    function validaInputText($texto){
        if ($texto!="" && $texto!=" ") {
            return true;
        }else {
            return false;
        }
    }
 ?>