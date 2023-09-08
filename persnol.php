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
                <h2>Personal Health Vitals</h2>
            </div>
            <!-- end title -->
            <div class="row">
                <div class="col-md-12 col-sm-12 wow fadeIn off-set-3" data-wow-duration="1s" data-wow-delay="0.2s">
                    <div class="testimonial clearfix">
                        <div class="desc">
                        <a href="addpersnol.php" class="btn btn-primary"> Add</a>
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">BP</th>
                                        <th scope="col">Temperature</th>
                                        <th scope="col">Pulse rate</th>
                                        <th scope="col">Respiratory Rate</th>
                                        <th scope="col">Operations</th>
                                    </tr>
                                </thead>
                                <tbody id="Vitals_tableb">
                                </tbody>
                            </table>


                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>loadVitalsData();</script>
<?php
include('footer.php');

?>