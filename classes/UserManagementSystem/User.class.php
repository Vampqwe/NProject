<?php
    class User {

        private array $user = [
                'userId'=>'',
                'userLogin'=>'',
                'userPassword'=>'',
                'userName'=>'',
                'userLastName'=>'',
                'userAge'=>''
                ];

        private object $connectDb;

        public function __construct (object $connectDb) {
            $this->connectDb = $connectDb;
        }

        public function checkUserLoginInDb (string $login):bool {
            $query = "SELECT `id` FROM `admuser` WHERE `admLogin` = :login";
            $stmt = $this->connectDb->prepare($query);
            $stmt->execute(['login' => $login]);
            if(!$name = $stmt->fetchColumn()) {
                throw new Exception ('Вы не найдены в базе!');
            }
            return true;
        }

        public function addUser () {
            
        }

    }