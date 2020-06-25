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

    // -----------------------------------------------------------------

    public function getData($formato = null){
        if ($formato === null){
            return $this->data->format('d-m-Y');
        } else {
            return $this->data->format($formato);
        }
    }

    // Adicionar elementos à data 
    ///----------------------------------------------------------------
    public function addDias($n){
        $this->data->add(new DateInterval('P'.$n.'D'));
    }

    ///----------------------------------------------------------------
    public function addMeses($n){
        $this->data->add(new DateInterval('P'.$n.'M'));
    }

    ///----------------------------------------------------------------
    public function addAnos($n){
        $this->data->add(new DateInterval('P'.$n.'Y'));
    }

    

}

$d = new cl_data_hora();

$d->addMeses(12);

echo $d->getData();
echo '</br>';


?>