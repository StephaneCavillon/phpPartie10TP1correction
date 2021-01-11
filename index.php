<?php

include('views\templates\header.php');

include('controllers\user_controller.php');

// test de l'envoi de données en POST
if($_SERVER['REQUEST_METHOD'] == 'POST' && empty($errorsArray)){
    include('views\user_datas.php');
}else{
    include('views\user_form.php');
}

include('views\templates\footer.php');
?>
