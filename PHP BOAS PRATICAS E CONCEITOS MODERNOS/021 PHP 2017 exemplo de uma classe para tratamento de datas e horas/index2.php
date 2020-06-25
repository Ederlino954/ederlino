<?php
// Classe para gerir datas e horas 

class cl_data_hora{

    public $data;

    // -----------------------------------------------------------
    /// construtor da classe
    public function __construct($formato = null){

        if ($formato === null) {
            $this->data = new DateTime();
        } else {
            $this->data = new DateTime($formato);
        }
    }

    public function getData($formato){
        return $this->data->format($formato);
    }
    ///----------------------------------------------------------------
}

$d = new cl_data_hora();

echo $d->getData('d-m-Y');



?>