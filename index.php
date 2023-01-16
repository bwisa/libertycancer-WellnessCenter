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

    <!--  Customized Bootstrap Stylesheet   -->
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
                        <button class="btn btn-secondary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->
	
    
    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/Liberty banner.JPG" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Welcome to Liberty Cancer & Wellness Centre</h5>
                            <h3 class="display-1 text-white mb-md-4 animated zoomIn">The Best Cancer Care and Treatment Centre in the Region</h3>
                            <a href="appointment.php" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Appointment</a>
                            <a href="contact.php" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Contact Us</a>
                        </div>
                    </div>
                </div><div class="carousel-item">
                    <img class="w-100" src="img/BANNER2.JPG" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Liberty Cancer and Wellness Center</h5>
                            <h3 class="display-1 text-white mb-md-4 animated zoomIn">Advancing The Cancer Fight</h3>
                            <a href="appointment.php" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Appointment</a>
                            <a href="contact.php" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Contact Us</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/BANNER3.JPG" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Our Vision</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">A Kenyan Population with
                                Low Burden of Cancer.</h1>
                            <a href="appointment.php" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Appointment</a>
                            <a href="service.php" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Our Services</a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->

    
    <!-- Banner Start -->
    <div class="container-fluid banner mb-5">
        <div class="container">
            <div class="row gx-0">
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.1s">
                    
                    <div class="opening-hours-form d-flex flex-column p-5" style="height: 300px;">    <h3 class="text-white mb-3">Opening Hours</h3>
                        <div class="d-flex justify-content-between text-white mb-3">
                            <h6 class="text-white mb-0">Mon - Fri</h6>
                            <p class="mb-0"> 8:00am - 5:30pm</p>
                        </div>
                        <div class="d-flex justify-content-between text-white mb-3">
                            <h6 class="text-white mb-0">Saturday</h6>
                            <p class="mb-0"> 9:00am - 12:30pm</p>
                        </div>
                        <div class="d-flex justify-content-between text-white mb-3">
                            <h6 class="text-white mb-0">Sunday</h6>
                            <p class="mb-0"> Closed</p>
                        </div>
                        <a class="btn btn-light" href="appointment.php">Appointment</a>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.3s">
                    <div class="bg-dark d-flex flex-column p-5" style="height: 300px;">
                        <h3 class="text-white mb-3">Search A Doctor</h3>
                        <div class="date mb-3" id="date" data-target-input="nearest">
                            <input type="text" class="form-control bg-light border-0 datetimepicker-input"
                                placeholder="Appointment Date" data-target="#date" data-toggle="datetimepicker" style="height: 40px;">
                        </div>
                        <select class="form-select bg-light border-0 mb-3" style="height: 40px;">
                             
    
 
