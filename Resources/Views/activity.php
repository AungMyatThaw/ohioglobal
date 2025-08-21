<?php
// You can add session_start() or any PHP logic above if needed
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ohio Global</title>
    <link rel="icon" href="../../Public/images/LOGO.jpg" type="image/png">
    <link rel="stylesheet" href="../../Public/css/activity-style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../../Public/css/style.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body data-bs-spy="scroll" data-bs-target="#navbar" data-bs-offset="70" tabindex="0">

    <!-- 🔝 Navbar -->
    <nav id="navbar" class="navbar navbar-expand-lg fixed-top border-end custom-navbar border-bottom">
        <div class="w-100 d-flex flex-wrap justify-content-between align-items-center px-3 px-md-5 gap-3">

            <a class="navbar-brand fw-bold navy" href="index.php">
                <img src="../../Public/images/LOGO.jpg" class="img-fluid" style="height: 75px;" alt="">
                <span id="nav-logo" class="d-flex align-items-center">OHIO Global International</span>
            </a>
            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navMenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navMenu">
                <div class="w-100 d-flex justify-content-around align-items-center px-5">
                    <ul class="navbar-nav navy">
                        <li class="nav-item"><a class="nav-link fs-5" href="index.php" id="nav-home">Home</a></li>
                        <li class="nav-item"><a class="nav-link fs-5" href="index.php#about" id="nav-about">About</a>
                        </li>
                        <li class="nav-item"><a class="nav-link active fs-5" href="activity.php"
                                id="nav-activity">Activity</a>
                        </li>
                        <li class="nav-item"><a class="nav-link fs-5" href="index.php#service"
                                id="nav-service">Service</a></li>
                        <li class="nav-item"><a class="nav-link fs-5" href="index.php#contact"
                                id="nav-contact">Contact</a></li>
                    </ul>
                    <div class="d-flex align-items-center gap-3">
                        <button class="lang-btn active">
                            <img src="../../Public/images/UK_flag.png" height="20px" width="25px" alt="UK Flag"
                                onclick="setLanguage('en')">
                        </button>
                        <button class="lang-btn">
                            <img src="../../Public/images/Japan_Flag.png" height="20px" width="25px" alt="JP Flag"
                                onclick="setLanguage('jp')">
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Year Buttons -->
    <!-- <div class="year-buttons d-flex justify-content-end">
        <button onclick="showPhotos('2025')" class="year-btn active">2025</button>
        <button onclick="showPhotos('2022')" class="year-btn">2024 & Before</button>
    </div> -->
    <!-- Right: Dynamic year buttons -->
    <div class="d-flex justify-content-between align-items-center flex-wrap px-5 below-navbar">
        <div id="year-buttons" class="d-flex flex-wrap gap-2 justify-content-end flex-grow-1 align-items-center">
            <!-- Year buttons will be added here -->
        </div>
    </div>


    <!-- Photo Section -->
    <div id="photo-section">
        <h2 class="d-flex justify-content-center pb-2" id="activities-title" data-aos="fade-down"
            data-aos-duration="2000">Our Activities</h2>
        <h4 id="activities-description" class="d-flex justify-content-center pb-3" data-aos="zoom-out-left"
            data-aos-duration="2500">
            A glimpse into our past events and activities, showcasing our team and community spirit.
        </h4>

    </div>
    <div id="gallery" class="year-group"></div>
    <!-- Back to Top -->
    <button onclick="scrollToTop()" id="backToTopBtn" title="Back to top">⬆</button>

    <!-- Footer -->
    <footer class="text-dark border-top pt-5 pb-3">
        <div class="container">
            <div class="row align-items-start custom-footer">
                <div class="col-12 col-md-6 mb-3">
                    <div class="row">
                        <div class="col-4">
                            <ul class="list-unstyled">
                                <li class="nav-item mb-2"><a class="nav-link fs-5 p-0" href="index.php"
                                        id="footer-home">Home</a></li>
                                <li class="nav-item mb-2"><a class="nav-link fs-5 p-0" href="index.php#about"
                                        id="footer-about">About</a></li>
                                <li class="nav-item mb-2"><a class="nav-link fs-5 p-0" href="activity.php"
                                        id="footer-activity">Activity</a></li>
                                <li class="nav-item mb-2"><a class="nav-link fs-5 p-0" href="index.php#service"
                                        id="footer-service">Service</a></li>
                                <li class="nav-item mb-2"><a class="nav-link fs-5 p-0" href="index.php#contact"
                                        id="footer-contact">Contact</a></li>
                            </ul>
                        </div>
                        <div class="col-8">
                            <h4 class="fw-bold pb-3" id="caption-title">Our Partner Companies:</h4>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="https://www.ohiomyanmar.com/" class="nav-link p-1 fs-5">
                                        <img src="../../Public/images/ohio-logo.ico" alt="Ohio" height="50px"
                                            width="50px">
                                        <span>OHIO Myanmar International</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.jktmyanmarint.com/" class="nav-link p-1 fs-5">
                                        <img src="../../Public/images/jkt-logo.jpg" alt="JKT" height="50px"
                                            width="50px">
                                        <span>JKT Myanmar International</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 d-flex justify-content-center align-items-center mb-3">
                    <a class="navbar-brand fw-bold navy gap-2" href="index.php">
                        <img src="../../Public/images/LOGO.jpg" class="img-fluid" style="height: 75px;" alt="">
                        <span id="footer-logo" class="d-flex align-items-center">OHIO Global International</span>
                    </a>
                </div>
            </div>
            <div class="text-center border-top pt-3">
                <p class="mb-0">&copy; 2025 Ohio Global International. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../Public/js/activity-script.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="../../public/js/gallery.js"></script>
    <script>
    AOS.init();
    </script>

    <!-- Lightbox for Zoom -->
    <div id="lightbox" class="lightbox" onclick="closeLightbox()">
        <img id="lightbox-img" src="" alt="Zoomed Image">
    </div>
    <script>
    function goToAbout() {
        window.location.href = 'index.php#about';
    }
    </script>

</body>

</html>