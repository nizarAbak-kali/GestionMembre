<?php 
	
	$pdo = new PDO('msql:dbname=tuto;host=localhost','root','');
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ATTR_ERRMODE_EXCEPTION);
	$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);

    $mysql = new msqli("localhost","root","","tuto");
    if($mysql->connect_errno){
    	echo "erreur de la connecttion a la base de donné"
    }

 ?>