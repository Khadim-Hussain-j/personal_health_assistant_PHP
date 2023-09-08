<!DOCTYPE html>
<html>
<head>
<title>log in/sign up</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>
<link rel="shortcut icon" href="images/fevicon.ico.png" type="image/x-icon" />
<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
<!-- toastr -->
<link rel="stylesheet" type="text/css" href="../toastr/css/toastr.css">
</head>
<body>
    
          <!-- <img src="logo.png" height="50" alt="Site Logo" id="logo"/> -->
    <div class="center">
     <div class="container right-panel-active">  
          <!-- Sign Up -->  
          <div class="container__form container--signup">  
               <form  class="form frmregister" id="form1">  
                    <h2 class="form__title"><b>Sign Up</b></h2>  
                    <input type="text" placeholder="First Name" name="u_fname" class="input" /> 
                    <input type="text" placeholder="Last Name" name="u_lname" class="input" /> 
                    <input type="email" placeholder="Email" name="u_email" class="input" /> 
                  
                  
                    <input type="text" placeholder="Age" name="u_age" class="input" />  
                    <input type="number" placeholder="Contact Number" name="u_contact" class="input" /> 
                    <input type="password" placeholder="Password" name="u_password" class="input" id="show" />
                 
                   <input type="password" placeholder="Confirm Password" name="u_password2" class="input" id="show2" />
                  
                    
                    <button type="submit" class="btn">Sign Up</button>  
               </form>  
          </div>  
          <!-- Sign In -->  
          <div class="container__form container--signin">  
               <form class="form frm_login" id="form2">  
                    <h2 class="form__title"> <b>Log In</b></h2>  
                    <input type="email" placeholder="Email" name="useremail" class="input" />  <i id="toggler2" class="fa fa-envelope"></i> 
                  
                    <input type="password" placeholder="Password" name="userpassword" class="input" id="show1" />
                   <i id="toggler1" class="fa fa-eye"></i>
                   <label class="form-check-label" for="exampleCheck1">remember me   <input type="checkbox"   name="rem"></label>

                    <a href="#" class="link">Forgot your password?</a>  
                    <button type="submit" class="btn"> Log in </button>  
               </form>  
          </div>  
          <!-- Overlay -->  
          <div class="container__overlay">  
               <div class="overlay">  
                    <div class="overlay__panel overlay--left">  
                         <button class="btn" id="signIn">Log In</button>  
                    </div>  
                    <div class="overlay__panel overlay--right">  
                         <button class="btn" id="signUp">Sign Up</button>  
                    </div>  
               </div>  
          </div>  
     </div> 
</div> 
<script>
const signInBtn = document.getElementById("signIn");  
 const signUpBtn = document.getElementById("signUp");  
 const fistForm = document.getElementById("form1");  
 const secondForm = document.getElementById("form2");  
 const container = document.querySelector(".container");  
 signInBtn.addEventListener("click", () => {  
      container.classList.remove("right-panel-active");  
 });  
 signUpBtn.addEventListener("click", () => {  
      container.classList.add("right-panel-active");  
 });  
 fistForm.addEventListener("submit", (e) => e.preventDefault());  
 secondForm.addEventListener("submit", (e) => e.preventDefault());




// show password signup
 var password=document.getElementById('show');
 var toggler = document.getElementById('toggler');
 showpassword = ()=> {
if (password.type == 'password') {
     password.setAttribute('type','text');
     toggler.classList.add('fa-eye-slash');

}
else{
toggler.classList.remove('fa-eye-slash');
password.setAttribute('type','password');

}


 };
 toggler.addEventListener('click',showpassword);


//  show password login

var password1=document.getElementById('show1');
 var toggler1 = document.getElementById('toggler1');
 showpassword = ()=> {
if (password1.type == 'password') {
     password1.setAttribute('type','text');
     toggler1.classList.add('fa-eye-slash');

}
else{
toggler1.classList.remove('fa-eye-slash');
password1.setAttribute('type','password');

}


 };
 toggler1.addEventListener('click',showpassword);
</script>

 <!-- all js files -->
 <script src="../js/all.js"></script>
      
 <script type="text/javascript" src="../toastr/js/toastr.min.js"></script>
      <!-- Ajax code File -->
      <script src="../js/mycustom.js"></script>

</body>
</html>