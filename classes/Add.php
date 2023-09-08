<?php
    require_once "./config.php";

    class Add{

        public function add_appointment(){
            global $conn;

            $a_Date=$_POST["a_Date"];
            $a_Time=$_POST["a_Time"];
            $a_Location=$_POST["a_Location"];
            $a_Description=$_POST["a_Description"];
            $a_DocName=$_POST["a_DrName"];
            session_start();
            $Userid=$_SESSION["User_id"];

            $sql = $conn->prepare('INSERT INTO AppointmentDetails(Date_,Time_,Location,Description,DocName,User_id)
												VALUES(?,?,?,?,?,?)');
			$sql->execute(array($a_Date,$a_Time,$a_Location,$a_Description,$a_DocName,$Userid));
			$row = $sql->rowCount();
            if($row > 0){
                echo '1';
            }else{
                echo '0';
            }
        }

        public function add_MedicineDosage(){
            global $conn;

            $m_name=$_POST["m_name"];
            $m_TimesaDay=$_POST["m_timesaday"];
            $m_TimesaWeek=$_POST["m_timesaweek"];
            $m_Quantity=$_POST["m_quantity"];
            
            session_start();
            $Userid=$_SESSION["User_id"];

            $sql = $conn->prepare('INSERT INTO medicinedosages(TimesinaDay,TimesperWeek,DosageQuantity,MedicineName,User_id)
												VALUES(?,?,?,?,?)');
			$sql->execute(array($m_TimesaDay,$m_TimesaWeek,$m_Quantity,$m_name,$Userid));
			$row = $sql->rowCount();
            if($row > 0){
                echo '1';
            }else{
                echo '0';
            }
        }

        public function add_vitals(){
            global $conn;
            $v_bloodp=$_POST["v_bp"];
            $v_temperature=$_POST["v_temperature"];
            $v_pulse=$_POST["v_pulse"];
            $v_rr=$_POST["v_rr"];
            
            session_start();
            $Userid=$_SESSION["User_id"];

            $sql = $conn->prepare('INSERT INTO uservitals(BP,Temperature,Pulserate,Respiratoryrate,User_id)
												VALUES(?,?,?,?,?)');
			$sql->execute(array($v_bloodp,$v_temperature,$v_pulse,$v_rr,$Userid));
			$row = $sql->rowCount();
            if($row > 0){
                echo '1';
            }else{
                echo '0';
            }
        }

    }

    $add = new Add();
    $key = trim($_POST['key']);

    switch ($key) {
        case 'add_appointment':
            $add->add_appointment();
            break;
        case 'add_medicineDosage':
            $add->add_MedicineDosage();
            break;
        case 'add_vitals':
                $add->add_vitals();
            break;
    }
?>