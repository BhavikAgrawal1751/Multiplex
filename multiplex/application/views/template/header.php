<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from pixner.net/boleto/demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 18 Dec 2021 14:06:54 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/all.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/animate.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/flaticon.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/odometer.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/nice-select.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/jquery.animatedheadline.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/main.css">

    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/images/favicon.png" type="image/x-icon">

    <title>Boleto  - Online Ticket Booking Website HTML Template</title>


</head>

<body>
    <!-- ==========Preloader========== -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ==========Preloader========== -->
    <!-- ==========Overlay========== -->
    <div class="overlay"></div>
    <a href="#0" class="scrollToTop">
        <i class="fas fa-angle-up"></i>
    </a>
    <!-- ==========Overlay========== -->

    <!-- ==========Header-Section========== -->
    <header class="header-section">
        <div class="container">
            <div class="header-wrapper">
                <div class="logo">
                    <a href="<?php echo site_url(); ?>/HomeController/">
                        <img src="<?php echo base_url() ?>assets/images/logo/logo.png" alt="logo">
                    </a>
                </div>
                <ul class="menu">
                    <li>
                        <a href="<?php echo site_url(); ?>/HomeController/" class="active">Home</a>
                    </li>
                    <li>
                        <a href="#0">movies</a>
                    <?php
                        $this->db->group_by('category_name');
                        $cat=$this->db->get('moviecategory')->result();
                    ?>
                        <ul class="submenu">
                        <?php foreach($cat as $row) { ?>
                            <li>
                                <a href="<?php echo site_url(); ?>/ActionController/getMovie/<?php echo $row->category_id ?>"><?php echo $row->category_name ?></a>
                            </li>
                         <?php } ?>
                        </ul>
                    </li>

                    <!-- //events fetch -->
                    <li>
                        <a href="#0">events</a>
                    <?php
                        $this->db->group_by('eventcategory_title');
                        $evcat=$this->db->get('eventcategory')->result();
                    ?>
                        <ul class="submenu">
                        <?php foreach($evcat as $row) { ?>
                            <li>
                                <a href="<?php echo site_url(); ?>/EventHeaderController/getEvent/<?php echo $row->eventcategory_id; ?>"><?php echo $row->eventcategory_title ?></a>
                            </li>
                        <?php } ?>
                        </ul>
                    </li>

                    <!-- //sports fetch -->
                    <li>
                        <a href="#0">sports</a>
                    <?php
                        $this->db->group_by('sports_category');
                        $sportscat=$this->db->get('sports')->result();
                    ?>
                        <ul class="submenu">
                        <?php foreach($sportscat as $row) { ?>
                            <li>
                                <a href="<?php echo site_url(); ?>/SportsHeaderController/getSports/<?php echo $row->sports_id ?>"><?php echo $row->sports_category ?></a>
                            </li>
                        <?php } ?>
                        </ul>
                    </li>

                    <!-- industry fetch -->
                    <li>
                        <a href="#0">Industry</a>
                    <?php
                        $this->db->group_by('industry_name');
                        $indname=$this->db->get('movieindustry')->result();
                    ?>
                        <ul class="submenu">
                        <?php foreach($indname as $row) { ?>
                            <li>
                                <a href="<?php echo site_url(); ?>/IndustryHeaderController/getIndustry/<?php echo $row->industry_id ?>"><?php echo $row->industry_name; ?></a>
                            </li>
                        <?php } ?>
                        </ul>
                    </li>

                    <!-- food fetch -->
                    <li>
                        <a href="#0">Foods</a>
                    <?php
                        $this->db->group_by('foodbeverage_name');
                        $foodname=$this->db->get('foodbeveragebooking')->result();
                    ?>
                        <ul class="submenu">
                        <?php foreach($foodname as $row) { ?>
                            <li>
                                <a href="<?php echo site_url(); ?>/FoodHeaderController/getFood/<?php echo $row->foodbeverage_id ?>"><?php echo $row->foodbeverage_name ?></a>
                            </li>
                        <?php } ?>
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo site_url(); ?>/ContactController/">contact</a>
                    </li>
                    <li class="header-button pr-0">
                        <a href="sign-up.html">Sign up</a>
                    </li>
                </ul>
                <div class="header-bar d-lg-none">
					<span></span>
					<span></span>
					<span></span>
				</div>
            </div>
        </div>
    </header>
    <!-- ==========Header-Section========== -->
