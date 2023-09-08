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
        <h2>Add Personal Health Vitals</h2>
      </div>
      
      <!-- Form -->
      <div class="formbg">
            <div class="formbg-inner padding-horizontal--48">
              <span class="padding-bottom--15 text-center">Add Vitals to your account</span>
              <form id="stripe-login" class="frm_addVitals">
              <div class="field padding-bottom--24">
                  <label for="bp">Blood Pressure (eg: 130/80)</label>
                  <input type="text" name="v_bp">
                </div>
                <div class="field padding-bottom--24">
                  <label for="temperature">Temperature (eg: 38&#8451;)</label>
                  <input type="text" name="v_temperature">
                </div>
                <div class="field padding-bottom--24">
                  <div class="grid--50-50">
                    <label for="pulse">Pulse Rate (eg: 72)</label>
                    <input type="text" name="v_pulse">
                  </div>

                  
                </div>
                <div class="field padding-bottom--24">
                  <div class="grid--50-50">
                    <label>Respiratory Rate (eg: 14)</label>
                    <input type="text" name="v_rr">
                  </div>
                </div>
               
             
               <button type="submit" data-scroll class="btn btn-light btn-radius btn-brd grd1 effect-1">Add</a>
          
              
              </form>
            </div>
          </div>

    </div>
  </div>
</div>
<?php
include('footer.php');

?>

