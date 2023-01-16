<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Liberty Cancer and Wellness Center</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="We are your companions in your journey to fight cancer. Our professional services are focused on offering the best treatment that you can get." name="keywords">
    <meta content="Best Healthcare For Your Family! We are your companions in your journey to fight cancer. Our professional services are focused on offering the best treatment that you can get, supported by a care team who will help you manage your life through treatment and beyond." name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link href="lib/twentytwenty/twentytwenty.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    
   <!-- Spinner Start -->
<?php include('partials/spinner.php')?>
<!-- Spinner End -->


<!-- Topbar Start -->
<?php include('partials/topbar.php')?>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <?php 
	include('partials/navbar.html')
	?>
    <!-- Navbar End -->


    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->


    <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 hero-header mb-5">
        <div class="row py-3">
            <div class="col-12 text-center">
                <h2 class="text-white animated zoomIn">  Post Treatment Advanced Care Plans </br></br></h2>
                <a href="" class="h5 text-white">
This is true for short-term and long-term illnesses. If you do not plan ahead, your family may not know what your wishes are or be allowed to fulfill them.
                </a>
                
            </div>
        </div>
    </div>
    <!-- Hero End -->

    <!-- About Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
          <div class="col-12">
               
                <div class="section-title mb-4">
                    <h5 class="position-relative d-inline-block text-primary text-uppercase">Our Services -  Post Treatment Advanced Care Plans</h5>
                   
                </div>

                <p class="mb-4">
</p>
            <h4 class="text-body fst-italic mb-4"> Post Treatment Advanced Care Plans <span class="mb-4">
					
				  </span></h4>
                  <p class="mb-4">
            It is possible that, due to illness or injury, you may become unable to talk to a doctor or make personal medical decisions. By planning in advance, you can help make sure that any wishes about your treatment will be followed. </p>
                    <p class="mb-4">This is true for short-term and long-term illnesses. If you do not plan ahead, your family may not know what your wishes are or be allowed to fulfill them.
                      In periods of good health, it can be difficult to imagine feeling otherwise. </p>
                    <p class="mb-4">Many families find speaking about serious illnesses and end-of-life issues difficult, but professionals indicate that stress and worry can be ultimately reduced when these are discussed in advance.                      </p>
                    <p class="mb-4">At Liberty Cancer and Wellness Centre, we help you and your family about the types of decisions that might need to be made, considering those decisions ahead of time, and then letting others know—both your family and your health care providers—about your preferences. </p>
				
				 
				
              <a href="appointment.php" class="btn btn-primary py-3 px-5 mt-4 wow zoomIn" data-wow-delay="0.6s">Book Appointment</a>
                
                
            </div>
        </div>
    </div>

   
<!-- About End -->

<!-- Team Start -->

<!-- Team End -->



    <!-- Newsletter Start -->
    <div class="container-fluid position-relative pt-5 wow fadeInUp" data-wow-delay="0.1s" style="z-index: 1;">
        <div class="container">
            <div class="bg-primary p-5">
                <form class="mx-auto" style="max-width: 600px;">
                    <div class="input-group">
                        <input type="text" class="form-control border-white p-3" placeholder="Your Email">
                        <button class="btn btn-dark px-4">Sign Up</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Newsletter End -->
    
   
    <!-- Footer Start -->
     <?php include('partials/footer.php')?>

</html>