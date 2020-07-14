<?php
    function print_f($variable){
        if(is_array($variable)){
            foreach($variable as $valor){
                echo $valor."<br>";
            }
        
        }else{
            echo "$variable <br>";
            
        }
   
    }
    $aNotas=array(2,3,4);
    $msg="Error al enviar el correo electronico";
    print_f($aNotas);
    print_f($msg);
?>