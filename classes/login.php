<?php
	require_once "./config.php";


			$username = trim($_POST['useremail']);
			$password = trim(md5($_POST['userpassword']));

			global $conn;

			$sql = $conn->prepare('SELECT * FROM users WHERE BINARY EmailId = ? AND BINARY Password_ = ?');
			$sql->execute(array($username,$password));
			$fetch = $sql->fetch();
			$count = $sql->rowCount();
			if($count > 0){
				session_start();
				$_SESSION['User_id'] = $fetch['User_id'];
				$_SESSION['User_name'] = $fetch['FirstName'];
				echo "1";
			}else{
				echo "0";
			}
		
	

		
		

?>