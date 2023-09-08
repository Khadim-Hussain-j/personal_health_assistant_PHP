<?php
if(!isset($_POST["update_id"])){
  header("location:medicine.php");
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
        <h2>Edit Dosages</h2>
      </div>
      
      <!-- Form -->
      <div class="formbg">
            <div class="formbg-inner padding-horizontal--48">
              <form id="stripe-login" class="frm_updatemedicineDosage">
              <input type="hidden" name="update_id" value="<?=$_POST["update_id"]?>"/>
              <div class="field padding-bottom--24">
                
                  <label for="name">Medicine Name</label>
                  <input type="text" id="emname" name="um_name">
                </div>
                <div class="field padding-bottom--24">
                <div class="grid--50-50">
                  <label for="times">Times in a Day</label>
                  <input type="number" id="emtimesaday" name="um_timesaday">
                </div>
                </div>
                <div class="field padding-bottom--24">
                  <div class="grid--50-50">
                    <label for="week">Times in a week</label>
                    <input type="number" id="emtimesaweek" name="um_timesaweek">
                  </div>

                  
                </div>
                <div class="field padding-bottom--24">
                  <div class="grid--50-50">
                    <label for="quantity">Dosage Quantity</label>
                    <input type="text" id="emdosagequantity" name="um_quantity">
                  </div>
                </div>
               
            
               <button type="submit" data-scroll class="btn btn-light btn-radius btn-brd grd1 effect-1">Update</button>
            
              </form>
            </div>
          </div>

    </div>
  </div>
</div>
<script>loadDataforid(<?=$_POST["update_id"]?>,"singleMedicine");</script>
<?php
include('footer.php');

?>
