<?php 

    $a = '1';

  /*  if ($a === 1) { // tipo e valor analizados somente no if 
        echo '<p>verdade</p>';
    } else {
        echo '<p>falso</p>';
    }*/

    switch ($a) { // tipo não e avaliado no switch 

        case 1:
            echo '<p>verdade</p>';
            break;
        case 2:
            echo '<p>falso</p>';
            break;
        
        default:
            # code...
            break;
    }


?>