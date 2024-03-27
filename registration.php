<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register to Pusokanon</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="stylesRegistration.css">
    <link href="https://fonts.googleapis.com/css?family=Titan+One" rel="stylesheet">
</head>
<body>
	<header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#"> 
                <img src="PicturesNeeded/pusokLogo.png" alt="Pusokanon Logo"><span> PUSOKANON</span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Services
                        </a>
                        <div class="dropdown-menu" aria-labelledby="servicesDropdown">
                            <a class="dropdown-item" href="#">Request Documents</a>
                            <a class="dropdown-item" href="#">Forum</a>
                            <a class="dropdown-item" href="#">Hazard Map</a>
                            <a class="dropdown-item" href="#">Barangay Directory</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="aboutUsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            About Us
                        </a>
                        <div class="dropdown-menu" aria-labelledby="aboutUsDropdown">
                            <a class="dropdown-item" href="#">Barangay Officials</a>
                            <a class="dropdown-item" href="#">VMGO</a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Login</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <main>
    	<section class="welcome-section">
                 <div class="container">
			        <div class="card">
			            <div class="card-header bg-#48BF91 text-white">
			                <h4 align="center">Register</h4>
			                <hr>
			            </div>

			            <div class="card-body">
			                <form>
			                    <div class="row mb-3 g-2">
			                    	<div class="col">
				                        <label for="Fistname" class="form-label">Fist Name</label>
				                        <input type="text" class="form-control" id="firstname" placeholder="Enter your Firstname" required>
				                    </div>
				                    <div class="col">
				                        <label for="Lastname" class="form-label">Last Name</label>
				                        <input type="text" class="form-control" id="lastname" placeholder="Enter your Lastname" required>
				                    </div>

				                    <div class="col">
				                        <label for="Middlename" class="form-label">Middle Name</label>
				                        <input type="text" class="form-control" id="midname" placeholder="Enter your Middlename" required>
				                    </div>
			                    </div>
			                    <div class="mb-3">
			                        <label class="form-label">Birth Date</label>
			                        <div class="d-flex">
			                            <select class="form-select me-2" id="birthMonth" required>
			                                <option value="">Month</option>
			                                <option value="01">January</option>
			                                <option value="02">February</option>
			                                <option value="03">March</option>
			                                <option value="04">April</option>
			                                <option value="05">May</option>
			                                <option value="06">June</option>
			                                <option value="07">July</option>
			                                <option value="08">August</option>
			                                <option value="09">September</option>
			                                <option value="10">October</option>
			                                <option value="11">November</option>
			                                <option value="12">December</option>
			                              
			                            </select>
			                            <select class="form-select me-2" id="birthDay" required>
			                                <option value="">Day</option>
			                                <option value="01">1</option>
			                                <option value="02">2</option>
			                             
			                            </select>
			                            <select class="form-select" id="birthYear" required>
			                                <option value="">Year</option>
			                                <option value="2023">2023</option>
			                                <option value="2022">2022</option>
			                                
			                            </select>
			                        </div>
			                    </div>
			                    <div class="mb-3">
			                        <label for="email" class="form-label">Email</label>
			                        <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
			                    </div>
			                    <div class="mb-3">
			                        <label for="password" class="form-label">Password</label>
			                        <input type="password" class="form-control" id="password" placeholder="Enter your password" required>
			                    </div>
			                 
			                    <div class="text-center"> 
			                    	<button type="submit" class="btn btn-outline-success w-50">Register</button>
			                    </div>
			                    
			                </form>
			            </div>
			        </div>
			    </div>
            	
        </section>

    </main>

 	<footer>
        <div class="container">
            <p>&copy; 2024 Barangay Pusok, Lapu-Lapu City. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>