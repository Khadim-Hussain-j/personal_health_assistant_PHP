
<?php 

require_once "./config.php";

class viewdata{

    public function getAppointmentData(){
    global $conn;
            session_start();
            $Userid=$_SESSION["User_id"];

            $sql = $conn->prepare("SELECT * FROM appointmentdetails where User_id = ?");
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
                        
                        <td><form action="editapp.php" method="post"><input type="hidden" name="update_id" value="<?=$value['Appointment_id'];?>"><button type="submit" class="btn btn-success">Edit</button></form>
                        </td><td> <button class="btn btn-danger" onclick="Delete(<?=$value['Appointment_id']; ?>,'delete_appointment')">Delete</button>  </td>
                    </tr>
                    
            <?php
                }
                }
                else {
                    echo "<tr><td colspan='7' class='text-center h4'>0 results</td></tr>";
                }
            }

            public function getMedicineData(){
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
                                    <td><form action="editmedi.php" method="post"><input type="hidden" name="update_id" value="<?=$value['Medicine_id'];?>"><button type="submit" class="btn btn-success">Edit</button></form>
                        </td>
                                   <td> <button class="btn btn-danger" onclick="Delete(<?=$value['Medicine_id']; ?>,'delete_medicine')">Delete</button>  </td>
                                </tr>
                                
                        <?php
                            }
                            }
                            else {
                                echo "<tr><td colspan='7' class='text-center h4'>0 results</td></tr>";
                            }
                        }
                        public function getVitalsData(){
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
                                                <td><form action="editpersnol.php" method="post"><input type="hidden" name="update_id" value="<?=$value['vital_id'];?>"><button type="submit" class="btn btn-success">Edit</button></form>
                        </td>
                                               <td> <button class="btn btn-danger" onclick="Delete(<?=$value['vital_id']; ?>,'delete_vitals')">Delete</button>  </td>
                                            </tr>
                                            
                                    <?php	$i++;
                                        }
                                        }
                                        else {
                                            echo "<tr><td colspan='7' class='text-center h4'>0 results</td></tr>";
                                        }
                                    }

                                    public function getsingleAppointment(){
                                        global $conn;
                                                session_start();
                                                $Userid=$_SESSION["User_id"];
                                                $id=trim($_POST["id"]);
                                                $sql = $conn->prepare("SELECT * FROM appointmentdetails where Appointment_id=? AND User_id = ?");
                                                $sql->execute(array($id,$Userid));
                                                $count = $sql->rowCount();
                                                $fetch = $sql->fetchAll();
                                                if($count > 0){
                                                  
                                                    foreach ($fetch as $key => $value) {
                                                        $data=$value;
                                                        echo json_encode($data);
                                                    }
                                                    }
                                                    else {
                                                        echo '0';
                                                    }
                                                }
                                                public function getsingleMedicine(){
                                                    global $conn;
                                                            session_start();
                                                            $Userid=$_SESSION["User_id"];
                                                            $id=trim($_POST["id"]);
                                                            $sql = $conn->prepare("SELECT * FROM medicinedosages where Medicine_id=? AND User_id = ?");
                                                            $sql->execute(array($id,$Userid));
                                                            $count = $sql->rowCount();
                                                            $fetch = $sql->fetchAll();
                                                            if($count > 0){
                                                              
                                                                foreach ($fetch as $key => $value) {
                                                                    $data=$value;
                                                                    echo json_encode($data);
                                                                }
                                                                }
                                                                else {
                                                                    echo '0';
                                                                }
                                                            }  
                                                            public function getsingleVital(){
                                                                global $conn;
                                                                        session_start();
                                                                        $Userid=$_SESSION["User_id"];
                                                                        $id=trim($_POST["id"]);
                                                                        $sql = $conn->prepare("SELECT * FROM uservitals where vital_id=? AND User_id = ?");
                                                                        $sql->execute(array($id,$Userid));
                                                                        $count = $sql->rowCount();
                                                                        $fetch = $sql->fetchAll();
                                                                        if($count > 0){
                                                                          
                                                                            foreach ($fetch as $key => $value) {
                                                                                $data=$value;
                                                                                echo json_encode($data);
                                                                            }
                                                                            }
                                                                            else {
                                                                                echo '0';
                                                                            }
                                                                        } 
                                                                        public function getsortedAppointmentData(){
                                                                            global $conn;
                                                                                    session_start();
                                                                                    $Userid=$_SESSION["User_id"];
                                                                                    $sort=$_POST["sortby"];
                                                                                    switch ($sort) {
                                                                                        case 'id':
                                                                                            $sortby="Appointment_id";
                                                                                            break;
                                                                                            case 'docname':
                                                                                                $sortby="DocName";
                                                                                                break;
                                                                                                case 'date':
                                                                                                    $sortby="Date_";
                                                                                                    break;
                                                                                    }
                                                                        
                                                                                    $sql = $conn->prepare("SELECT * FROM appointmentdetails where User_id = ? ORDER BY $sortby ASC");
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
                                                                                                
                                                                                                <td><form action="editapp.php" method="post"><input type="hidden" name="update_id" value="<?=$value['Appointment_id'];?>"><button type="submit" class="btn btn-success">Edit</button></form>
                                                                                                </td><td> <button class="btn btn-danger" onclick="Delete(<?=$value['Appointment_id']; ?>,'delete_appointment')">Delete</button>  </td>
                                                                                            </tr>
                                                                                            
                                                                                    <?php
                                                                                        }
                                                                                        }
                                                                                        else {
                                                                                            echo "<tr><td colspan='7' class='text-center h4'>0 results</td></tr>";
                                                                                        }
                                                                                    }

                                                                                    public function getsortedMedicineData(){
                                                                                        global $conn;
                                                                                                session_start();
                                                                                                $Userid=$_SESSION["User_id"];
                                                                                                $sort=$_POST["sortby"];
                                                                                    switch ($sort) {
                                                                                        case 'id':
                                                                                            $sortby="Medicine_id";
                                                                                            break;
                                                                                            case 'medname':
                                                                                                $sortby="MedicineName";
                                                                                                break;
                                                                                                case 'quantity':
                                                                                                    $sortby="DosageQuantity";
                                                                                                    break;}
                                                                                                $sql = $conn->prepare("SELECT * FROM medicinedosages where User_id = ? ORDER BY $sortby ASC;");
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
                                                                                                            <td><form action="editmedi.php" method="post"><input type="hidden" name="update_id" value="<?=$value['Medicine_id'];?>"><button type="submit" class="btn btn-success">Edit</button></form>
                                                                                                </td>
                                                                                                           <td> <button class="btn btn-danger" onclick="Delete(<?=$value['Medicine_id']; ?>,'delete_medicine')">Delete</button>  </td>
                                                                                                        </tr>
                                                                                                        
                                                                                                <?php
                                                                                                    }
                                                                                                    }
                                                                                                    else {
                                                                                                        echo "<tr><td colspan='7' class='text-center h4'>0 results</td></tr>";
                                                                                                    }
                                                                                                }

}  

$viewdata=new viewdata();
$key = trim($_POST['key']);

    switch ($key) {
        case 'loadAppointment':
            $viewdata->getAppointmentData();
            break;
        case 'loadMedicine':
                $viewdata->getMedicineData();
            break;
            case 'loadVitals':
                $viewdata->getVitalsData();
            break;
            case 'singleAppointment':
                $viewdata->getsingleAppointment();
            break;
            case 'singleMedicine':
                $viewdata->getsingleMedicine();
            break;
            case 'singleVital':
                $viewdata->getsingleVital();
            break;
            case 'sortAppointment':
                $viewdata->getsortedAppointmentData();
                break;
                case 'sortMedicine':
                    $viewdata->getsortedMedicineData();
                    break;
    }
	
?>