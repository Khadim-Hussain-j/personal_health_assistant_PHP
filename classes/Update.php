<?php
    require_once "./config.php";

    class Update{

        public function update_appointment(){
            global $conn;
            $uid=$_POST["update_id"];
            $ua_Date=$_POST["ua_Date"];
            $ua_Time=$_POST["ua_Time"];
            $ua_Location=$_POST["ua_Location"];
            $ua_Description=$_POST["ua_Description"];
            $ua_DocName=$_POST["ua_DrName"];
            session_start();
            $Userid=$_SESSION["User_id"];
            $sql = $conn->prepare('UPDATE AppointmentDetails SET Date_ = ?,Time_ = ?,Location = ?,Description = ?,DocName = ? WHERE Appointment_id = ? AND User_id=?;');
				$sql->execute(array($ua_Date,$ua_Time,$ua_Location,$ua_Description,$ua_DocName,$uid,$Userid));
				$count = $sql->rowCount();
				if($count > 0){
					echo "1";
				}else{
					echo "0";
				}
        }

        public function update_MedicineDosage(){
            global $conn;
            $uid=$_POST["update_id"];
            $m_name=$_POST["um_name"];
            $m_TimesaDay=$_POST["um_timesaday"];
            $m_TimesaWeek=$_POST["um_timesaweek"];
            $m_Quantity=$_POST["um_quantity"];
            
            session_start();
            $Userid=$_SESSION["User_id"];

            $sql = $conn->prepare('UPDATE medicinedosages SET TimesinaDay = ?,TimesperWeek = ?,DosageQuantity = ?,MedicineName = ? WHERE Medicine_id = ? AND User_id=?;');
            $sql->execute(array($m_TimesaDay,$m_TimesaWeek,$m_Quantity,$m_name,$uid,$Userid));
            $count = $sql->rowCount();
            if($count > 0){
                echo "1";
            }else{
                echo "0";
            }
        }

        public function update_vitals(){
            global $conn;
            $uid=$_POST["update_id"];
            $v_bloodp=$_POST["uv_bp"];
            $v_temperature=$_POST["uv_temperature"];
            $v_pulse=$_POST["uv_pulse"];
            $v_rr=$_POST["uv_rr"];
            
            session_start();
            $Userid=$_SESSION["User_id"];

            $sql = $conn->prepare('UPDATE uservitals SET BP = ?,Temperature = ?,Pulserate = ?,Respiratoryrate = ? WHERE vital_id = ? AND User_id=?;');
            $sql->execute(array($v_bloodp,$v_temperature,$v_pulse,$v_rr,$uid,$Userid));
            $count = $sql->rowCount();
            if($count > 0){
                echo "1";
            }else{
                echo "0";
            }
        }

    }

    $update = new Update();
    $key = trim($_POST['key']);

    switch ($key) {
        case 'update_appointment':
            $update->update_appointment();
            break;
        case 'update_medicine':
            $update->update_MedicineDosage();
            break;
        case 'update_vitals':
                $update->update_vitals();
            break;
    }
?>