<?php
if(!isset($_POST["update_id"])){
  header("location:appointment.php");
}
include('header.php');

?>
<br><br>
<div class="container">
  <br><br>
  <div id="testimonials" class="section wb wow fadeIn">
    <div class="container">
      <div class="heading">
        <span class="icon-logo"><img src="images/icon-logo.png" alt="#"></span>
        <h2>Edit Appointments</h2>
      </div>
      
      <!-- Form -->
      <div class="formbg">
            <div class="formbg-inner padding-horizontal--48">
              <span class="padding-bottom--15 text-center">Edit your Appointments</span>
              <form id="stripe-login" class="frm_updateAppointment">
              <input type="hidden" name="key" value="update_appointment"/>
              <input type="hidden" name="update_id" value="<?=$_POST["update_id"]?>"/>
              <div class="field padding-bottom--24">
                    <label for="DocName">Doctor's Name</label>
                    <input type="text" id="eadrname" name="ua_DrName">
                </div>
                <div class="field padding-bottom--24">
                    <label for="locatin">Location</label>
                    <input type="text" id="ealocation" name="ua_Location">
                </div>
                <div class="field padding-bottom--24">
                <div class="grid--50-50">
                  <label for="Date">Date</label>
                  <input type="date" id="eadate" name="ua_Date">
                  </div>
                </div>
                
                <div class="field padding-bottom--24">
                  <div class="grid--50-50">
                    <label for="Time">Time</label>
                    <input type="time" id="eatime" name="ua_Time">
                  </div>
                </div>
                <div class="field padding-bottom--24">
                    <label for="desription">Description</label>
                    <textarea type="multiline" rows="3" id="eadesc" class="form-control" name="ua_Description"></textarea>
                </div>
             
                <button type="submit" data-scroll class="btn btn-light btn-radius btn-brd grd1 effect-1" >
								Update
							</button>
              </form>
            </div>
          </div>

    </div>
  </div>
</div>
<script>loadDataforid(<?=$_POST["update_id"]?>,"singleAppointment");</script>
<?php
include('footer.php');

?>