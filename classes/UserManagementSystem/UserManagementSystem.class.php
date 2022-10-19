<?php
    class UserManagementSystem {

        protected $login;
        protected $password;
        
        public function __costruct () {
            $config = new Config();
        }

        protected function startDb () {
            return new DataBase();
        }

        public function checkLogin () {
            if (empty($this->login) or strlen($this->login)<=5) {
                throw new Exception('Неверно введен логин');
            }
        }

        public function checkPassword () {
            if (empty($this->password) or strlen($this->password)<=5) {
                throw new Exception('Неверно введен Пароль');
            }
        }

        public function enter () {
            
        }
    }