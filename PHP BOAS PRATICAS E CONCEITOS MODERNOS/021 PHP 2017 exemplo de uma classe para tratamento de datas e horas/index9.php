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

    //// ------------------------------------------------------------------
    public function getDataHora(){
        return $this->data->format('d-m-Y H:i:s');
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


    // Adicionar elementos à hora
    ///----------------------------------------------------------------
    public function addHoras($n){
        $this->data->add(new DateInterval('PT'.$n.'H'));
    }

        // Adicionar elementos à hora
    ///----------------------------------------------------------------
    public function addMinutos($n){
        $this->data->add(new DateInterval('PT'.$n.'I'));
    }


        // Adicionar elementos à hora
    ///----------------------------------------------------------------
    public function addSegundos($n){
        $this->data->add(new DateInterval('PT'.$n.'S'));
    }



    

}

$d = new cl_data_hora();
echo $d->getDataHora();
echo '</br>';

$d->addHoras(39);

echo $d->getDataHora();
echo '</br>';


?>