<?php
   // $a = array("João", "luiz" , "dias"); indices adicionando de forma crescente por padrão 

   // $a = ["João", "luiz" , "dias"];

   $a = array( // estrutura pode ser alterado o indice conforme a necessidade 
        0 => "joão",
        1 => "luis",
        20 => "dias",
        "valor" => "teste", // poder se misturado chaves númerica com alfa numéricas 
                     "teste" // o valor é acrescentado automáticamente 
   );
    
    echo $a[20];
    
    var_dump($a);
?>