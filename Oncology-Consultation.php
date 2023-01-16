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
                <h2 class="text-white animated zoomIn">Oncology Consultation</br></br></h2>
                <a href="" class="h5 text-white">Oncology Consultation involves providing an accurate diagnosis of your condition and explaining your situation and answer any questions you may have to ensure that you know everything there is to know about your condition</a>
                
            </div>
        </div>
    </div>
    <!-- Hero End -->

    <!-- About Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="col-12">
               
                <div class="section-title mb-4">
                    <h5 class="position-relative d-inline-block text-primary text-uppercase">Our Services - Oncology Consultation</h5>
                   
                </div>

                <p class="mb-4">During the course of your oncology consultation, you are likely to be seen by several specialists including a radiation oncologist and a surgical oncologist while your primary care physician and medical oncologist remain your primary doctors.</p>
                <h4 class="text-body fst-italic mb-4">How is an Oncology Consultation done?<span class="mb-4"><img src="img/oncology-01.png" width="402" height="302" class="rounded wow zoomIn" style="object-fit: cover;" data-wow-delay="0.9s" align="right"></span></h4>
                    <p class="mb-4">
                    At the start of your oncology consultation, your oncologist would ask about your symptoms, how and when they began, the tests you had conducted before presenting to them, and what medications you had been taking.
You should have all the medications with you on your first consultation and copies
of the results of all the tests you had done including imaging studies. 
                
                    
                
You may need to have some of them repeated too.
It is advisable to be accompanied by a family member or any loved one, because it might be uncomfortable and emotional having to respond to some of the questions your doctor might ask you.
After reviewing your test results, your doctor may recommend further tests, if necessary, to confirm a diagnosis of cancer or exclude it. In any case, your oncologist would give you a diagnosis.
The oncologist would give you enough room to ask all your questions and voice out your concerns. So it is advisable for you to have all your questions written down before you go for an oncology consultation.
After all necessary tests have been done and reviewed by your oncologist and cancer has been confirmed, they would inform you about the prognosis, stage, and type of cancer you have, and the best treatment plan for you.
If the cancer is incurable, your oncologist would provide you with an appropriate treatment plan to improve your quality of life, lower the cancer symptoms, and delay its progression.
Overall, you would need to prepare yourself mentally for whatever would come of your first oncology consultation. It is always emotionally and psychologically depressing to be informed of a cancer diagnosis, however, your mental response to this diagnosis may make or mar your quality of life living with the disease.
If cancer has been confirmed, you would need emotional support from your loved ones. This would go a long way in promoting a positive outlook on the situation.
                
                    </p>
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