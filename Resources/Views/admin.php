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
    <!-- Flatpickr CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

    <!-- Flatpickr JS -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <!-- Flatpickr Month Select Plugin -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr/dist/plugins/monthSelect/index.js"></script>

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/plugins/monthSelect/style.css">

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
                        <li class="nav-item"><a class="nav-link active fs-5" href="index.php" id="nav-home">Home</a>
                        </li>
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
    <!-- <div class="d-flex justify-content-between align-items-center flex-wrap mb-3" style="padding-top: 20px;">
 
  <div  class="me-3">
    <button class="btn" data-bs-toggle="modal" data-bs-target="#uploadModal">Upload Image</button>
  </div>

  
  <div id="year-buttons" class="me-3">
    
  </div>
</div> -->
    <div class="d-flex justify-content-between align-items-center flex-wrap px-5 below-navbar">
        <!-- Left: Upload button -->
        <div class="flex-shrink-0 me-3">
            <button class="btn mb-3 shadow-btn" data-bs-toggle="modal" data-bs-target="#uploadModal">
                Upload Image</button>
        </div>
        <p class="ginger">*Please upload photos with no space in their name.</p>
        <!-- Right: Dynamic year buttons -->
        <div id="year-buttons" class="d-flex flex-wrap gap-2 justify-content-end flex-grow-1 align-items-center mb-3">
            <!-- Year buttons will be added here -->
        </div>
    </div>


    <!-- Bootstrap Modal for Upload -->
    <div class="modal fade" id="uploadModal" tabindex="-1" aria-labelledby="uploadModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <form action="upload.php" id="uploadForm" method="POST" enctype="multipart/form-data">
                    <div class="modal-header">
                        <h5 class="modal-title" id="uploadModalLabel">Upload Image</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <!-- Year-Month picker using Flatpickr -->
                        <div class="mb-3">
                            <label for="yearMonth" class="form-label">Select Year and Month:</label>
                            <input type="month" id="yearMonth" name="yearMonth" class="form-control"
                                placeholder="YYYY-MM" required>
                        </div>

                        <!-- Hidden inputs to send year and month to PHP -->
                        <input type="hidden" name="year" id="hiddenYear">
                        <input type="hidden" name="month" id="hiddenMonth">

                        <!-- Image file input -->
                        <div class="mb-3">
                            <label for="image" class="form-label">Upload Image:</label>
                            <input type="file" name="image" class="form-control" accept="image/*" required>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="upload-btn">Upload</button>
                    </div>
                </form>


            </div>
        </div>
    </div>


    <!-- Photo Section -->
    <div id="photo-section" class="p-4">
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
    <!-- Lightbox Overlay -->
    <div class="lightbox" id="lightbox">
        <img id="lightbox-img" src="">
        <i id="trash-icon" class="trash-icon">🗑️</i>
    </div>
    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../Public/js/activity-script.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="../../public/js/gallery.js"></script>
    <script>
    AOS.init();
    </script>




    <script>
    function goToAbout() {
        window.location.href = 'index.php#about';
    }


    flatpickr("#yearMonth", {
        dateFormat: "Y-m",
        maxDate: new Date(), // disables all future months
        plugins: [
            new monthSelectPlugin({
                shorthand: true, // show short month names like "Aug"
                dateFormat: "Y-m", // format to match your PHP processing
                theme: "light"
            })
        ]
    });


    const yearMonthInput = document.getElementById('yearMonth');
    const yearInput = document.getElementById('hiddenYear');
    const monthInput = document.getElementById('hiddenMonth');

    // Set default year and month on page load
    const today = new Date();
    yearMonthInput.value = today.toISOString().slice(0, 7);
    yearInput.value = today.getFullYear();
    monthInput.value = today.getMonth() + 1;

    // Update hidden fields when user selects date
    yearMonthInput.addEventListener('input', () => {
        const [year, month] = yearMonthInput.value.split("-");
        yearInput.value = year;
        monthInput.value = parseInt(month); // convert to int to match PHP
    });
    </script>

</body>

</html>