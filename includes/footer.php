<style>
    .whatsapp {
    position: fixed;
    right: 0px; top: 52%;
}
.whatsapp h5 {
    color: white;
    background: #20b20f;
    padding: 12px; border-radius: 10px;
}
</style>

<div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="footer-contact">
                            <h2>Get In Touch</h2>
<?php 
$sql = "SELECT * from tblpages where type='contact'";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
foreach($results as $result)
{       
?>

                            <p><i class="fa fa-map-marker-alt"></i><?php   echo $result->detail; ?></p>
                            <p><i class="fa fa-phone-alt"></i>+<?php   echo $result->phoneNumber; ?></p>
                            <p><i class="fa fa-envelope"></i><?php   echo $result->emailId; ?></p>

                        <?php } ?>
                            <div class="footer-social">
                                <a class="btn" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn" href=""><i class="fab fa-youtube"></i></a>
                                <a class="btn" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6">
                        <div class="footer-link">
                            <h2>Popular Links</h2>
                              <a href="index.php">Home</a>
                            <a href="about.php">About Us</a>
                            <a href="services.php">Services</a>
                            <a href="booking.php">Booking</a>
                            <a href="contact.php">Contact Us</a>
                          
                            
              
                        </div>
                    </div>
             
                </div>

            </div>
            <div class="container copyright">
                <p>Car Wash Management System</p>
            </div>
            <div class= "whatsapp">
                <a href="https://api.whatsapp.com/send?phone=923330000509" target="_blank"> 
                    <h5><i class="fa fa-whatsapp fa-3x " aria-hidden="true"></i></h5>
                </a>
            </div>
        </div>
        <!-- Footer End -->        <!-- Back to top button -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        
        <!-- Pre Loader -->
        <div id="loader" class="show">
            <div class="loader"></div>
        </div>

        
        