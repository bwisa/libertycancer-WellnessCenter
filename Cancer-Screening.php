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
                <h2 class="text-white animated zoomIn">Cancer Screening</br></br></h2>
                <a href="" class="h5 text-white">
                    Screening means checking your body for cancer before you have symptoms. Getting screening tests regularly may find several types of cancers early and when treatment is likely to work best. 
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
                    <h5 class="position-relative d-inline-block text-primary text-uppercase">Our Services - Cancer Screening</h5>
                   
                </div>

                <p class="mb-4">Checking for cancer (or for abnormal cells that may become cancer) in people who have no symptoms is called screening. Several screening tests have been proven to detect cancer early and to reduce the chance of dying from that cancer.
Screening tests can help find cancer at an early stage, before symptoms appear. When abnormal tissue or cancer is found early, it may be easier to treat or cure. By the time symptoms appear, the cancer may have grown and spread. This can make the cancer harder to treat or cure.
It is important to remember that when your doctor suggests a screening test, it does not always mean he or she thinks you have cancer. Screening tests are done when you have no cancer symptoms.</p>
				
				

                <h4 class="text-body fst-italic mb-4 text-primary">There are different kinds of screening tests.<span class="mb-4">
					
					<img src="img/cancer-screening.png" width="651" height="558" class="rounded wow zoomIn" style="object-fit: cover;" data-wow-delay="0.9s" align="right"></span></h4>
              <p class="mb-4">
                    
              </p>
				
				 <h4 class="text-body fst-italic mb-4">1. Physical exam and history:</h4>
                    <p class="mb-4">
                    
 An exam of the body to check general signs of health, including checking for signs of disease, such as lumps or anything else that seems unusual. A history of the patient’s health habits and past illnesses and treatments will also be taken.
             
                    </p>
				
				<h4 class="text-ody fst-italic mb-4">
					2. Laboratory tests:
				</h4>
                <p class="mb-4">
 Medical procedures that test samples of tissue, blood, urine, or other substances in the body.
                </p>
				
				<h4 class="text-ody fst-italic mb-4">
					3. Imaging procedures: 
				</h4>
                <p class="mb-4">
 Procedures that make pictures of areas inside the body.
                </p>
				
				<h4 class="text-ody fst-italic mb-4">
					4. Genetic tests:
				</h4>
                <p class="mb-4">
 A laboratory test in which cells or tissue are analyzed to look for changes in genes or chromosomes. These changes may be a sign that a person has or is at risk of having a specific disease or condition.                </p>
				
				
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