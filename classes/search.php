
<?php 

require_once "./config.php";

class search{

    public function searchAppointmentData(){
    global $conn;
            session_start();
            $Userid=$_SESSION["User_id"];
            $sf=$_POST["search"];
            $sql = $conn->prepare("SELECT * FROM appointmentdetails where User_id = ? AND DocName like '%$sf%' OR Date_ like '%$sf%' OR Time_ like '%$sf%' OR Location like '%$sf%' OR Description like '%$sf%'");
			$sql->execute(array($Userid));
			$count = $sql->rowCount();
			$fetch = $sql->fetchAll();
			if($count > 0){
				foreach ($fetch as $key => $value) {
                    ?>	
                    <tr>
                    <td><?=$value['Appointment_id'];?></td>
                    <td><?=$value['DocName'];?></td>
                        <td><?=$value['Date_'];?></td>
                        <td><?=$value['Time_'];?></td>
                        <td><?=$value['Location'];?></td>
                        <td><?=$value['Description'];?></td>
                    </tr>
                    
            <?php
                }
                }
                else {
                    echo "<tr><td colspan='6' class='text-center h4'>No Match found! results</td></tr>";
                }
            }

            public function searchMedicineData(){
                global $conn;
                        session_start();
                        $Userid=$_SESSION["User_id"];
            
                        $sql = $conn->prepare("SELECT * FROM medicinedosages where User_id = ?");
                        $sql->execute(array($Userid));
                        $count = $sql->rowCount();
                        $fetch = $sql->fetchAll();
                        if($count > 0){
                            
                            foreach ($fetch as $key => $value) {
                                ?>	
                                <tr>
                                <td><?=$value['Medicine_id']?></td>
                                <td><?=$value['MedicineName'];?></td>
                                    <td><?=$value['TimesinaDay'];?></td>
                                    <td><?=$value['TimesperWeek'];?></td>
                                    <td><?=$value['DosageQuantity'];?></td>
                                </tr>
                                
                        <?php
                            }
                            }
                            else {
                                echo "<tr><td colspan='5' class='text-center h4'>No Match found! results</td></tr>";
                            }
                        }
                        public function searchVitalsData(){
                            global $conn;
                                    session_start();
                                    $Userid=$_SESSION["User_id"];
                        
                                    $sql = $conn->prepare("SELECT * FROM uservitals where User_id = ?");
                                    $sql->execute(array($Userid));
                                    $count = $sql->rowCount();
                                    $fetch = $sql->fetchAll();
                                    if($count > 0){
                                        $i=1;
                                        foreach ($fetch as $key => $value) {
                                            ?>	
                                            <tr>
                                            <td><?=$i?></td>
                                                <td><?=$value['BP'];?></td>
                                                <td><?=$value['Temperature'];?></td>
                                                <td><?=$value['Pulserate'];?></td>
                                                <td><?=$value['Respiratoryrate'];?></td>
                                            </tr>
                                            
                                    <?php	$i++;
                                        }
                                        }
                                        else {
                                            echo "<tr><td colspan='5' class='text-center h4'>No Match found! results</td></tr>";
                                        }
                                    }

}  

$search=new search();
$key = trim($_POST['key']);

    switch ($key) {
        case 'appointments':
            $search->searchAppointmentData();
            break;
        case 'medicines':
                $search->searchMedicineData();
            break;
            case 'vitals':
                $search->searchVitalsData();
            break;
    }
	
?>