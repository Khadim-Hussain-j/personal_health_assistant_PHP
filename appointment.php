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
                <h2>Appointments</h2>
                </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 wow fadeIn off-set-3" data-wow-duration="1s" data-wow-delay="0.2s">
                    <div class="testimonial clearfix">
                   <label for="#appsort">Sort by: </label> <select class="form-control" style="border-radius:20px; width: 150px;" id="appsort">
                   <option value="id">Id</option>        
                   <option value="docname">Doctor's Name</option>
                           <option value="date">Date</option>
                           </select>
                        <div class="desc">
                        <a href="addapp.php" class="btn btn-primary">Add</a>
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Doctor's Name</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Time</th>
                                        <th scope="col">Location</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Operations</th>
                                    </tr>
                                </thead>
                                <tbody id="appointment_tableb">
                                    

                                </tbody>
                            </table>


                        </div>
                   </div>
                </div>
            </div>
        </div>
    </div>
</div><script>
 loadAppointmentData();</script>
<?php
include('footer.php');
?>