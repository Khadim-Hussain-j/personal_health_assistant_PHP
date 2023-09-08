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
        <h2>Add Appointments</h2>
      </div>
      
      <!-- Form -->
      <div class="formbg">
            <div class="formbg-inner padding-horizontal--48">
              <span class="padding-bottom--15 text-center">Add Appointments to your account</span>
              <form id="stripe-login" class="frm_addAppointment">
              <input type="hidden" name="key" value="add_appointment"/>
              <div class="field padding-bottom--24">
                    <label for="DocName">Doctor's Name</label>
                    <input type="text" name="a_DrName">
                </div>
                <div class="field padding-bottom--24">
                    <label for="locatin">Location</label>
                    <input type="text" name="a_Location">
                </div>
                <div class="field padding-bottom--24">
                <div class="grid--50-50">
                  <label for="Date">Date</label>
                  <input type="date" name="a_Date">
                  </div>
                </div>
                
                <div class="field padding-bottom--24">
                  <div class="grid--50-50">
                    <label for="Time">Time</label>
                    <input type="time" name="a_Time">
                  </div>
                </div>
                <div class="field padding-bottom--24">
                    <label for="desription">Description</label>
                    <textarea type="multiline" rows="3" class="form-control" name="a_Description"></textarea>
                </div>
             
                <button type="submit" data-scroll class="btn btn-light btn-radius btn-brd grd1 effect-1" >
								Add
							</button>
              </form>
            </div>
          </div>

    </div>
  </div>
</div>
<?php
include('footer.php');

?>