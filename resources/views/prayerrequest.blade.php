<!DOCTYPE html>
<html lang="en">


<head>
    <title>Send Your Prayer Requests | Springs of Restoration Church - Nairobi</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta Tags -->
    <meta name="description"
        content="Submit your prayer requests to Springs of Restoration Church in Nairobi, Kenya. Our prayer team is ready to intercede for you and believe in God's power.">
    <meta name="keywords"
        content="prayer request, intercessory prayer, church prayer, healing prayers, faith support, SORC, Springs of Restoration Church, Nairobi Church">
    <meta name="author" content="Springs of Restoration Church">
    <link rel="canonical" href="https://sorc.co.ke/prayer-request/">

    <!-- Open Graph Meta Tags (For Facebook & Social Sharing) -->
    <meta property="og:title" content="Send Your Prayer Requests | Springs of Restoration Church - Nairobi">
    <meta property="og:description"
        content="Need prayer? Submit your prayer request to Springs of Restoration Church. Our intercessors will stand with you in faith.">
    <meta property="og:image" content="https://sorc.co.ke/images/prayer-thumbnail.jpg">
    <meta property="og:url" content="https://sorc.co.ke/prayer-request/">
    <meta property="og:type" content="website">

    <!-- Twitter Card Meta Tags (For Twitter Previews) -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Send Your Prayer Requests | Springs of Restoration Church - Nairobi">
    <meta name="twitter:description"
        content="Submit your prayer request online and let our prayer team intercede for you. Trust in God's power to answer prayers.">
    <meta name="twitter:image" content="https://sorc.co.ke/images/prayer-thumbnail.jpg">
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
        style="height: 700px; background-image: url(images/bg_1.jpg);  background-size:cover; background-position: center center;background-attachment:fixed;"
        data-section="home">
        <div class="overlay js-fullheight"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center"
                data-scrollax-parent="true">
                <div class="col-md-10 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                    <p class="breadcrumbs mb-2" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span
                            class="mr-2"><a href="/">Home</a></span> <span>Prayer Request</span></p>
                    <h1 class="mb-3 mt-0 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Prayer
                        Request
                    </h1>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-bible-study">
        <div class="container-wrap">
            <div class="col-md-12 wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 d-md-flex">
                            <div class="one-forth ftco-animate">
                                <h3>Prayer Service</h3>
                                <p>Join us at SPRINGS OF RESTORATION CHURCH for our weekly prayer gatherings where we
                                    come together as a community to seek God's presence.</p>
                            </div>
                            <div class="one-half d-md-flex align-items-md-center ftco-animate">
                                {{-- <div class="countdown-wrap">
                                    <p class="countdown d-flex">
                                        <span id="days"></span>
                                        <span id="hours"></span>
                                        <span id="minutes"></span>
                                        <span id="seconds"></span>
                                    </p>
                                </div> --}}
                                <div class="button">
                                    <p><a href="/contact" class="btn btn-primary p-3">Join Prayer Service</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center">
                    <h2 class="heading-section">Prayer Request Form</h2>
                    <p>Share your prayer needs with our community. We believe in the power of prayer and would be
                        honored to pray for you.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 mx-auto ftco-animate">
                    <form id="prayerForm" class="prayer-request-form p-4 p-md-5 bg-light">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="name">Your Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="name" id="name"
                                        placeholder="Your Name" required>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="email">Your Email <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="phone">Phone Number <span class="text-danger">*</span></label>
                                    <input type="tel" class="form-control" name="phone" id="phone"
                                        placeholder="Your Phone Number" required>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="location">Location <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="location" id="location"
                                        placeholder="City, State, Country" required>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="preferred-date">Preferred Prayer Date <span
                                            class="text-danger">*</span></label>
                                    <input type="date" class="form-control" name="preferred_date"
                                        id="preferred-date" required>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="preferred-time">Preferred Prayer Time <span
                                            class="text-danger">*</span></label>
                                    <input type="time" class="form-control" name="preferred_time"
                                        id="preferred-time" required>
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <div class="form-group">
                                    <label for="prayer-type">Type of Prayer Request <span
                                            class="text-danger">*</span></label>
                                    <select class="form-control" name="prayer_type" id="prayer-type" required>
                                        <option value="" selected disabled>Select Prayer Type</option>
                                        <option value="healing">Healing</option>
                                        <option value="guidance">Guidance/Direction</option>
                                        <option value="family">Family</option>
                                        <option value="financial">Financial</option>
                                        <option value="spiritual">Spiritual Growth</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <div class="form-group">
                                    <label for="prayer-request">Prayer Request Details <span
                                            class="text-danger">*</span></label>
                                    <textarea rows="7" class="form-control" name="prayer_request" id="prayer-request"
                                        placeholder="Please share your prayer request here..." required></textarea>
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="privacy_consent"
                                        value="1" id="privacy-consent" required>
                                    <label class="form-check-label" for="privacy-consent">
                                        I agree that my prayer request can be shared with the prayer team. <span
                                            class="text-danger">*</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="public_sharing"
                                        value="1" id="public-sharing">
                                    <label class="form-check-label" for="public-sharing">
                                        This prayer request can be shared publicly (names will be kept private).
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary py-3 px-5">Submit Prayer
                                        Request</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div id="loading" class="loading-spinner" style="display:none;"></div>
                    <div id="responseMessage"></div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#prayerForm").submit(function(event) {
                event.preventDefault();

                $("#loading").show();
                $("#responseMessage").html("").removeClass("success-message error-message");

                $.ajax({
                    url: "{{ route('prayer.store') }}",
                    type: "POST",
                    data: $(this).serialize(),
                    dataType: "json",
                    success: function(response) {
                        $("#loading").hide();
                        $("#responseMessage").html(response.success).addClass(
                            "success-message");
                        $("#prayerForm")[0].reset();
                    },
                    error: function(xhr) {
                        $("#loading").hide();
                        let errors = xhr.responseJSON.errors;
                        let errorMessage = "";
                        $.each(errors, function(key, value) {
                            errorMessage += value[0] + "<br>";
                        });
                        $("#responseMessage").html(errorMessage).addClass("error-message");
                    }
                });
            });
        });
    </script>

    <style>
        .loading-spinner {
            width: 40px;
            height: 40px;
            border: 4px solid rgba(0, 0, 0, 0.1);
            border-top-color: #3498db;
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

        .success-message {
            color: white;
            background-color: green;
            padding: 10px;
            margin-top: 10px;
            border-radius: 5px;
        }

        .error-message {
            color: white;
            background-color: red;
            padding: 10px;
            margin-top: 10px;
            border-radius: 5px;
        }
    </style>

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
        data-cf-beacon='{"rayId":"91eddb747db45bc2","version":"2025.1.0","serverTiming":{"name":{"cfExtPri":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}},"token":"cd0b4b3a733644fc843ef0b185f98241","b":1}'
        crossorigin="anonymous"></script>
</body>


</html>
