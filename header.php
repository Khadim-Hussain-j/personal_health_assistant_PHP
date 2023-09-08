 <?php 
   require_once "session.php";
?>
<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<title> Personal Health Assistant</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">
<link rel="shortcut icon" href="images/fevicon.ico.png" type="image/x-icon" />
<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="css/colors.css">
<link rel="stylesheet" href="css/versions.css">
<link rel="stylesheet" href="css/responsive.css">
<link rel="stylesheet" href="css/custom.css">
<link rel="stylesheet" href="form/style.css">
<!-- toastr -->
<link rel="stylesheet" type="text/css" href="toastr/css/toastr.css">
<script src="js/modernizer.js"></script>
<script src="js/all.js"></script>
<script src="js/viewdata.js"></script>
</head>

<body class="clinic_version">
   <header>
      <div class="header-top wow fadeIn">
         <div class="container">
            <a class="navbar-brand" href="index.html"><img src="images/logofinal.png" alt="image"></a>
            
            <!-- <div class="right-header">
               <a href="profile.php" data-scroll class="btn btn-light btn-radius btn-brd grd1 effect-1">My Profile</a>
            </div> -->

            <div class="right-header">
            <a href="classes/logout.php" data-scroll class="btn btn-light btn-radius btn-brd grd1 effect-1">Logout</a>
            </div>
         </div>
      </div>
      </div>
      <div class="header-bottom wow fadeIn">
         <div class="container">
            <nav class="main-menu">
               <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i class="fa fa-bars" aria-hidden="true"></i></button>
               </div>

               <div id="navbar" class="navbar-collapse collapse">
                  <ul class="nav navbar-nav" id="navul">
                     <li><a href="main.php">Home</a></li>
                     <li><a href="appointment.php">Appointments</a></li>
                     <li><a href="medicine.php">Medicine Dosage</a></li>
                     <li><a href="persnol.php">Health Vitals</a></li>
                     <li><a href="contact.php">Contact Us</a></li>
                     <!-- data-scroll -->
                  </ul>
               </div>
            </nav>
            
            
               <div class="serch-bar">
               
                  <div id="custom-search-input">
                  
                     <div class="input-group col-md-12">
                     <div class="custom-select">
        <select id="searchcat">
           
            <option value="appointments" selected>Appointments</option>
            <option value="medicines">Medicines</option>
            <option value="vitals">Health Vitals</option>
        </select>
        </div>
                     <input type="text" class="form-control input-lg" id="search_input" placeholder="Search in Appointments" />
                        <span class="input-group-btn">
                        <button class="btn btn-info btn-lg" type="button">
                        <i class="fa fa-search" aria-hidden="true"></i>
                        </button>
                        </span>
                     </div>
                  </div>
               </div>
               <div class="livesearchdiv">
                  <div class="container">
               <table class="table">
                                <thead class="thead-dark" id="searchth">
                                
                                </thead>
                                <tbody id="searchtb">
                                    

                                </tbody>
                            </table></div>
               </div>
            </div>
            
      </div>
      
   </header>
   