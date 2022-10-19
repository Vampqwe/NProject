<?php
    class Session {

        private $sessId;

        public function __construct () {
            session_id();

                session_start();
                if (!isset($SESSION['userLogin'])) {
                    $SESSION['userLogin'] = '';
                    $SESSION['usserAccessRights'] = '';
                }
            var_dump(session_id());
        }


        public function createSession () {

        }
    }