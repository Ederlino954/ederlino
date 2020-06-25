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
    ///----------------------------------------------------------------
}

$d = new cl_data_hora();

echo $d->data->format('d-m-Y');



?>