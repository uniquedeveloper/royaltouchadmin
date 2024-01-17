<?php //error_reporting(0);
include('includes/config.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Car Wash management System | About Us Page</title>
   

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700;800;900&display=swap" rel="stylesheet"> 
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
<?php include_once('includes/header.php');?>
        <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>About Us</h2>
                    </div>
                    <div class="col-12">
                        <a href="index.php">Home</a>
                        <a href="about.php">About Us</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        

        <!-- About Start -->
        <section class="about-containerr">
        
            <div class="container" style="padding-bottom:200px;">
                <div class="row align-items-center">
                    <div class="col-lg-6" style="padding-left: 90px;">
                        <div class="section-header section-left" style="color:black;">
                            <p>What we do</p>
                            
                            <h1>
                                <span  style="color:black;">
                                    Full-Service 
                                    <br> 
                                </span>
                                <span  style="color: #ea0a0b;">
                                    Detailing for Cars
                                </span>
                            </h1>
                        </div>
                        <div class="spacer-inner"></div>
                        <div class="about-content">
                            <div class="about-container-black">
                                <p>
                                    Welcome to DetailX! 
                                </p>
                                <p>
                                Adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.
                                </p>
                            </div>
                        </div>
                        <div class="icon-box-wrapper" style="display:flex;text-align: left; flex-direction: row;">
                            <div class="icon-box-icon">
                                <a href="tel:+18408414433" tabindex="-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="482" height="483" viewBox="0 0 482 483" fill="none"><path d="M98.339 320.8C145.939 377.7 203.239 422.5 268.639 454.2C293.539 466 326.839 480 363.939 482.4C366.239 482.5 368.439 482.6 370.739 482.6C395.639 482.6 415.639 474 431.939 456.3C432.039 456.2 432.239 456 432.339 455.8C438.139 448.8 444.739 442.5 451.639 435.8C456.339 431.3 461.139 426.6 465.739 421.8C487.039 399.6 487.039 371.4 465.539 349.9L405.439 289.8C395.239 279.2 383.039 273.6 370.239 273.6C357.439 273.6 345.139 279.2 334.639 289.7L298.839 325.5C295.539 323.6 292.139 321.9 288.939 320.3C284.939 318.3 281.239 316.4 277.939 314.3C245.339 293.6 215.739 266.6 187.439 231.9C173.139 213.8 163.539 198.6 156.839 183.1C166.239 174.6 175.039 165.7 183.539 157C186.539 153.9 189.639 150.8 192.739 147.7C203.539 136.9 209.339 124.4 209.339 111.7C209.339 99 203.639 86.5 192.739 75.7L162.939 45.9C159.439 42.4 156.139 39 152.739 35.5C146.139 28.7 139.239 21.7 132.439 15.4C122.139 5.3 110.039 0 97.239 0C84.539 0 72.339 5.3 61.639 15.5L24.239 52.9C10.639 66.5 2.93901 83 1.33901 102.1C-0.560988 126 3.83901 151.4 15.239 182.1C32.739 229.6 59.139 273.7 98.339 320.8ZM25.739 104.2C26.939 90.9 32.039 79.8 41.639 70.2L78.839 33C84.639 27.4 91.039 24.5 97.239 24.5C103.339 24.5 109.539 27.4 115.239 33.2C121.939 39.4 128.239 45.9 135.039 52.8C138.439 56.3 141.939 59.8 145.439 63.4L175.239 93.2C181.439 99.4 184.639 105.7 184.639 111.9C184.639 118.1 181.439 124.4 175.239 130.6C172.139 133.7 169.039 136.9 165.939 140C156.639 149.4 147.939 158.3 138.339 166.8C138.139 167 138.039 167.1 137.839 167.3C129.539 175.6 130.839 183.5 132.839 189.5C132.939 189.8 133.039 190 133.139 190.3C140.839 208.8 151.539 226.4 168.239 247.4C198.239 284.4 229.839 313.1 264.639 335.2C268.939 338 273.539 340.2 277.839 342.4C281.839 344.4 285.539 346.3 288.839 348.4C289.239 348.6 289.539 348.8 289.939 349C293.239 350.7 296.439 351.5 299.639 351.5C307.639 351.5 312.839 346.4 314.539 344.7L351.939 307.3C357.739 301.5 364.039 298.4 370.239 298.4C377.839 298.4 384.039 303.1 387.939 307.3L448.239 367.5C460.239 379.5 460.139 392.5 447.939 405.2C443.739 409.7 439.339 414 434.639 418.5C427.639 425.3 420.339 432.3 413.739 440.2C402.239 452.6 388.539 458.4 370.839 458.4C369.139 458.4 367.339 458.3 365.639 458.2C332.839 456.1 302.339 443.3 279.439 432.4C217.239 402.3 162.639 359.6 117.339 305.4C80.039 260.5 54.939 218.7 38.339 173.9C28.039 146.4 24.139 124.3 25.739 104.2Z" fill="currentColor"></path></svg> </a>
                            </div>
                            <div class="icon-box-content">
                                <h5 class="icon-box-title-black">
                                    <a href="tel:+18408414433">
                                        0 800 555 44 33 
                                    </a>
                                </h5>
                            </div>
                            
                        </div>
                        
                    </div>
                    <div class="col-lg-6" style="position: relative;">
                        <!-- First Image -->
                        <div class="widget-container">
                            <img decoding="async" width="470px" height="500px" style="margin-left:140px;"src="https://detailx.ancorathemes.com/wp-content/uploads/elementor/thumbs/image05-copyright-qdoya3xkhf0lowg0mi1nwwr5nc2hjc56aprpscplc6.jpg" class="attachment-full size-full wp-image-25918" alt="">
                        </div>
                        <!-- Second Image -->
                        <div class="widget-container" style="position: absolute; top: 0; right: 0; bottom: 0; left: 0;margin-top:160px;">
                            <img decoding="async"  width="400" height="450" src="https://detailx.ancorathemes.com/wp-content/uploads/2023/08/image01-copyright.jpg" title="image05-copyright" alt="image05-copyright" loading="lazy">
                        </div>
                    </div>
                </div>
            </div>

            <div class="service-white">
                
                <div class="box-white">
                    <div class="icon"><i class="fas fa-trophy"></i></div>
                    <div class="heading-black">Premium quality </div>
                    <div class="text-black">Sed do eiusm od tempor </div>
                </div>

                <div class="box-white">
                    <div class="icon"><i class="fas fa-id-card"></i></div>
                    <div class="heading-black">Lisence & insurance </div>
                    <div class="text-black">Sed do eiusm od tempor </div>
                </div>

                <div class="box-white">
                    <div class="icon"><i class="fas fa-id-card"></i></div>
                    <div class="heading-black">Certified experts </div>
                    <div class="text-black">Sed do eiusm od tempor</div>
                </div>

                <div class="box-white">
                    <div class="icon"><i class="fas fa-car"></i></div>
                    <div class="heading-black">Range of service </div>
                    <div class="text-black">Sed do eiusm od tempor </div>
                </div>
            </div>
            <div class="container" style="height:400px;">
                <div class="row">
                    <!-- Image Column 1 -->
                    <div class="col-md-4 text-center" style="background-image: url('https://detailx.ancorathemes.com/wp-content/uploads/2023/08/image04-copyright.jpg');height:400px;background-size:cover; background-position: center center;background-repeat: no-repeat;">
                        <div class="column-content">
                            <!-- Content for the left column if needed -->
                        </div>
                    </div>

                    <!-- Text Column -->
                    <div class="col-md-4 text-center" style="background-color:#232225 ;display:flex;align-items:center">
                        <div class="sc_column-content">
                            <h2 class="sc_services_item_title">WHAT WE DO</h2>
                            <p class="sc_services_item_text ">Adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim ad.</p>
                            <h2 class="sc_services_item_title">THE OPPORTUNITIES</h2>
                            <p class="sc_services_item_text ">Adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim ad.</p> 
                        </div>
                    </div>

                    <!-- Image Column 2 -->
                    <div class="col-md-4 text-center" style="background-image: url('https://detailx.ancorathemes.com/wp-content/uploads/2023/08/image04-copyright.jpg');height:400px;background-size:cover; background-position: center center;background-repeat: no-repeat;">
                        <div class="column-content">
                            <!-- Content for the right column if needed -->
                        </div>
                    </div>
                </div>
            </div>


        </section>
           
        <!-- About End -->
        
        



  

<?php include_once('includes/footer.php');?>
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        
        <!-- Contact Javascript File -->
        <script src="mail/jqBootstrapValidation.min.js"></script>
        <script src="mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>
