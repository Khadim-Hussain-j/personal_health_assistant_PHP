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
        <h2>Add Dosages</h2>
      </div>
      
      <!-- Form -->
      <div class="formbg">
            <div class="formbg-inner padding-horizontal--48">
              <span class="padding-bottom--15 text-center">Add Dosages to your account</span>
              <form id="stripe-login" class="frm_addmedicineDosage">
              <div class="field padding-bottom--24">
                
                  <label for="name">Medicine Name</label>
                  <input type="text" name="m_name">
                </div>
                <div class="field padding-bottom--24">
                <div class="grid--50-50">
                  <label for="times">Times in a Day</label>
                  <input type="number" name="m_timesaday">
                </div>
                </div>
                <div class="field padding-bottom--24">
                  <div class="grid--50-50">
                    <label for="week">Times in a week</label>
                    <input type="number" name="m_timesaweek">
                  </div>

                  
                </div>
                <div class="field padding-bottom--24">
                  <div class="grid--50-50">
                    <label for="quantity">Dosage Quantity</label>
                    <input type="text" name="m_quantity">
                  </div>
                </div>
               
            
               <button type="submit" data-scroll class="btn btn-light btn-radius btn-brd grd1 effect-1">Add</button>
            
              </form>
            </div>
          </div>

    </div>
  </div>
</div>
<?php
include('footer.php');

?>
