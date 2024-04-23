<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
	</script>

    <link rel="stylesheet" href="<?php echo base_url() ?>assets/style.css">


    <title>Nusa Rent Car</title>

	<!--=== Bootstrap CSS ===-->
    <link href="<?php echo base_url() ?>assets/assets_shop/css/bootstrap.min.css" rel="stylesheet">
    <!--=== Vegas Min CSS ===-->
    <link href="<?php echo base_url() ?>assets/assets_shop/css/plugins/vegas.min.css" rel="stylesheet">
    <!--=== Magnific Popup CSS ===-->
    <link href="<?php echo base_url() ?>assets/assets_shop/css/plugins/magnific-popup.css" rel="stylesheet">
    <!--=== Owl Carousel CSS ===-->
    <link href="<?php echo base_url() ?>assets/assets_shop/css/plugins/owl.carousel.min.css" rel="stylesheet">
    <!--=== Gijgo CSS ===-->
    <link href="<?php echo base_url() ?>assets/assets_shop/css/plugins/gijgo.css" rel="stylesheet">
    <!--=== FontAwesome CSS ===-->
    <link href="<?php echo base_url() ?>assets/assets_shop/css/font-awesome.css" rel="stylesheet">
    <!--=== Theme Reset CSS ===-->
    <link href="<?php echo base_url() ?>assets/assets_shop/css/reset.css" rel="stylesheet">
    <!--=== Main Style CSS ===-->
    <link href="<?php echo base_url() ?>assets/assets_shop/css/style.css" rel="stylesheet">
    <!--=== Responsive CSS ===-->
    <link href="<?php echo base_url() ?>assets/assets_shop/css/responsive.css" rel="stylesheet">
</head>

<!-- <body> -->
<body class="loader-active">
	<nav class="navbar1">
        <div class="logo">
			<!-- <img src="<?php echo base_url() ?>assets/logo.png" alt="JSOFT" width="100px"> -->
            <h4>Nusa Rent Car</h4>
			
        </div>

        <ul class="menuu">
				<li>
					<b><a href="<?php echo base_url('customer/dashboard') ?>">Home</a></b>
				</li>

				<li>
					<b><a href="<?php echo base_url('customer/tentang') ?>">About</a></b>
				</li>

				<li>
					<b><a href="<?php echo base_url('customer/data_mobil') ?>">Car</a></b>
				</li>

				<?php if($this->session->userdata('nama')) { ?>

				<li>
					<b><a href="<?php echo base_url('customer/transaksi') ?>">Transaction</a></b>
				</li>

			<?php }else{ ?>

				<?php } ?>

				<?php if($this->session->userdata('nama')) { ?>

				<li>
					<b><a href="<?php echo base_url('auth/ganti_password') ?>">Change Password</a></b>
				</li>

				<li>
					<b><a style="color: #f63e4e;">Halo,
						<?php echo $this->session->userdata('nama') ?>!</a></b>
				</li>

				<li>
					<a href="<?php echo base_url('auth/logout') ?>"><i class="fas fa-right-from-bracket"></i></a>
				</li>
			<?php }else{ ?>
				<!-- <li>
					<b><a href="<?php echo base_url('register') ?>">Register</a></b>
				</li> -->
				<li>
					<b><a  href="<?php echo base_url('auth/login') ?>">Login</a></b>
				</li>
				<?php } ?>
			</ul>

        <!-- For Responsive -->
        <div class="menuu-btn">
            <i class="fa fa-bars"></i>
        </div>

    </nav>


