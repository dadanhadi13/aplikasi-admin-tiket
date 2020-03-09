<?php
    include 'includes/user_token.php';
    include 'includes/myfirebase.php';

    $username_url = $_GET['username'];

    //data admin
	$reference = 'Admin/'.$_SESSION['username'];
    $checkdata = $database->getReference($reference)->getValue();
    
    // data detail user
    $path_user_details = 'Users/'.$username_url;
    $checkdata_user_details = $database->getReference($path_user_details)->getValue();

    //data wisata user
	$path_wisata_user = 'MyTickets/'.$username_url.'/wisata';
    $checkdata_wisata = $database->getReference($path_wisata_user)->getValue();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Sales Details - MarkPro</title>
    <meta charset="utf-8">
    <meta name="description" content="Login MarkPro Admin">
    <meta name="keywords" content="MarkPro, Web Dashboard Markpro, Login MarkPro">
    <meta name="author" content="Dadanhadi">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="https://kit.fontawesome.com/3cdaf32d1c.js" crossorigin="anonymous"></script>
</head>

<body>

    <div class="side-left">
        <div class="shortcut" onmouseover="showAdminProfile()">
            <div class="emblemapp">
                <img src="images/emblemapp.png" height="29" alt="">
            </div>
            <div class="menus">

                <div class="item-menu incactive">
                    <a href="dashboard.php">
                        <p class="icon-item-menu">
                            <i class="fab fa-delicious"></i>
                        </p>
                    </a>
                </div>

                <div class="item-menu">
                    <a href="sales.php">
                        <p class="icon-item-menu">
                            <i class="fas fa-ticket-alt"></i>
                        </p>
                    </a>
                </div>

                <div class="item-menu incactive">
                    <a href="wisata.php">
                        <p class="icon-item-menu">
                            <i class="fas fa-globe"></i>
                        </p>
                    </a>
                </div>

                <div class="item-menu incactive">
                    <a href="customer.php">
                        <p class="icon-item-menu">
                            <i class="fas fa-users"></i>
                        </p>
                    </a>
                </div>

                <div class="item-menu incactive">
                    <a href="setting.php">
                        <p class="icon-item-menu">
                            <i class="fas fa-cog"></i>
                        </p>
                    </a>
                </div>

                <div class="item-menu incactive">
                    <a href="#">
                        <p class="icon-item-menu">
                            <i class="fas fa-power-off"></i>
                        </p>
                    </a>
                </div>

            </div>
        </div>
        <div class="admin-profile" id="sl_ap" onmouseover="showAdminProfile()" onmouseout="hideAdminProfile()">
            <div class="admin-picture">
                <img src="images/admin_picture.png" alt="">
            </div>
            <p class="admin-name">
            <?php echo $checkdata['nama_admin']; ?>
            </p>
            <p class="admin-level">
                Super Admin
            </p>
            <ul class="admin-menus">
                <a href="dashboard.php">
                    <li>
                        My Dashboard
                    </li>
                </a>
                <a href="sales.php">
                    <li class="active-link">
                        Ticket Sales
                    </li>
                </a>
                <a href="wisata.php">
                    <li>
                        Manage Wisata
                    </li>
                </a>
                <a href="customer.php">
                    <li>
                        Customers <span class="badge-tiketsaya badge badge-pill badge-primary">96</span>
                    </li>
                </a>
                <a href="setting.php">
                    <li>
                        Account Setting
                    </li>
                </a>
                <a href="#">
                    <li style="padding-top: 122px;">
                        Log Out
                    </li>
                </a>
            </ul>
        </div>
    </div>
    <div class="main-content">
        <div class="header row">
            <div class="col-md-12">
                <p class="header-title">
                    Details
                </p>
                <nav aria-label="sitemap-ts breadcrumb">
                    <ol class="breadcrumb" style="margin-left: -15px; background: none;">
                        <li class="breadcrumb-item"><a style="color: #c7c7c7;" href="sales.php">Sales</a></li>
                        <li style="color: #21272c;" class="breadcrumb-item active" aria-current="page"><?php echo $checkdata_user_details['nama_lengkap'] ?>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="row report-group">

            <div class="col-md-12">
                <div class="item-big-report col-md-12">
                    <div class="row">
                        <div class="col-4">
                            <div class="wrap-user-picture-circle">
                                <img class="primary-user-picture-circle" src="images/user_1.png" alt="">
                            </div>
                            <div style="margin-top: 16px;" class="user-info">
                                <p class="title">
                                <?php echo $checkdata_user_details['nama_lengkap'] ?>
                                </p>
                               <p class="sub-title">
                                <?php echo $checkdata_user_details['bio'] ?>
                                </p>
                            </div>
                        </div>
                        <div class="col-4">
                            <p class="total-balance">
                                Total Balance <span class="value-balance"> US$ <?php echo $checkdata_user_details['user_balance'] ?></span>
                            </p>
                        </div>
                    </div>
                    <div class="row user-wisata-places">
                        <div class="col-md-12">
                            <p class="title">
                            <?php echo $checkdata_user_details['nama_lengkap'] ?>'s Wisata
                            </p>
                        </div>

                        <?php 
                        
                        foreach($checkdata_wisata as $checkdata_wisata_final => $checkdata_wisata_value) {

                         // data lengkap wisata
                            $path_wisata_details = 'Wisata/'.$checkdata_wisata_value['nama_wisata'];
                            $checkdata_wisata_details = $database->getReference($path_wisata_details)->getValue();

                            // foreach($checkdata_wisata_details as $checkdata_wisata_details_final => $checkdata_wisata_details_value)
                            // {}
                        
                         ?>

                        <div class="item-wisata-places col-md-4">
                            <img src="images/img_wisata.png" alt="">
                            <p class="title-info-wisata-place">
                                <?php echo $checkdata_wisata_value['nama_wisata']  ?>
                            </p>
                            <p class="subtitle-info-wisata-place">
                            <?php echo $checkdata_wisata_value['lokasi']  ?>
                            </p>
                        </div>
                        <?php }  ?>                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/main.js"></script>

</body>

</html>