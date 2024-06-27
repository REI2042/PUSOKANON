<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" type="x-icon" href="PicturesNeeded/pusokLogo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Titan+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

    <link rel="stylesheet" href="css/navbarstyles.css">


    <title>Pusokanon Hotlines</title>

</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg ">
            <a class="navbar-brand" href="index.php"> 
                <img src="PicturesNeeded/pusokLogo.png" alt="Pusokanon Logo"><span > PUSOKANON</span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item mt-2 pt-1">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>

                    
                    <li class="nav-item dropdown mt-2 pt-1">
                        <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Services
                        </a>
                        <div class="dropdown-menu" aria-labelledby="servicesDropdown">
                            <a class="dropdown-item" href="requestDocument.php">Request Documents</a>
                            <a class="dropdown-item" href="#">File Complaint</a>
                        </div>
                    </li>

                    <li class="nav-item mt-2 pt-1">
                        <a class="nav-link" href="#">Updates</a>
                    </li>

                    <li class="nav-item dropdown mt-2 pt-1">
                        <a class="nav-link dropdown-toggle" href="#" id="aboutUsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            About Us
                        </a>
                        <div class="dropdown-menu" aria-labelledby="aboutUsDropdown">
                            <a class="dropdown-item" href="aboutus-barangayInfo.php">Barangay Info</a>
                            <a class="dropdown-item" href="aboutus-barangayOfficials.php">Barangay Officials</a>
                            <a class="dropdown-item" href="barangayMap.php">Barangay Map</a>
                        </div>
                    </li>
    
                    <li class="nav-item mt-2 pt-1 me-3">
                        <a class="nav-link" href="emergency-hotlines.php">Hotlines</a>
                    </li>   
                    <li class="nav-item mt-1">
                        <a class="nav-link" href="login.php">
                        <div class="row">
                            <div class="col px-1 mt-1 pt-1"><span class="login-text">Login</span></div>
                            <div class="col"><i class="bi-person-circle"></i></div>
                        </div>
                    </a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <link rel="stylesheet" href="css/emergency-hotlines.css">
    <div class="content-holder" >   
        <div class="container-fluid px-0">
            <div class="title-container pl-3">
                <h1>Emergency Hotlines</h1>
                <hr class="bg-dark">
            </div> 
        </div>
        <div class="container-fluid px-5 pb-5 mt-3 text-center">
            <div class="row">
                <div class="col-sm-4">
                    <div class="card card-border mb-3">
                        <div class="card-header text-center text-white header-color">
                            NERVE COMMANDER CENTER
                        </div>
                        <div class="card-body d-flex flex-column flex-md-row justify-content-center align-items-center">
                            <p class="fs-1 fw-semibold text-color">
                                341 3771<br>
                                263 2345<br>
                                342 2249
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card card-border mb-3">
                        <div class="card-header text-center text-white header-color">
                            LLCDRRMO
                        </div>
                        <div class="card-body d-flex flex-column flex-md-row justify-content-center align-items-center">
                            <p class="fs-1 fw-semibold text-color">
                                342 2249
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card card-border mb-3">
                        <div class="card-header text-center text-white header-color">
                            LAPU-LAPU CITY POLICE OFFICE
                        </div>
                        <div class="card-body d-flex flex-column flex-md-row justify-content-center align-items-center">
                            <p class="fs-1 fw-semibold text-color">
                                340 1311 <br>
                                495 5593
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-sm-4">
                    <div class="card card-border mb-3">
                        <div class="card-header text-center text-white header-color">
                            LAPU-LAPU CITY FIRE DISTRICT
                        </div>
                        <div class="card-body d-flex flex-column flex-md-row justify-content-center align-items-center">
                            <p class="fs-1 fw-semibold text-color">
                                340 2994 <br>
                                342 8509
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card card-border mb-3">
                        <div class="card-header text-center text-white header-color">
                            ERUF LAPU-LAPU
                        </div>
                        <div class="card-body d-flex flex-column flex-md-row justify-content-center align-items-center">
                            <p class="fs-1 fw-semibold text-color">
                                340 2994
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card card-border mb-3">
                        <div class="card-header text-center text-white header-color">
                            RED CROSS LAPU-LAPU
                        </div>
                        <div class="card-body d-flex flex-column flex-md-row justify-content-center align-items-center">
                            <p class="fs-1 fw-semibold text-color">
                                495 4770
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include 'include/footer.php';?>