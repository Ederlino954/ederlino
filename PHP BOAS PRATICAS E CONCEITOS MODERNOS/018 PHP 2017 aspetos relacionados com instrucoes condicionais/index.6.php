<?php 

    $a = 1 ;

  /*  if ($a === 1) { // tipo e valor analizados somente no if 
        echo '<p>verdade</p>';
    } else {
        echo '<p>falso</p>';
    }*/

    function teste(){
        switch ($a) { // tipo não e avaliado no switch 

            case 1:
                return 'sim'; // nesse caso pode ser usado return 

            case 2:
                return ;

            case 3:
                    
                break ; // break na dúvida para parar as análises 
            
            default:
                # code...
                break;
        }
    }


?>