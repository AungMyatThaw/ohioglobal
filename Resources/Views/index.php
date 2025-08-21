<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ohio Global</title>
    <link rel="icon" href="../../Public/images/LOGO.jpg" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../../Public/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Inside <head> -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.3/dist/css/splide.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">


</head>

<!-- Before  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.3/dist/js/splide.min.js"></script>

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
                <!-- Flex container that separates nav and flag buttons -->
                <div class="w-100 d-flex justify-content-around align-items-center px-5">

                    <!-- Nav Links on the Left -->
                    <ul class="navbar-nav navy">
                        <li class="nav-item active">
                            <a class="nav-link fs-5" href="index.php" id="nav-home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-5" href="#about" id="nav-about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-5" href="activity.php" id="nav-activity">Activity</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-5" href="#service" id="nav-service">Service</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-5" href="#contact" id="nav-contact">Contact</a>
                        </li>
                    </ul>

                    <!-- Language Buttons on the Right -->
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

    <section id="home" class="text-center banner mt-2"
        style="padding: 70px 0 16px 0; background: linear-gradient(to right, #002147, #004080); color: white;">

        <div class="container">
            <h1 class="mb-2 pt-2" id="banner-title">OHIO Global International</h1>
            <p class="lead mb-0 mt-4" id="banner-p">Unlock a world of opportunity in Japan with OHIO Global
                Company.,Ltd. As a
                trusted agency, we empower Myanmar professionals to achieve their career aspirations by providing
                comprehensive
                support for various work visas. Let us guide you towards a brighter future in Japan.
            </p>
            <a href="#about"
                class="fw-bold about-title border rounded-lg p-2 d-inline-block m-5 text-decoration-none text-white"
                id="banner-btn">
                Learn about us
            </a>

        </div>
    </section>

    <section class="about py-5" id="about">
        <div class="container">
            <h2 class="about-heading mb-2 font-dark" id="about-title">Our journey</h2>
            <div class="row align-items-center mb-5">
                <!-- Left Column: Paragraph -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <p id="about-p1" data-aos="fade-up" data-aos-duration="2500" class="font-dark">
                        OHIO Global was founded in 2022, our company helps people achieve their dream jobs abroad. We
                        specialize in
                        connecting skilled individuals with international employment opportunities by bridging the gap
                        between
                        global talent and overseas employers. As an overseas employment agency, our mission is to
                        empower foreign
                        workers through ethical recruitment, reliable service, and full support throughout their journey
                        to work and
                        live abroad.
                    </p>
                    <p id="about-p2" data-aos="fade-up" data-aos-duration="2000" class="font-dark">Over time, our
                        unwavering
                        dedication to ethical
                        practices and comprehensive support allowed us to grow into a trusted leader. Each successful
                        placement
                        reinforced our commitment to excellence and empowered countless individuals.</p>
                    <p id="about-p3" data-aos="fade-up" data-aos-duration="1500" class="font-dark">Today, we proudly
                        stand as a
                        respected agency,
                        with a history defined by integrity and the flourishing careers of those we've guided. Our
                        mission remains
                        steadfast: to continue facilitating meaningful professional paths in Japan for the people of
                        Myanmar.</p>
                    <button class="btn d-block mx-auto">
                        <li class="list-unstyled">
                            <a class="nav-link fw-bold" href="#service" id="read-more-btn">What we do</a>
                        </li>
                    </button>
                </div>
                <!-- Right Column: Image -->
                <div class="col-md-6">
                    <img src="../../Public/images/New-banner.jpg" alt="About Us" class="img-fluid rounded shadow">
                </div>
            </div>
        </div>
        <div class="no-padding">
            <div class="container-fluid d-flex align-items-center justify-content-center" style="height: 150px;">
                <h2 class="font-dark" id="BoD-title">Our Board of Directors</h2>
            </div>
            <div class="d-flex overflow-auto gap-3 pb-4 px-3"
                style="scroll-snap-type: x mandatory; scroll-behavior: smooth;">

                <div class="board-member text-center p-4 bg-opacity-25 rounded-4"
                    style="scroll-snap-align: center; width: 100%;">
                    <img src="../../Public/images/md.jpg" class="img-fluid rounded-circle mb-2"
                        style="width: 100px; height: 100px; object-fit: cover;" alt="U Min" />
                    <h5 class="text-secondary mb-1" id="BoD-name1">U Min Naing</h5>
                    <p class="text-secondary-50" id="BoD-position1">Managing Director & CEO</p>
                </div>

                <div class="board-member text-center p-4 bg-opacity-25 rounded-4"
                    style="scroll-snap-align: center; width: 100%;">
                    <div class="d-flex flex-column align-items-center">
                        <img src="../../Public/images/d1.jpg" class="img-fluid rounded-circle mb-2"
                            style="width: 100px; height: 100px; object-fit: cover;" alt="Daw ThuZar Win Thu" />
                        <h5 class="text-secondary mb-1" id="BoD-name2">Daw ThuZar Win Thu</h5>
                        <p class="text-secondary-50" id="BoD-position2">Director</p>
                    </div>
                </div>

                <div class="board-member text-center p-4 bg-opacity-25 rounded-4"
                    style="scroll-snap-align: center; width: 100%;">
                    <img src="../../Public/images/d2.jpg" class="img-fluid rounded-circle mb-2"
                        style="width: 100px; height: 100px; object-fit: cover;" alt="U Aung Ko Let" />
                    <h5 class="text-secondary mb-1" id="BoD-name3">U Phone Naing</h5>
                    <p class="text-secondary-50" id="BoD-position3">Director</p>
                </div>
            </div>
        </div>
        <div class="text-center pt-5 d-flex justify-content-center" style="background-color: #f8f9fa;">
            <div class="container">
                <h2 class="mb-4 font-dark" id="member-title">Our Activities</h2>
                <div id="activityCarousel" class="carousel slide carousel-dark" data-bs-ride="carousel">
                    <div class="d-flex justify-content-center">
                        <section class="splide w-100" id="image-carousel" style="max-width: 700px;">
                            <div class="splide__track">
                                <ul class="splide__list">
                                    <li class="splide__slide">
                                        <img src="../../Public/images/Gallery1.jpg" alt="1">
                                    </li>
                                    <li class="splide__slide">
                                        <img src="../../Public/images/Gallery12.jpg" alt="2">
                                    </li>
                                    <li class="splide__slide">
                                        <img src="../../Public/images/Gallery14.jpg" alt="3">
                                    </li>
                                    <li class="splide__slide">
                                        <img src="../../Public/images/Gallery21.jpg" alt="4">
                                    </li>
                                </ul>
                            </div>
                        </section>
                    </div>
                </div>

                <!-- See More button below the carousel -->
                <div class="d-flex justify-content-center mt-4">
                    <a href="activity.php" class="btn btn-primary mb-5" id="member-btn">See more</a>
                </div>

            </div>
        </div>




    </section>


    <!-- 📄 Sections -->
    <section id="service" class="mb-2">
        <div class="container-fluid row align-items-center">

            <div class="col-12  text-center no-padding">
                <h1 id="service-title" class="mb-5 font-dark">Our Services</h1>
                <p id="service-p1" data-aos="zoom-out-left" data-aos-duration="2000"
                    class="w-75 d-flex justify-content-center mx-auto fs-5 font-dark">
                    We are a government-licensed employment placement agency and registered support organization. From
                    language
                    and skills assessment to visa processing, pre-departure training, and post-arrival support, we guide
                    both
                    workers and companies through every step of the hiring and relocation process. Our goal is to ensure
                    a smooth,
                    ethical, and successful transition for all parties involved.
                </p>
            </div>
            <div class="container mt-5">
                <div class="row align-items-center no-padding">
                    <div class="col-md-6">
                        <!-- Carousel -->
                        <div id="imageCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="../../Public/images/gallery8.jpg"
                                        style="height: 350px; object-fit: cover; border-radius: 15px;"
                                        class="d-block w-100" alt="Image 1">
                                </div>
                                <div class="carousel-item">
                                    <img src="../../Public/images/gallery34.jpg"
                                        style="height: 350px; object-fit: cover;  border-radius: 15px;"
                                        class="d-block w-100" alt="Image 2">
                                </div>
                                <div class="carousel-item">
                                    <img src="../../Public/images/carousel.jpg"
                                        style="height: 350px; object-fit: cover;  border-radius: 15px;"
                                        class="d-block w-100" alt="Image 3">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#imageCarousel"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#imageCarousel"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </button>
                        </div>

                    </div>

                    <div class="col-md-6">
                        <!-- Text that changes -->
                        <div id="carouselText" class="carousel-text fs-5 mt-3 mt-md-0" data-aos="fade-down">
                            This is the first image and its description.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="pb-5 pt-5 text-center border-top pt-3">
        <div class="container text-center">
            <h1 id="service-mt" class="mb-5 font-dark">Our Mission</h1>
            <p id="service-p2" class="w-75 d-flex justify-content-center mx-auto custom-font font-dark"
                data-aos="zoom-out-right" data-aos-duration="2000">We help job seekers in Myanmar
                achieve their dreams of working abroad by providing trusted
                guidance and comprehensive visa support.</p>
        </div>
    </div>

    <section id="contact" class="footer text-white no-padding">
        <div class="container no-padding">
            <h2 class="text-center no-padding" id="contact-title">Contact Us</h2>
            <div class="row">
                <!-- Left Column: Paragraph -->
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                    <div>
                        <h4 class="mb-3" id="contact-des">Our Location</h4>
                        <div class="ratio ratio-16x9">
                            <iframe data-aos="fade-down" data-aos-duration="2000"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1748.0450900127682!2d96.12796913685065!3d16.809393264319656!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1ebe3b00ded93%3A0xd9216e261758b71a!2sOHIO%20Myanmar%20International%20Co.%2C%20Ltd.!5e1!3m2!1sen!2smm!4v1753004407016!5m2!1sen!2smm"
                                width="550" height="350" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
                <!-- Right Column: Image -->
                <div class="col-lg-6 col-md-12">
                    <div class="container my-4">
                        <div class="d-flex flex-column align-items-start mx-auto" style="max-width: 300px; gap: 1rem;">
                            <div class="d-flex align-items-center mb-2">
                                <i class="fa-solid fa-envelope custom-icon me-3"></i>
                                <div>
                                    <h4 class="mb-1" id="contact-email">Email:</h4>
                                    <p class="mb-0">ohiomyanmar@ohio-mm.com</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <i class="fa-solid fa-business-time custom-icon me-3"></i>
                                <div>
                                    <h4 class="mb-1" id="contact-hour">Working Hours:</h4>
                                    <p class="mb-0">Mon–Sun: 9am–5pm</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <i class="fa-solid fa-phone custom-icon me-3"></i>
                                <div>
                                    <h4 class="mb-1" id="contact-phone">Phone:</h4>
                                    <p class="mb-0">+959 781 886 055</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <button onclick="scrollToTop()" id="backToTopBtn" title="Back to top">⬆</button>
    <footer class="text-dark bordertop pt-5 pb-3">
        <div class="container">
            <div class="row align-items-start custom-footer">

                <!-- LEFT MAIN COLUMN (Nav + Other Companies) -->
                <div class="col-12 col-md-6 mb-3">
                    <div class="row">
                        <!-- First group: Nav links -->
                        <div class="col-4">
                            <ul class="list-unstyled">
                                <li class="nav-item mb-2">
                                    <a class="nav-link fs-5 p-0" href="index.php" id="footer-home">Home</a>
                                </li>
                                <li class="nav-item mb-2">
                                    <a class="nav-link fs-5 p-0" href="#about" id="footer-about">About</a>
                                </li>
                                <li class="nav-item mb-2">
                                    <a class="nav-link fs-5 p-0" href="activity.php" id="footer-activity">Activity</a>
                                </li>
                                <li class="nav-item mb-2">
                                    <a class="nav-link fs-5 p-0" href="#service" id="footer-service">Service</a>
                                </li>
                                <li class="nav-item mb-2">
                                    <a class="nav-link fs-5 p-0" href="#contact" id="footer-contact">Contact</a>
                                </li>
                            </ul>
                        </div>

                        <!-- Second group: Other Companies -->
                        <div class="col-8">
                            <h4 class="fw-bold pb-3" id="caption-title">Our Partner Companies:</h4>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="https://www.ohiomyanmar.com/" class="nav-link p-1 fs-5">
                                        <img src="../../Public/images/ohio-logo.ico" alt="Ohio" height="50px"
                                            width="50px">
                                        <span>
                                            OHIO Myanmar International
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.jktmyanmarint.com/" class="nav-link p-1 fs-5">
                                        <img src="../../Public/images/jkt-logo.jpg" alt="JKT" height="50px"
                                            width="50px">
                                        <span>
                                            JKT Myanmar International
                                        </span>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>

                <!-- RIGHT MAIN COLUMN (Logo + Name) -->
                <div
                    class="col-12 col-md-6 d-flex flex-column flex-md-row justify-content-around align-items-center mb-3">

                    <div class="mb-3 text-center">
                        <h4 class="mb-5" id="contact-social">Social Media:</h4>
                        <a href="https://www.facebook.com/profile.php?id=100094888794247&mibextid=ZbWKwL"
                            class="custom-footer d-flex align-items-center justify-content-center text-decoration-none text-dark">
                            <i class="fa-brands fa-facebook-f fa-2x pb-3"></i>
                        </a>
                    </div>

                    <div class="mb-3 text-center">
                        <a class="navbar-brand fw-bold navy gap-2 d-flex flex-column align-items-center"
                            href="index.php">
                            <img src="../../Public/images/LOGO.jpg" class="img-fluid mb-2" style="height: 75px;"
                                alt="Logo">
                            <span id="footer-logo">OHIO Global International</span>
                        </a>
                    </div>

                </div>


            </div>

        </div>

        <!-- Bottom copyright -->
        <div class="text-center border-top pt-3">
            <p class="mb-0">&copy; 2025 Ohio Global International. All rights reserved.</p>
        </div>
        </div>
    </footer>

    <script src="../../Public/js/script.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
    AOS.init();
    </script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


    <script>
    new Splide('#image-carousel', {
        type: 'loop',
        perPage: 3,
        focus: 'center',
        autoplay: true,
        interval: 1500,
        pagination: false,
        gap: '1rem',
        breakpoints: {
            768: {
                perPage: 1,
            }
        }
    }).mount();
    </script>
    <script>
    function scrollToTop() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    }
    </script>

</body>

</html>