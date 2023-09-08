<?php
include('header.php');

?>
<br><br>
<div class="container">
  <br><br>
  <div id="testimonials" class="section wb wow fadeIn">
    <div class="container">
      <div class="heading">
        <span class="icon-logo"><img src="images/icon-logo.png" alt="#"></span>
        <h2>Update Your info</h2>
      </div>
      
      <!-- Form -->
      <div class="formbg">
            <div class="formbg-inner padding-horizontal--48">
              <span class="padding-bottom--15">Edit info of your account</span>
              <form id="stripe-login">
              <div class="field padding-bottom--24">
                  <img src="#" alt="" style="border: 1px solid black; height: 50px; width:50px; ">
                </div>
              <div class="field padding-bottom--24">
                  <label for="Firstname">First Name</label>
                  <input type="text" name="fname">
                </div>
                <div class="field padding-bottom--24">
                  <label for="lastname">Last Name</label>
                  <input type="text" name="lname">
                </div>
                <div class="field padding-bottom--24">
                  <div class="grid--50-50">
                    <label for="email">Email</label>
                    <input type="email" name="email">
                  </div>

                  
                </div>
                <div class="field padding-bottom--24">
                  <div class="grid--50-50">
                    <label for="contact"> Contact Number</label>
                    <input type="text" name="number">
                  </div>
                </div>
                <div class="field padding-bottom--24">
                  <div class="grid--50-50">
                    <label for="age"> Age</label>
                    <input type="text" name="age">
                  </div>
                </div>
                <div class="field padding-bottom--24">
                  <div class="grid--50-50">
                    <label for="age"> Photo</label>
                    <input type="file" name="img">
                  </div>
                </div>
                
               
             
                <a href="profile.php" data-scroll class="btn btn-light btn-radius btn-brd grd1 effect-1">Update</a>
              </form>
            </div>
          </div>

    </div>
  </div>
</div>
<?php
include('footer.php');

?>