<option selected>Select A Service</option>
                            <option value="1">Oncology Consultation</option>
                            <option value="2">Chemotherapy</option>
                            <option value="3">Cancer Screening</option>
                            <option value="1">Pharmacy Services</option>
                            <option value="2">Psychosocial Counselling</option>
                            <option value="3">Nutritional Counselling</option>
                            <option value="1">Palliative Care</option>
                            <option value="2">Post Treatment</option>
                            <option value="3">Advanced Care Plans</option>
                        </select>
                        <a class="btn btn-primary" href="#">Search Doctor</a>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.6s">
                    <div class="appointment-form d-flex flex-column p-5" style="height: 300px;">
                        <h3 class="text-white mb-3">Make Appointment</h3>
                        <p class="text-white">
                            Assumption Centre CDN 3rd floor next to Mercy Mission Hospital, <br>
                            Moi Road, Nakuru Town - Kenya. <br>
                            <i class="fa-envelope-open"></i> info@libertycwc.co.ke</p>
                        <h2 class="text-white mb-0">0790 658 888</h2>
                        <h2 class="text-white mb-0">0786 658 888</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Start -->


    <!-- About Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title mb-4">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">About Us</h5>
                        <h1 class="display-5 mb-0">Liberty Cancer and Wellness Centre</h1>
                    </div>
                    <h4 class="text-body fst-italic mb-4">...is defining the future of cancer care in Kenya founded on a steadfast vision of A Kenyan population with a low burden of cancer.</h4>
                    <p class="mb-4">We are your companions in your journey to fight cancer. Our professional services are focused on offering the best treatment that you can get.</p>
                    <div class="row g-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.3s">
                            
    
 
                            <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i><a href="Oncology-Consultation.php">Oncology Consultation</a></h5>
                            <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i><a href="Chemotherapy.php">Chemotherapy</a></h5>
                            <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i><a href="Cancer-Screening.php">Cancer Screening</a></h5>
                            <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i><a href="Nutritional.php">Nutritional Counselling</a></h5>
                            <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i><a href="Post-Treatment-Advanced-Care-Plans.php">Advanced Care Plans</a></h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.6s">
                            <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i><a href="Pharmacy.php">Pharmacy Services</a></h5>
                            <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i><a href="Psychosocial.php">Psychosocial Counselling</a></h5>
                            <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i><a href="Palliative-Care.php">Palliative Care</a></h5> 
                            <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i><a href="Post-Treatment-Advanced-Care-Plans.php">Post Treatment</a></h5>
                        </div>
                    </div>
                    <a href="about.html" class="btn btn-primary py-3 px-5 mt-4 wow zoomIn" data-wow-delay="0.6s">More About Us</a>
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="img/CONSULTATION2.JPG" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Appointment Start -->
    <div class="container-fluid bg-primary bg-appointment my-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-6 py-5">
                    <div class="py-5">
                        <h1 class="display-5 text-white mb-4">Why Us?</h1>
                        <p class="text-white mb-0">
                         <ol class="">
                            <h5 class ="text-white"><li>Prescence of specialist in oncology field (clinical & radiation oncologist)</li></h5>
                            <h5 class ="text-white"><li>Conducive and serene environment for patients</li></h5>
                            <h5 class ="text-white"><li>Services charged at affordable rates</li></h5>
                            <h5 class ="text-white"><li>Our location is easily accessible from Nakuru town</li></h5>
                            <h5 class ="text-white"><li>Prescence of specialist in oncology field (clinical & radiation oncologist)</li></h5>

                         </ol>
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="appointment-form h-100 d-flex flex-column justify-content-center text-center p-5 wow zoomIn" data-wow-delay="0.6s">
                        <h1 class="text-white mb-4">Make Appointment</h1>
                        <form>
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <select class="form-select bg-light border-0" style="height: 55px;">
                                        <option value="1">Oncology Consultation</option>
                                        <option value="2">Chemotherapy</option>
                                        <option value="3">Cancer Screening</option>
                                        <option value="1">Pharmacy Services</option>
                                        <option value="2">Psychosocial Counselling</option>
                                        <option value="3">Nutritional Counselling</option>
                                        <option value="1">Palliative Care</option>
                                        <option value="2">Post Treatment</option>
                                        <option value="3">Advanced Care Plans</option>
                                        <option selected>Select A Service</option>

                                    </select>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <select class="form-select bg-light border-0" style="height: 55px;">
                                        <option selected>Select Doctor</option>
                                        <option value="1">Chemotherapist</option>
                                        <option value="2">Pharmacist</option>
                                        <option value="3">Others</option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control bg-light border-0" placeholder="Your Name" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="email" class="form-control bg-light border-0" placeholder="Your Email" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="date" id="date1" data-target-input="nearest">
                                        <input type="text"
                                            class="form-control bg-light border-0 datetimepicker-input"
                                            placeholder="Appointment Date" data-target="#date1" data-toggle="datetimepicker" style="height: 55px;">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="time" id="time1" data-target-input="nearest">
                                        <input type="text"
                                            class="form-control bg-light border-0 datetimepicker-input"
                                            placeholder="Appointment Time" data-target="#time1" data-toggle="datetimepicker" style="height: 55px;">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Make Appointment</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Appointment End -->


    

    <!-- Offer Start -->
    <div class="container-fluid bg-offer my-5 py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-7 wow zoomIn" data-wow-delay="0.6s">
                    <div class="offer-text text-center rounded p-5">
                        <h1 class="display-5 text-white">Save 30% On Your first service with us</h1>
                        <p class="text-white mb-4">Best Healthcare For Your Family!
We are your companions in your journey to fight cancer. Our professional services are focused on offering the best treatment that you can get, supported by a care team who will help you manage your life through treatment and beyond.
</p>
                        <a href="appointment.php" class="btn btn-dark py-3 px-5 me-3">Appointment</a>
                        <a href="about.php" class="btn btn-light py-3 px-5">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Offer End -->


    <!-- Pricing Start -->
    
    <!-- Pricing End -->


    <!-- Testimonial Start -->
    <div class="container-fluid bg-primary bg-testimonial py-5 my-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-7">
					<h1 align="center" class="display-5 text-dark">Testimonials</h1>
                    <div class="owl-carousel testimonial-carousel rounded p-5 wow zoomIn" data-wow-delay="0.6s">
						
                        <div class="testimonial-item text-center text-white">
                           <!-- <img class="img-fluid mx-auto rounded mb-4" src="img/testimonial-1.jpg" alt=""> -->
                            <p>I was diagnosed with cervical cancer early this year 2022. I was shocked, shattered and hopeless. My gynaecologist referred me to Liberty Cancer & Wellness Centre and there l met Dr.Siwillis and her staff.
