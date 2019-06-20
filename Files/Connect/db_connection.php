<?php

	    // Messages of errors = On
	    ini_set('display_errors','on');
	    ini_set('display_startup_errors','on');
	    error_reporting(E_ALL);

		// Connexion et choix de la base de données

        // CONNEXION BDD OVH:
		// $server = 'mysql:dbname=cybernetzxadmin; host=cybernetzxadmin.mysql.db';
		// $user = 'cybernetzxadmin';
        // $password = 'MarJC3364Cybe';


        // CONNEXION BDD LOCALHOST:
        $server = 'mysql:dbname=cybernetic; host=localhost';
        $user = 'root';
        $password = '';
        

        try{
            $dbPdo = new PDO($server, $user, $password);
            //echo "<h3 style=\"color:green;\">db Connected</h3>";
        }
        catch (PDOException $e) {
            echo "<h3 style=\"color:red;\">Unable to connect db</h3>";    
            die();
        }
        $dbPdo->query('SET NAMES UTF8');

        session_start();

?>