<?php
    include 'includes/user_token.php';
    include 'includes/myfirebase.php';

    //data admin
	$reference = 'Admin/'.$_SESSION['username'];
    $checkdata = $database->getReference($reference)->getValue();
    
    //data wisata
	$path_wisata = 'Wisata';
	$checkdata_wisata = $database->getReference($path_wisata)->getValue();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Wisata - MarkPro</title>
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

                <div class="item-menu incactive">
                    <a href="sales.php">
                        <p class="icon-item-menu">
                            <i class="fas fa-ticket-alt"></i>
                        </p>
                    </a>
                </div>

                <div class="item-menu">
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
                    <li>
                        Ticket Sales
                    </li>
                </a>
                <a href="wisata.php">
                    <li class="active-link">
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
                    Manage Wisata
                </p>
                <p class="sub-header-title">
                    The place where the produts were born
                </p>
            </div>
        </div>

        <div class="row report-group">

            <div class="col-md-12">
                <div class="item-big-report col-md-12">
                    <table class="table table-wisata table-tiketsaya table-borderless">
                        <thead>
                            <tr>
                                <th scope="col">Nama Wisata</th>
                                <th scope="col">Lokasi</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Harga Tiket</th>
                                <th scope="col">Menu</th>
                            </tr>
                        </thead>
                        <tbody>

                        <?php 
                        
                            foreach($checkdata_wisata as $checkdata_wisata_final => $checkdata_wisata_value) { 
                                
                        
                            
                            
                        ?>
                            <tr>
                                <td><?php echo $checkdata_wisata_value['nama_wisata'] ?></td>
                                <td><?php echo $checkdata_wisata_value['lokasi'] ?></td>
                                <td><?php echo $checkdata_wisata_value['data_wisata'] ?></td>
                                <td><?php echo $checkdata_wisata_value['harga_tiket'] ?></td>
                                <td>
                                    <a href="manage_wisata.php?nama_wisata=<?php echo $checkdata_wisata_value['nama_wisata'] ?>" class="btn btn-small-table btn-primary">Details</a>
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/main.js"></script>

</body>

</html>