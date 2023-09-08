<?php
if(!isset($_POST["update_id"])){
  header("location:persnol.php");
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
        <h2>Edit Personal Health Vitals</h2>
      </div>
      
      <!-- Form -->
      <div class="formbg">
            <div class="formbg-inner padding-horizontal--48">
              <span class="padding-bottom--15 text-center">Edit Health Vitals</span>
              <form id="stripe-login" class="frm_updateVitals">
              <input type="hidden" name="key" value="update_vitals"/>
              <input type="hidden" name="update_id" value="<?=$_POST["update_id"]?>"/>
              <div class="field padding-bottom--24">
                  <label for="bp">Blood Pressure (eg: 130/80)</label>
                  <input type="text" id="evbp" name="uv_bp">
                </div>
                <div class="field padding-bottom--24">
                  <label for="temperature">Temperature (eg: 38&#8451;)</label>
                  <input type="text" id="evtemperature" name="uv_temperature">
                </div>
                <div class="field padding-bottom--24">
                  <div class="grid--50-50">
                    <label for="pulse">Pulse Rate (eg: 72)</label>
                    <input type="text" id="evpulse" name="uv_pulse">
                  </div>

                  
                </div>
                <div class="field padding-bottom--24">
                  <div class="grid--50-50">
                    <label>Respiratory Rate (eg: 14)</label>
                    <input type="text" id="evrr" name="uv_rr">
                  </div>
                </div>
               
             
               <button type="submit" data-scroll class="btn btn-light btn-radius btn-brd grd1 effect-1">Update</a>
          
              
              </form>
            </div>
          </div>

    </div>
  </div>
</div>
<script>loadDataforid(<?=$_POST["update_id"]?>,"singleVital");</script>
<?php
include('footer.php');

?>

