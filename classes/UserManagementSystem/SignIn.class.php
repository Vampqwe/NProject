<?php
    class SignIn extends UserManagementSystem {
        

        public function __construct (string $login, string $password) {
            $this->login = $login;
            $this->password = $password;
        }
        
    }