Dr.Siwillis handled me in a professional way, put me at ease and treated me as though l was the only patient in the entire facility. She took me through the process of treatment explaining everything to the last detail. I felt like a burden has been lifted off my shoulders after my first appointment. I entered the facility a hopeless person but came out positive because of the assurance l got.
I started my treatment (chemotherapy & radiotherapy), the care l received in the course of my treatment was excellent. The doctor walked with me throughout the journey and would call oftenly to check on my progress and to encourage me.
I am now through with my treatment and the final results shows that l am cancer free. The journey hasn’t been easy but l thank God am now healed and back to my daily chores.
I would like to thank Dr.Siwillis and the entire staff of Liberty Cancer & Wellness Centre for the excellent work they are doing .God bless 
</p>
                            <hr class="mx-auto w-25">
                            <h4 class="text-white mb-0">My name is Ruth W.Muriithi</h4>
                        </div>
                        <div class="testimonial-item text-center text-white">
                            <!-- <img class="img-fluid mx-auto rounded mb-4" src="img/testimonial-1.jpg" alt=""> -->
                            <p>Dr. Siwillis, when it comes to this personality I often get lost for words!!
 
I Pradip Shah has been her patient from early January 2022 and till now I have had no second thoughts about her treatment.  
 
I was diagnosed with Multiple Myeloma and Dr.Siwillis has guided me in the best possible way to pursue my treatment. Currently am fairing on well and this is due to the quality care l have received.
 
Her dedication to me has been very thorough as she keeps in regular touch with my doctor in India as well.
 
I would definitely recommend her to anyone who is seeking advice for anything to do with Cancer.  She runs Liberty Cancer & Wellness Centre a facility in Nakuru and she is well connected to other Consultants who can be of great help in the course of treatment.
 
Her staff are well trained and they give a good reception when we visit her centre. It has been my privilege to know her from the start of my treatment.
 
My sincere thanks to her for her dedication to me.
</p>
                            <hr class="mx-auto w-25">
                            <h4 class="text-white mb-0">Pradip Shah Bawani</h4>
                        </div>
                        
                        <div class="testimonial-item text-center text-white">
                            <!-- <img class="img-fluid mx-auto rounded mb-4" src="img/testimonial-1.jpg" alt=""> -->
                            <p>I and my entire family would like to take this opportunity to thank Dr. Siwillis and her entire team of Liberty Cancer and wellness Centre for the good and quality services they offer at the facility.
When I was first diagnosed with Prostate Cancer stage 4 at a local hospital I got seriously devastated and felt hopeless in life, I saw the end of my life but when I visited the facility and with power of the Almighty God, I started getting hope in life due to the assurance and care l got.
I was put on hormonal therapy for 3 months followed by 6 cycles of chemotherapy coupled with some other support services like psychosocial counselling and nutritional counselling.     l am now done with chemotherapy and I can testify that I have a new perspective and hope in life.  
Thanks to the entire fraternity of Liberty Cancer and Wellness Centre for the good work. God bless you all.


</p>
                            <hr class="mx-auto w-25">
                            <h4 class="text-white mb-0">James Muguro Ngugi</h4>
                        </div>
                        
                         <div class="testimonial-item text-center text-white">
                            <!-- <img class="img-fluid mx-auto rounded mb-4" src="img/testimonial-1.jpg" alt=""> -->
                            <p>I started my treatment at Liberty Cancer & Wellness Centre in December 2021 after I was diagnosed with Multiple Myeloma.
Dr. Siwillis started me on chemotherapy on 21st Dec,2021 and l finished the 6th cycle on 19th April 2022. After my treatment l noted great improvement since initially l was walking with a walking stick but right now l can walk without any aid.
Currently l go for reviews after every 3 months and the recent reports shows great improvement in my health.
I would like to thank Dr.Siwillis and the entire staff. The services you provide are incredible and the patient experience is like no other.
God bless you all
</p>
                            <hr class="mx-auto w-25">
                            <h4 class="text-white mb-0">George Bengo</h4>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    
    <!-- Newsletter Start -->
    <div class="container-fluid position-relative pt-5 wow fadeInUp" data-wow-delay="0.1s" style="z-index: 1;">
        <div class="container">
            <div class="bg-primary p-5">
                <form class="mx-auto" style="max-width: 600px;">
                    <div class="input-group">
                        <input type="text" class="form-control border-white p-3" placeholder="Your Email">
                        <button class="btn btn-primary px-4">Sign Up</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Newsletter End -->
    
    <!-- Footer Start -->
    <?php include('partials/footer.php')?>
</html>