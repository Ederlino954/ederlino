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
    ///----------------------------------------------------------------

    public function addDias($n){
        $this->data->add(new DateInterval('P'.$n.'D'));
    }
}

$d = new cl_data_hora();

echo $d->getData();
echo '</br>';

// Adiconar 100 dias s
$d->addDias(100);

echo $d->getData();
echo '</br>';


?>