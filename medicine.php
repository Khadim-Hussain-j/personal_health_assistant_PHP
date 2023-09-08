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
                <h2>Medicine Dosages</h2>
            </div>
            <!-- end title -->
            <div class="row">
                <div class="col-md-12 col-sm-12 wow fadeIn off-set-3" data-wow-duration="1s" data-wow-delay="0.2s">
                    <div class="testimonial clearfix">
                    <label for="#Medicinesort">Sort by: </label> <select class="form-control" style="border-radius:20px; width: 150px;" id="Medicinesort">
                   <option value="id">Id</option>        
                   <option value="medname">Medicine Name</option>
                           <option value="quantity">Quantity</option>
                           </select>
                        <div class="desc">
                        <a href="addmedi.php" class="btn btn-primary">Add</a>
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Medicine Name</th>
                                        <th scope="col">Times in a Day</th>
                                        <th scope="col">Times per week</th>
                                        <th scope="col">Dosage Quantity</th>
                                        <th scope="col">Operations</th>
                                    </tr>
                                </thead>
                                <tbody id="Medicine_tableb">
                                </tbody>
                            </table>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>loadMedicineData();</script>
<?php include('footer.php');?>