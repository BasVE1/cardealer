<?php

session_start();

if (!$_SESSION['logged_in']) {
    header("Location: index.php");
    exit();
}
extract($_SESSION['userData']);

$avatar_url = "https://cdn.discordapp.com/avatars/$discord_id/$avatar.jpg"

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Luxury Auto's - Dashboard</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link href="img/favicon.ico" rel="icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Oswald:wght@600&display=swap"
        rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

    <body>
        <style>
            body {
                background-color: white;
            }
        </style>
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar Start -->
        <nav style="height:70px;"
            class="navbar navbar-expand-lg bg-secondary navbar-dark sticky-top py-lg-0 px-lg-5 wow fadeIn"
            data-wow-delay="0.1s">
            <a href="index.html" class="navbar-brand ms-4 ms-lg-0">
                <h1 class="mb-0 text-primary text-uppercase"><i class="fa fa-car me-3"></i><span
                        style="color:White;">Luxury Auto's</span></h1>
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="index.html" class="nav-item nav-link">Home</a>
                    <a href="catalogus.html" class="nav-item nav-link active">Catalogus</a>
                    <a href="service.html" class="nav-item nav-link ">Bestellingen</a>
                </div>
                <a href="" class="btn btn-primary rounded-0 py-2 px-lg-4 d-none d-lg-block">Log in<i
                        class="fa fa-arrow-right ms-3"></i></a>
            </div>
        </nav>
        <!-- Navbar End -->


        <!-- Page Header Start -->
        <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container text-center py-5">
                <h1 class="display-3 text-white text-uppercase mb-3 animated slideInDown">Dashboard</h1>
            </div>
        </div>
        <!-- Page Header End -->

        <div class="container-xxl py-3">
            <div class="container">
                <div class="row g-0">
                    <div class="col-lg-12 wow fadeIn" data-wow-delay="0.5s">
                        <div class="bg-secondary h-100 d-flex flex-column justify-content-center p-5">
                            <h1 class="text-start text-uppercase">Welkom
                                <?php echo $name ?>
                            </h1>
                            <div class="row">
                                <div class="col-12">
                                    <p><b>Welkom op je dashboard. Hier kun je al je inschrijvingen bekijken en zien wat
                                            de status hiervan is.</b></p><br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-xxl py-1">
            <div class="container">
                <div class="row g-0">
                    <div class="col-lg-12 wow fadeIn" data-wow-delay="0.5s">
                        <div class="bg-secondary h-100 d-flex flex-column justify-content-center p-5">
                            <h1 class="text-start text-uppercase">Jouw inschrijvingen</h1> <br><hr><br>
                            <div class="row">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col"><h6 class="text-start text-uppercase">Voertuignaam</h6></th>
                                            <th scope="col"><h6 class="text-start text-uppercase">Prijs</h6></th>
                                            <th scope="col"><h6 class="text-start text-uppercase">Ophaaldatum</h6></th>
                                            <th scope="col"><h6 class="text-start text-uppercase">Status</h6></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td scope="row">Porsche 971 Mansory</th>
                                            <td>$500.000</td>
                                            <td>01-02-2000</td>
                                            <td>Goedgekeurd</td>
                                        </tr>
                                        <tr>
                                            <td scope="row">Porsche 971 Mansory</th>
                                            <td>$500.000</td>
                                            <td>01-02-2000</td>
                                            <td>Afgekeurd</td>
                                        </tr>
                                        <tr>
                                            <td scope="row">Porsche 971 Mansory</th>
                                            <td>$500.000</td>
                                            <td>01-02-2000</td>
                                            <td>Afwachting</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <!-- Footer Start -->
    <div class="container-fluid bg-secondary text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">Your Site Name</a>, All Right Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
                        <br>Distributed By: <a class="border-bottom" href="https://themewagon.com"
                            target="_blank">ThemeWagon</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</body>

</html>