<?php
declare(strict_types = 1);
include_once('vendor/autoload.php');
$session = new Session();

?>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div id = 'layout'>
            <?php
            $postInputArr = [
                'admLogin'=>'',
                'admPass'=>'',
                'admSub'=>''
            ];
            $resultPost = filter_input_array(INPUT_POST, $postInputArr);

            if(isset($resultPost['admSub'])){
                try{

                    $user = new User(new DataBase());
                    $user->checkUserLoginInDb($resultPost['admLogin']);

                }catch(Exception $errData){
                    echo($errData->getMessage());
                }
            }

            if(empty($_SESSION['login'])){
                include('html/signin.html');

            }else{
                echo('you a enter!');
            }
                
            ?>
        </div>
    </body>
</html>