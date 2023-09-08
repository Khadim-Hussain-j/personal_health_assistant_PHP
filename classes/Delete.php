<?php
    require_once "./config.php";

    class Delete{
        public function DeleteVitals(){
            global $conn;
            $vitalid=$_POST["delete_id"];
            session_start();
            $Userid=$_SESSION["User_id"];

            $sql = $conn->prepare('DELETE FROM uservitals WHERE vital_id=? AND User_id=?');
			$sql->execute(array($vitalid,$Userid));
			$row = $sql->rowCount();
            if($row > 0){
                echo '1';
            }else{
                echo '0';
            }
        }

        public function DeleteAppointment(){
            global $conn;
            $vitalid=$_POST["delete_id"];
            session_start();
            $Userid=$_SESSION["User_id"];

            $sql = $conn->prepare('DELETE FROM appointmentDetails WHERE Appointment_id=? AND User_id=?');
			$sql->execute(array($vitalid,$Userid));
			$row = $sql->rowCount();
            if($row > 0){
                echo '1';
            }else{
                echo '0';
            }
        }

        public function DeleteMedicine(){
            global $conn;
            $vitalid=$_POST["delete_id"];
            session_start();
            $Userid=$_SESSION["User_id"];

            $sql = $conn->prepare('DELETE FROM medicinedosages WHERE Medicine_id=? AND User_id=?');
			$sql->execute(array($vitalid,$Userid));
			$row = $sql->rowCount();
            if($row > 0){
                echo '1';
            }else{
                echo '0';
            }
        }
    }

    $delete = new Delete();
    $key = trim($_POST['key']);

    switch ($key) {
        case 'delete_vitals':
            $delete->DeleteVitals();
            break;
        case 'delete_appointment':
                $delete->DeleteAppointment();
            break;
        case 'delete_medicine':
            $delete->DeleteMedicine();
            break;
    }
?>