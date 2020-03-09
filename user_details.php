<?php
    include 'includes/user_token.php';
    include 'includes/myfirebase.php';

    //data admin
	$reference = 'Admin/'.$_SESSION['username'];
    $checkdata = $database->getReference($reference)->getValue();
    

    // dapatkan nama wisata dari url
    $username_url = $_GET['username'];

    // data detail wisata
    $path_user_details = 'Users/'.$username_url;
    $checkdata_user_details = $database->getReference($path_user_details)->getValue();

    

?>

<!DOCTYPE html>
<html>

<head>
    <title>Profile Details - Admin MarkPro</title>
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

                <div class="item-menu incactive">
                    <a href="wisata.php">
                        <p class="icon-item-menu">
                            <i class="fas fa-globe"></i>
                        </p>
                    </a>
                </div>

                <div class="item-menu">
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
                    <li>
                        Manage Wisata
                    </li>
                </a>
                <a href="customer.php">
                    <li class="active-link">
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
    <div class="main-content main-content-user-details">
        <div class="header row">
            <div class="col-md-12">
                <p class="header-title">
                <?php echo $checkdata_user_details['nama_lengkap']; ?>
                </p>
                <nav aria-label="sitemap-ts breadcrumb">
                    <ol class="breadcrumb" style="margin-left: -15px; background: none;">
                        <li class="breadcrumb-item"><a style="color: #c7c7c7;" href="customer.php">Customers</a></li>
                        <li style="color: #21272c;" class="breadcrumb-item active" aria-current="page">Profile Details
                        </li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="row">
            <div class="col-md-7">
                <div class="row report-group">

                    <div class="col-md-12">
                        <div class="item-big-report col-md-12">
                            <div class="row">
                                <div class="col-4">
                                    <div class="wrap-user-picture-circle">
                                        <img class="primary-user-picture-circle" src="images/user_1.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-new-user row">
                                <div class="col-md-8">
                                <form method="POST" action="includes/data_model.php">
                                        <div class="form-group content-sign-in">
                                            <label class="title-input-type-primary-tiketsaya"
                                                for="exampleInputEmail1">Username</label>
                                            <input name="username" disabled value="<?php echo $checkdata_user_details['username'];?>" type="text" class="form-control input-type-primary-tiketsaya"
                                                id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama User">
                                        </div>
                                        <div class="form-group content-sign-in">
                                            <label class="title-input-type-primary-tiketsaya" for="exampleInputEmail1">Nama
                                                Pengguna</label>
                                            <input name="nama_lengkap" value="<?php echo $checkdata_user_details['nama_lengkap'];?>" type="text" class="form-control input-type-primary-tiketsaya"
                                                id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Lengkap">
                                        </div>
                                        <div class="form-group">
                                            <label class="title-input-type-primary-tiketsaya for=exampleInputPassword1">Alamat
                                                Email</label>
                                            <input name="email_address" value="<?php echo $checkdata_user_details['email_address'];?>" type="text" class="form-control input-type-primary-tiketsaya"
                                                id="exampleInputPassword1" placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <label class="title-input-type-primary-tiketsaya for=exampleInputPassword1">Kata
                                                Sandi</label>
                                            <input name="password" value="<?php echo $checkdata_user_details['password'];?>" type="password" class="form-control input-type-primary-tiketsaya"
                                                id="exampleInputPassword1" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label
                                                        class="title-input-type-primary-tiketsaya for=exampleInputPassword1">BIO</label>
                                                    <input name="bio" value="<?php echo $checkdata_user_details['bio'];?>" type="text" class="form-control input-type-primary-tiketsaya"
                                                        id="exampleInputPassword1" placeholder="Masukkan BIO">
                                                </div>
                                                <div class="col-md-6">
                                                    <label
                                                        class="title-input-type-primary-tiketsaya for=exampleInputPassword1">Balance
                                                        ($US)</label>
                                                    <input name="user_balance" disabled value="<?php echo $checkdata_user_details['user_balance'];?>" type="number" class="form-control input-type-primary-tiketsaya"
                                                        id="exampleInputPassword1" placeholder="0">
                                                </div>
                                            </div>
                                        </div>
                                        <div style="visibility: hidden; margin-bottom: -40px;"
                                            class="form-group content-sign-in">
                                            <input type="file" id="image_file">
                                        </div>
                                        <input type="hidden" name="username" value="<?php echo $username_url; ?>" />
                                        <button name="updateProfile" type="submit" class="btn btn-primary btn-primary-tiketsaya">Save Now</button>
                                        <a href="customer.php" style="margin-left: 10px"
                                            class="btn btn-cancel-secondary">Cancel</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="item-danger-zone">
                    <p class="title">
                        Danger Zone
                    </p>
                    <p class="desc">
                        You are able to delete the user and once you delete it - it is gone
                    </p>
                    <a href="#" class="btn btn-delete btn-primary">
                        Delete User
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/main.js"></script>

</body>

</html>