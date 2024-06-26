<?php
    include 'include/res_restrict_pages.php';
    require_once 'include/header.php';
?>
<link rel="stylesheet" href="css/indexstyles.css">

    <main>
        <section class="welcome-section">
            <div class="text-center">
                <div class="banner">
                    <span class="text-center">WELCOME <br>PUSOKANON</span><br>
                    <button class="text-center" type="button" onclick="toServices()" id="padayonBtn">Padayon</button>
                </div>
            </div>
        </section>
        
        <section class="services " id="services-box">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 btn" onclick="requestDoc()">
                        <div class="service-card">
                            <i class="bi bi-file-earmark-text m-3"></i>
                            <h3 class="mt-1 p-1">Request Documents</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                    <div class="col-md-4 btn">
                        <div class="service-card">
                            <i class="fa-solid fa-phone-volume m-2"></i>
                            <h3>Emergency Hotlines</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                    <div class="col-md-4 btn">
                        <div class="service-card">
                            <img src="PicturesNeeded/location.svg" class="iconsServices m-3" alt="iconlocation">
                            <h3>Hazard Map</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 btn">
                        <div class="service-card">
                            <img src="PicturesNeeded/directory.svg" class="iconsServices" alt="icondirectory">
                            <h3>File Complain</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                    <div class="col-md-4 btn">
                        <div class="service-card">
                            <img src="PicturesNeeded/forum.svg" class="iconsServices" alt="iconForum">
                            <h3>Forum</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                    <div class="col-md-4 btn">
                        <div class="service-card">
                            <img src="PicturesNeeded/officials.svg" class="iconsServices" alt="iconOfficials">
                            <h3>Barangay Officials</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
<script>
    function toServices() {
        window.location.href = "#services-box";
    }
    function requestDoc(){
        window.location.href = 'requestDocument.php';
    }
</script>
<?php require_once 'include/footer.php' ?>
