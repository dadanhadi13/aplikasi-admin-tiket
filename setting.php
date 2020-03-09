<?php
	include 'includes/user_token.php';
?>

<!DOCTYPE html>
<html>

<head>
    <title>Akun Settings - Admin MarkPro</title>
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
                    <a href="dashboard.html">
                        <p class="icon-item-menu">
                            <i class="fab fa-delicious"></i>
                        </p>
                    </a>
                </div>

                <div class="item-menu incactive">
                    <a href="sales.html">
                        <p class="icon-item-menu">
                            <i class="fas fa-ticket-alt"></i>
                        </p>
                    </a>
                </div>

                <div class="item-menu incactive">
                    <a href="wisata.html">
                        <p class="icon-item-menu">
                            <i class="fas fa-globe"></i>
                        </p>
                    </a>
                </div>

                <div class="item-menu incactive">
                    <a href="customer.html">
                        <p class="icon-item-menu">
                            <i class="fas fa-users"></i>
                        </p>
                    </a>
                </div>

                <div class="item-menu">
                    <a href="setting.html">
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
                Dadan Hadi
            </p>
            <p class="admin-level">
                Super Admin
            </p>
            <ul class="admin-menus">
                <a href="dashboard.html">
                    <li>
                        My Dashboard
                    </li>
                </a>
                <a href="sales.html">
                    <li>
                        Ticket Sales
                    </li>
                </a>
                <a href="wisata.html">
                    <li>
                        Manage Wisata
                    </li>
                </a>
                <a href="customer.html">
                    <li>
                        Customers <span class="badge-tiketsaya badge badge-pill badge-primary">96</span>
                    </li>
                </a>
                <a href="setting.html">
                    <li class="active-link">
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
					Settings
				</p>
				<p class="sub-header-title">
					Ensure your account is healthy to be use
				</p>
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
                                        <img class="primary-user-picture-circle" src="images/user_2.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-new-user row">
                                <div class="col-md-8">
                                    <form>
                                        <div class="form-group content-sign-in">
                                            <label class="title-input-type-primary-tiketsaya"
                                                for="exampleInputEmail1">Nama Admin</label>
                                            <input value="Dadan Hadi" type="text" class="form-control input-type-primary-tiketsaya"
                                                id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama User">
                                        </div>
                                        <div class="form-group content-sign-in">
                                            <label class="title-input-type-primary-tiketsaya" for="exampleInputEmail1">Username</label>
                                            <input value="dadanhadii" type="text" class="form-control input-type-primary-tiketsaya"
                                                id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username">
                                        </div>
                                        <div class="form-group">
                                            <label class="title-input-type-primary-tiketsaya for=exampleInputPassword1">Alamat
                                                Email</label>
                                            <input value="dadanhadii@gmail.com" type="text" class="form-control input-type-primary-tiketsaya"
                                                id="exampleInputPassword1" placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <label class="title-input-type-primary-tiketsaya for=exampleInputPassword1">Kata
                                                Sandi</label>
                                            <input value="12345" type="password" class="form-control input-type-primary-tiketsaya"
                                                id="exampleInputPassword1" placeholder="Password">
                                        </div>
                                        <div style="visibility: hidden; margin-bottom: -40px;"
                                            class="form-group content-sign-in">
                                            <input type="file" id="image_file">
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-primary-tiketsaya">Save Now</button>
                                        <a href="dashboard.html" style="margin-left: 10px"
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