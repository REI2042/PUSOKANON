<?php
    include '../include/staff_restrict_pages.php';
    include 'headerAdmin.php';
    include '../db/DBconn.php';

    $total_users = fetchTotalResidents($pdo);
    $total_males = fetchTotalMales($pdo);
    $total_females = fetchTotalFemales($pdo);
    $pending_accounts = fetchPendingAccounts($pdo);
    $registered_voters = fetchRegisteredVoters($pdo);
    $non_registered_voters = fetchNonRegisteredVoters($pdo);
?>  

<link rel="stylesheet" href="css/Dashboard.css">

<section class="main">
    <h1 class="page_header">Pusokanon Dashboard</h1>
    <div class="pl-3 pr-3">
        <div class="row mr-0">
            <div class="col-12 col-sm-8" style="display: grid; align-content: space-between;">
                <div class="row mr-0 mb-3">
                    <div class="record-container col-12 col-sm-4">
                        <div class="record-box text-center">
                            <i class="fa-solid fa-users fa-2x"></i>
                            <p class="record-title">Total Users</p>
                            <p class="record-count"><?php echo "$total_users"; ?></p>
                        </div>
                    </div>
                    <div class="record-container col-12 col-sm-4">
                        <div class="record-box text-center">
                            <i class="fa-solid fa-mars fa-2x" style="color: #00BFFF"></i>
                            <p class="record-title">Males</p>
                            <p class="record-count"><?php echo "$total_males"; ?></p>
                        </div>
                    </div>
                    <div class="record-container col-12 col-sm-4">
                        <div class="record-box text-center">
                            <i class="fa-solid fa-venus fa-2x" style="color: #FF69B4"></i>
                            <p class="record-title">Females</p>
                            <p class="record-count"><?php echo "$total_females"; ?></p>
                        </div>
                    </div>
                </div>
                <div class="row mr-0">
                    <div class="record-container col-12 col-sm-4">
                        <div class="record-box text-center">
                            <i class="fa-solid fa-user-clock fa-2x" style="color: #FFC107"></i>
                            <p class="record-title">Pending Accounts</p>
                            <p class="record-count"><?php echo "$pending_accounts"; ?></p>
                        </div>
                    </div>
                    <div class="record-container col-12 col-sm-4">
                        <div class="record-box text-center">
                            <i class="fa-solid fa-user-check fa-2x" style="color: #28A745"></i>
                            <p class="record-title">Registered Voters</p>
                            <p class="record-count"><?php echo "$registered_voters"; ?></p>
                        </div>
                    </div>
                    <div class="record-container col-12 col-sm-4">
                        <div class="record-box text-center">
                            <i class="fa-solid fa-user-xmark fa-2x" style="color: #DC3545"></i>
                            <p class="record-title">Non-Voters</p>
                            <p class="record-count"><?php echo "$non_registered_voters"; ?></p>
                        </div>
                    </div>
                </div>
                <div class="row mr-0 text-center">
                    <h6 class="document-title">NUMBER OF REQUESTED DOCUMENTS</h6>
                </div>
                <div class="row mr-0 mb-1">
                    <div class="document-container col-12 col-sm-4">
                        <div class="document-box text-center">
                            <p class="document-name">Barangay Residency</p>
                            <p class="document-price"><?php echo fetchNumberOfRequestedDocuments($pdo, '1'); ?></p>
                        </div>
                    </div>
                    <div class="document-container col-12 col-sm-4">
                        <div class="document-box text-center">
                            <p class="document-name">Barangay Indigency</p>
                            <p class="document-price"><?php echo fetchNumberOfRequestedDocuments($pdo, '2'); ?></p>
                        </div>
                    </div>
                    <div class="document-container col-12 col-sm-4">
                        <div class="document-box text-center">
                            <p class="document-name">Barangay Certificate</p>
                            <p class="document-price"><?php echo fetchNumberOfRequestedDocuments($pdo, '3'); ?></p>
                        </div>
                    </div>
                </div>
                <div class="row mr-0 mb-1">
                    <div class="document-container col-12 col-sm-4">
                        <div class="document-box text-center">
                            <p class="document-name">Barangay Clearance</p>
                            <p class="document-price"><?php echo fetchNumberOfRequestedDocuments($pdo, '4'); ?></p>
                        </div>
                    </div>
                    <div class="document-container col-12 col-sm-4">
                        <div class="document-box text-center">
                            <p class="document-name">Cedula</p>
                            <p class="document-price"><?php echo fetchNumberOfRequestedDocuments($pdo, '5'); ?></p>
                        </div>
                    </div>
                    <div class="document-container col-12 col-sm-4">
                        <div class="document-box text-center">
                            <p class="document-name">Barangay Fencing Permit</p>
                            <p class="document-price"><?php echo fetchNumberOfRequestedDocuments($pdo, '6'); ?></p>
                        </div>
                    </div>
                </div>
                <div class="row mr-0">
                    <div class="document-container col-12 col-sm-4">
                        <div class="document-box text-center">
                            <p class="document-name">Barangay Business Clearance</p>
                            <p class="document-price"><?php echo fetchNumberOfRequestedDocuments($pdo, '7'); ?></p>
                        </div>
                    </div>
                    <div class="document-container col-12 col-sm-4">
                        <div class="document-box text-center">
                            <p class="document-name">Barangay Construction Permit</p>
                            <p class="document-price"><?php echo fetchNumberOfRequestedDocuments($pdo, '8'); ?></p>
                        </div>
                    </div>
                    <div class="document-container col-12 col-sm-4">
                        <div class="document-box text-center">
                            <p class="document-name">Barangay Electrical Permit</p>
                            <p class="document-price"><?php echo fetchNumberOfRequestedDocuments($pdo, '9'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box col-12 col-sm-4">
                <div class="row text-center m-3">
                    <i class="icon fa-solid fa-map-location-dot fa-2x"></i>
                    <h6 class="sub-title">NUMBER OF USERS BY SITIO</h6>
                </div>
                <div class="row text-center align-items-start ml-0 mr-0">
                    <div class="sitio col-sm">
                        <p class="sitio-name" style="background-color: #FF3333;">LAWIS</p>
                        <p class="sitio-numbers"><?php echo fetchUsersBySitio($pdo, 'LAWIS'); ?></p>
                        <p class="sitio-name" style="background-color: #FF9933;">SEABREEZE</p>
                        <p class="sitio-numbers"><?php echo fetchUsersBySitio($pdo, 'Seabreeze'); ?></p>
                        <p class="sitio-name" style="background-color: #FFFF33;">SAN ROQUE</p>
                        <p class="sitio-numbers"><?php echo fetchUsersBySitio($pdo, 'San Roque'); ?></p>
                        <p class="sitio-name" style="background-color: #99FF33;">SEASIDE</p>
                        <p class="sitio-numbers"><?php echo fetchUsersBySitio($pdo, 'Seaside'); ?></p>
                        <p class="sitio-name" style="background-color: #33FF33;">STA. MARIA</p>
                        <p class="sitio-numbers"><?php echo fetchUsersBySitio($pdo, 'Sta. Maria'); ?></p>
                        <p class="sitio-name" style="background-color: #33FF99;">MATUMBO</p>
                        <p class="sitio-numbers"><?php echo fetchUsersBySitio($pdo, 'Matumbo'); ?></p>
                        <p class="sitio-name" style="background-color: #33FFFF;">CEMENTO</p>
                        <p class="sitio-numbers"><?php echo fetchUsersBySitio($pdo, 'Cemento'); ?></p>
                    </div>
                    <div class="sitio col-sm">
                        <p class="sitio-name" style="background-color: #3399FF;">MUSTANG</p>
                        <p class="sitio-numbers"><?php echo fetchUsersBySitio($pdo, 'Mustang'); ?></p>
                        <p class="sitio-name" style="background-color: #3333FF;">ARCA</p>
                        <p class="sitio-numbers"><?php echo fetchUsersBySitio($pdo, 'Arca'); ?></p>
                        <p class="sitio-name" style="background-color: #9933FF;">IBABAO</p>
                        <p class="sitio-numbers"><?php echo fetchUsersBySitio($pdo, 'Ibabao'); ?></p>
                        <p class="sitio-name" style="background-color: #FF33FF;">CHUMBA-CHUMBA</p>
                        <p class="sitio-numbers"><?php echo fetchUsersBySitio($pdo, 'Chumba-chumba'); ?></p>
                        <p class="sitio-name" style="background-color: #FF3399;">NEW LIPATA</p>
                        <p class="sitio-numbers"><?php echo fetchUsersBySitio($pdo, 'New Lipata'); ?></p>
                        <p class="sitio-name" style="background-color: #A0A0A0;">SEWAGE</p>
                        <p class="sitio-numbers"><?php echo fetchUsersBySitio($pdo, 'Sewage'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'footerAdmin.php';?>