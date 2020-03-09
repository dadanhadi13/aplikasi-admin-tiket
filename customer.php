<?php

	include 'includes/user_token.php';
	include 'includes/myfirebase.php';

	//data admin
	$reference = 'Admin/'.$_SESSION['username'];
	$checkdata = $database->getReference($reference)->getValue();

	//data sales
	$path_sales = 'MyTickets';
	$checkdata_sales = $database->getReference($path_sales)->getValue();

?>
<!DOCTYPE html>
<html>

<head>
	<title>Costumers - Admin MarkPro</title>
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
					<a href="costumer.php">
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
					<li i class="active-link">
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
					All Customer
				</p>
				<p class="sub-header-title">
					They are your lovely users who love travelling
				</p>
			</div>
		</div>
		<div class="row report-group">


			<div class="col-md-4">
				<div class="item-customer item-unique-customer col-md-12">
					<div class="row">
						<div class="content col-md-12">
							<p class="description">
								Wanna try to create a costumer manually?
							</p>
							<a href="add_new_user.php" class="btn btn-active btn-view btn-primary btn-primary-tiketsaya">Add New</a>
						</div>
					</div>
				</div>
			</div>
			
						<?php
							foreach($checkdata_sales as $data_sales_final => $data_print_sales) {

								$path_data_based_on_username = 'Users/'.$data_print_sales['username'];
								$print_data_user_profile = $database->getReference($path_data_based_on_username)->getValue();

								foreach($print_data_user_profile as $print_data_user_profile_final => $value_data_user_profile)
								{}					
						?>

			<div class="col-md-4">
				<div class="item-customer col-md-12">
					<div class="row">
						<div class="content col-md-12">
							<div class="wrap-picture">
								<img class="primary-user-picture-circle" src="images/user_2.png" alt="">
							</div>
							<p class="title">
								<?php echo $print_data_user_profile['nama_lengkap']; ?>
							</p>
							<p class="sub-title">
								<?php echo $print_data_user_profile['bio']; ?>
							</p>
							<a href="user_details.php?username=<?php echo $print_data_user_profile['username'] ?>" class="btn btn-view btn-primary btn-primary-tiketsaya">View Profile</a>
						</div>
					</div>
				</div>
			</div>
						<?php } ?>
		</div>
	</div>

	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/main.js"></script>

</body>

</html>