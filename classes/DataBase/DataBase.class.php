<?php

    class DataBase extends PDO {

        private $dbConfig;

        public function __construct () {
            try{
                $this->dbConfig = new Config('config.ini');
            }catch(ConfigException $cExc){
                echo $cExc->getMessage();
            }
            return $this->startDB();
        }

        public function startDB () {
            
            try{
                parent::__construct("mysql:host=".$this->dbConfig->getConfig('DB_host').
                ";dbname=".$this->dbConfig->getConfig('DB_name').
                ";charset=".$this->dbConfig->getConfig('DB_charset'),
                $this->dbConfig->getConfig('DB_login'),
                $this->dbConfig->getConfig('DB_password')
                );
            }catch(ConfigException $cExc){
                echo $cExc->getMessage();
            }catch(PDOException $dbExc){
                echo $dbExc->getMessage();
            }

        }


        
    }