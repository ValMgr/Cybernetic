<?php

    session_start();


    switch ($_POST['Langue']) {
        case 'FRA01':
            $_SESSION['Langue'] = $_POST['Langue'];
            break;

        case 'ENG01':
            $_SESSION['Langue'] = $_POST['Langue'];
            break;

        case 'ESP01':
            $_SESSION['Langue'] = $_POST['Langue'];
            break;
        
        default:
            # code...
            break;
    }


echo $_POST['Langue'];
echo $_SESSION['Langue'];

header('location: ../../index.php');
   

?>