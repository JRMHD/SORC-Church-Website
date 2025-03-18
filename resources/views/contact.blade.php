<!DOCTYPE html>
<html lang="en">

<head>
    <title>Contact Us | Springs of Restoration Church - Nairobi</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta Tags -->
    <meta name="description"
        content="Get in touch with Springs of Restoration Church in Nairobi. Find our location, service times, and contact details. We'd love to hear from you!">
    <meta name="keywords"
        content="contact church, church location, church address, prayer requests, Springs of Restoration Church Nairobi">
    <meta name="author" content="Springs of Restoration Church">
    <link rel="canonical" href="https://sorc.co.ke/contact/">

    <!-- Open Graph Meta Tags (For Facebook & Social Sharing) -->
    <meta property="og:title" content="Contact Us | Springs of Restoration Church - Nairobi">
    <meta property="og:description"
        content="Need prayers or have questions? Contact Springs of Restoration Church today.">
    <meta property="og:image" content="https://sorc.co.ke/images/contact-thumbnail.jpg">
    <meta property="og:url" content="https://sorc.co.ke/contact/">
    <meta property="og:type" content="website">

    <!-- Twitter Card Meta Tags (For Twitter Previews) -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Contact Us | Springs of Restoration Church - Nairobi">
    <meta name="twitter:description"
        content="Reach out to us for inquiries, prayer requests, or directions to our church.">
    <meta name="twitter:image" content="https://sorc.co.ke/images/contact-thumbnail.jpg">
    <meta name="twitter:site" content="@yourchurchhandle">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('images/sorc web logo.png') }}" type="image/png">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800" rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
</head>


<body>

    @include('header')
    <!-- END nav -->

    <section id="home" class="video-hero js-fullheight"
        style="height: 700px; background-image: url(images/aboutpic.jpg);  background-size:cover; background-position: center center;background-attachment:fixed;"
        data-section="home">
        <div class="overlay js-fullheight"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center"
                data-scrollax-parent="true">
                <div class="col-md-10 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                    <p class="breadcrumbs mb-2" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span
                            class="mr-2"><a href="/">Home</a></span> <span>Contact</span></p>
                    <h1 class="mb-3 mt-0 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Contact
                    </h1>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section contact-section ftco-degree-bg">
        <div class="container bg-light">
            <div class="row d-flex mb-5 contact-info">
                <div class="col-md-12 mb-4">
                    <h2 class="h4">Contact Information</h2>
                </div>
                <div class="w-100"></div>
                <div class="col-md-3">
                    <p><span>Address:</span> Kitengela, Nairobi Kenya</p>
                </div>
                <div class="col-md-3">
                    <p><span>Phone:</span> <a href="tel://1234567920"> +254 700 496733</a></p>
                </div>
                <div class="col-md-3">
                    <p><span>Email:</span>
                        <a href="mailto:springsrestoration@gmail.com">springsrestoration@gmail.com</a>
                    </p>
                </div>

                {{-- <div class="col-md-3">
                    <p><span>Website</span> <a href="#">yoursite.com</a></p>
                </div> --}}
            </div>
            <div class="row block-9">
                <!-- Form Section (Left) -->
                <div class="col-md-6 pr-md-5">
                    <form id="contactForm">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="Your Name" required>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="Your Email"
                                required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="phone"
                                placeholder="Your Phone Number" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" placeholder="Subject"
                                required>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" cols="30" rows="7" placeholder="Message" required></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary py-3 px-5">Send Message</button>
                        </div>
                    </form>

                    <!-- Modern Rotating Circle Loader -->
                    <div id="loading" class="loading-spinner" style="display:none;"></div>

                    <!-- Response Message -->
                    <div id="responseMessage" class="response-message"></div>
                </div>

                <!-- jQuery -->
                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

                <!-- AJAX Submission with Loader -->
                <script>
                    $(document).ready(function() {
                        $("#contactForm").submit(function(event) {
                            event.preventDefault();

                            $("#loading").show(); // Show loading animation
                            $("#responseMessage").html("").removeClass("success-message error-message");

                            $.ajax({
                                url: "{{ route('contact.store') }}",
                                type: "POST",
                                data: $(this).serialize(),
                                dataType: "json",
                                success: function(response) {
                                    $("#loading").hide();
                                    $("#responseMessage").html(response.success)
                                        .addClass("success-message"); // Green for success
                                    $("#contactForm")[0].reset();
                                },
                                error: function(xhr) {
                                    $("#loading").hide();
                                    let errors = xhr.responseJSON.errors;
                                    let errorMessage = "";
                                    $.each(errors, function(key, value) {
                                        errorMessage += value[0] + "<br>";
                                    });
                                    $("#responseMessage").html(errorMessage)
                                        .addClass("error-message"); // Red for errors
                                }
                            });
                        });
                    });
                </script>

                <!-- Styling for Response Messages & Rotating Loader -->
                <style>
                    .loading-spinner {
                        width: 40px;
                        height: 40px;
                        border: 4px solid rgba(0, 0, 0, 0.1);
                        border-top-color: #3498db;
                        /* Blue color */
                        border-radius: 50%;
                        animation: spin 0.8s linear infinite;
                        margin: 10px auto;
                    }

                    @keyframes spin {
                        0% {
                            transform: rotate(0deg);
                        }

                        100% {
                            transform: rotate(360deg);
                        }
                    }

                    .response-message {
                        margin-top: 10px;
                        padding: 10px;
                        font-weight: bold;
                        border-radius: 5px;
                        text-align: center;
                    }

                    .success-message {
                        color: #155724;
                        background-color: #d4edda;
                        border: 1px solid #c3e6cb;
                    }

                    .error-message {
                        color: #721c24;
                        background-color: #f8d7da;
                        border: 1px solid #f5c6cb;
                    }
                </style>


                <!-- Map Section (Right) -->
                <div class="col-md-6">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.4862240066313!2d36.951738474965914!3d-1.48061099850548!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f9f2e72ad2e35%3A0xb0679181b4556a2e!2sSprings%20Of%20Restoration%20Centre!5e0!3m2!1sen!2ske!4v1741799985010!5m2!1sen!2ske"
                        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>

        </div>


    </section>


    @include('footer')



    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke-miterlimit="10" stroke="#F96D00" />
        </svg></div>


    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.html"></script>
    <script src="js/jquery.mb.YTPlayer.min.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&amp;sensor=false">
    </script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>

    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015"
        integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ=="
        data-cf-beacon='{"rayId":"91eddb768ad35bc5","version":"2025.1.0","serverTiming":{"name":{"cfExtPri":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}},"token":"cd0b4b3a733644fc843ef0b185f98241","b":1}'
        crossorigin="anonymous"></script>
</body>

</html>
