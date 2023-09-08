<?php
    require_once "./config.php";
// $u_fname,$u_lname,$u_email,$u_age,$u_contact,$u_password
            $u_fname = trim($_POST['u_fname']);
            $u_lname = trim($_POST['u_lname']);
            $u_email = strtolower(trim($_POST['u_email']));
            $u_age = trim($_POST['u_age']);
            $u_contact = trim($_POST['u_contact']);
            $u_password = trim(md5($_POST['u_password']));
			global $conn;

			$sql = $conn->prepare('SELECT * FROM users WHERE EmailId = ? OR ContactNumber = ? ');
			$sql->execute(array($u_email,$u_contact));
			$count = $sql->rowCount();
			if($count <= 0){
				$que = $conn->prepare('INSERT INTO users(FirstName,LastName,EmailId,Age,ContactNumber,Password_) VALUES(?,?,?,?,?,?);');
				$que->execute(array($u_fname,$u_lname,$u_email,$u_age,$u_contact,$u_password));
				$row = $que->rowCount();
				if($row > 0){
					echo "1";
				}else{
					echo "0";
				}
			}else{
				echo "2";
			}
		
?>