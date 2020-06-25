<?php
    // classe para a agestão da bd

    class gestor{

        // ----------------------------------
        public function EXE_QUERY($query, $parametros = null){// retona valores 

            /// resulatados
            $resultado = null;


            /// abre a ligação a base de dados 
            $ligacao = new PDO('mysql:host='.$GLOBALS['bd_host'].';bdname='.$GLOBALS['bd_name'].';charset='.$GLOBALS['bd_charset'],
            $GLOBALS['bd_usuario'],
            $GLOBALS['bd_password']
            );

            echo $ligacao->getAttribute(PDO::ATTR_CONNECTION_STATUS);


            return $resultado;

        }

        ///---------------------------------
        public function EXE_NON_QUERY(){ // não retorna valores 

        }

    }




?>