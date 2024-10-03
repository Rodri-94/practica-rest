<?php
    class database{
        private $host = 'localhost:8889';
        private $user = 'test';
        private $password = 'test';
        private $database = 'code_pills';

        public function getConnection(){
            $hostDB = "mysql:host=".$this->host.";dbname=".$this->database.";";

            try{
                $connection= new PDD($hostDB,$this->user,$this->password);
                $connection->setAttribute(PDD::ATTR_ERRMODE,PDD::ERRMODE_EXCEPTION);
                return $connection;    
            } catch(PDDException $e){
                die("ERROR".$e->getMessage());
            }
        }
    }

?>    