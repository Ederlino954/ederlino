<?php
    // classe para a agestão da bd

    class gestor{

        // ----------------------------------
        public function EXE_QUERY($query, $parametros = null){// retona valores // com parametros a query fica MAIS SEGURA 
            // SELECT apenas 
            /// resulatados
            $resultados = null;

            /// abre a ligação a base de dados 
            $ligacao = new PDO('mysql:host='.$GLOBALS['db_host'].
                ';dbname='.$GLOBALS['db_name'].
                ';charset=utf8',
                $GLOBALS['db_username'],
                $GLOBALS['db_password'],
                array(PDO::ATTR_PERSISTENT => TRUE)
            );

            
            $ligacao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // executa a query 
            if ($parametros != null) {
                $gest = $ligacao->prepare($query);
                $gest->execute($parametros);
                $resultados = $gest->fetchAll(PDO::FETCH_ASSOC);
            } else {
                $gest = $ligacao->prepare($query);
                $gest->execute();
                $resultados = $gest->fetchAll(PDO::FETCH_ASSOC);
            }


            // fechar a ligação 
            $ligacao = null;

            return $resultados;
        }

        ///---------------------------------
        public function EXE_NON_QUERY($query, $parametros = null){ // não retorna valores 
            /// INSERT, UPDATE, DELETE 
            /// abre a ligação a base de dados 
            $ligacao = new PDO('mysql:host='.$GLOBALS['db_host'].
                ';dbname='.$GLOBALS['db_name'].
                ';charset=utf8',
                $GLOBALS['db_username'],
                $GLOBALS['db_password'],
                array(PDO::ATTR_PERSISTENT => TRUE)
            );

            $ligacao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Executa a query 
            $ligacao->beginTransaction();

            try {                
                  // executa a query 
                if ($parametros != null) {
                    $gest = $ligacao->prepare($query);
                    $gest->execute($parametros);
                } else {
                    $gest = $ligacao->prepare($query);
                    $gest->execute();        
                }

                $ligacao->commit();

            } catch (PDOException $e) {
                echo '<p>' . $e . '</p>';
                $ligacao->rollBack();
            }

            $ligacao = null;
        }
    }




?>