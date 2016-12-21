<!-- Contact -->
<div class="container">
    <div class="row">
        <div class="col-md-12 centered">
            <h3><span>Contact us</span></h3>
            <p>We are located in High Bickington on the B3217 at the junction with Taylors Lane, opposite the Libbaton Golf Club.
                The entrance to the kennels is past the house, down Taylors Lane on the right. ** NEED SOME BETTER DIRECTIONS? **</p>
            </div>
        </div>
    </div>
    <!-- Contact end -->
    <!-- Map -->
    <div id="map" data-stellar-background-ratio=".3" class="animate wow bounceInUp">
    </div>
    <!-- Map end -->
    <!-- Content -->
    <div class="container content contact">
        <div class="row">
            <div class="col-md-6">
                <h3><span>Send us a message</span></h3>
                <form id="contact-form" method="post" action="contactme.php" role="form">

                    <div class="messages"></div>
                    <div class="row">
                        <div class="col-md-12">
                            <p class="text-muted"><strong>*</strong> These fields are required.</p>
                        </div>
                    </div>

                    <div class="controls">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_name">Firstname *</label>
                                    <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_lastname">Lastname *</label>
                                    <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Please enter your lastname *" required="required" data-error="Lastname is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_email">Email *</label>
                                    <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_phone">Phone</label>
                                    <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Please enter your phone">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="form_message">Message *</label>
                                    <textarea id="form_message" name="message" class="form-control" placeholder="Message for me *" rows="4" required="required" data-error="Please,leave us a message."></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <input type="submit" class="btn btn-success btn-send" value="Send message">
                            </div>
                        </div>

                    </div>

                </form>

            </div>
            <div class="col-md-6">
                <h3 class="contact"><span>Contact and visit</span></h3>
                <div id="tabs">
                    <ul>
                        <li><a href="#tabs-1">Contact details</a></li>
                        <li><a href="#tabs-2">Opening hours</a></li>
                        <li><a href="#tabs-3">Drop off times</a></li>
                    </ul>
                    <div id="tabs-1">
                        <ul class="bullet-info contact-info">
                            <li class="telephone">
                                01769 561094
                            </li>
                            <li class="address">
                                White Bridge Boarding Kennels, High Bickington, Umberleigh, Devon. EX37 9BL
                            </li>
                            <li class="mail">
                                whitebridgeboardingkennels@gmail.com</li>
                                <li class="facebook"><a href="#" class=""><img src="images/facebook-find.png" /></a></li>
                            </ul>
                        </div>
                        <div id="tabs-2">
                            <?php  
                            include 'openinghours.php';
                            ?>
                        </div>
                        <div id="tabs-3">
                            <?php  
                            include 'drop-off-times.php';
                            ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>