<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>iitUOW Community</title>

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&amp;display=swap" rel="stylesheet">

    <!-- Favicon -->
    <!-- <link rel="icon" sizes="16x16" href="<?php echo base_url() ?>assets/images/favicon.png"> -->
    <link rel="icon" sizes="16x16" href="http://localhost/IIT_UOW/assets/images/favicon.png">

    <!-- inject:css -->
    <link rel="stylesheet" href="http://localhost/IIT_UOW/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost/IIT_UOW/assets/css/line-awesome.css">
    <link rel="stylesheet" href="http://localhost/IIT_UOW/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="http://localhost/IIT_UOW/assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="http://localhost/IIT_UOW/assets/css/selectize.css">
    <link rel="stylesheet" href="http://localhost/IIT_UOW/assets/css/style.css">

    <style>
        #search {
            border-color: #2479d8;
        }

        .custom-button {
            background-color: #a660f0;
            color: #fff;
            border-color: #a660f0;
            height: 30px;
            font-size: 12px;
        }

        .custom-button:hover {
            background-color: #a660f0;
            border-color: #a660f0;
            height: 30px;
            font-size: 12px;
        }

        .custom-input {
            height: 30px;
        }

        .alert {
            padding: 10px;
            color: white;
            opacity: 1;
            transition: opacity 0.6s;
            margin-bottom: 15px;
        }

        .alert.success {
            background-color: #74a2d6;
        }

        .closebtn {
            margin-left: 15px;
            color: white;
            font-weight: bold;
            float: right;
            font-size: 22px;
            line-height: 20px;
            cursor: pointer;
            transition: 0.3s;
        }

        .closebtn:hover {
            color: black;
        }

        .created-date {
            float: right;
            font-size: 12px;
        }


        .created-date_ans {
            float: center;
            font-size: 12px;
        }


        .custom-button-answer {
            background-color: #a660f0;
            color: #fff;
            border-color: #a660f0;
            height: 40px;
            font-size: 15px;
        }

        .custom-button-answer:hover {
            background-color: #a660f0;
            border-color: #a660f0;
            height: 40px;
            font-size: 15px;
        }

    </style>
</head>

<body>

    <div id="preloader">
        <div class="loader">
            <svg class="spinner" viewBox="0 0 50 50">
                <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="5"></circle>
            </svg>
        </div>
    </div>


    <header class="header-area bg-white">
        <br>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="logo-box">
                        <p style="font-size: 30px;"> &nbsp;&nbsp; DEVELOPER SUPPORT </p>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="menu-wrapper border-left border-left-gray ps-4 justify-content-end">
                        <nav class="menu-bar me-auto">
                        </nav>
                        <div class="nav-right-button">
                            <a href="<?php echo base_url('home'); ?>" class="btn theme-btn">HOME</a>&nbsp;
                            <a href="<?php echo base_url('about_us'); ?>" class="btn theme-btn">ABOUT US</a>&nbsp;
                            <a data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="<?php echo base_url('login'); ?>" class="btn theme-btn theme-btn-outline me-2">
                                <i class="la la-user me-1"></i>MY PROFILE
                            </a>
                            <div class="dropdown-menu dropdown--menu dropdown-menu-right mt-3 keep-open" aria-labelledby="userMenuDropdown">
                                <h6 class="dropdown-header">Hi, <?php echo $username; ?></h6>
                                <div class="dropdown-divider border-top-gray mb-0"></div>
                                <div class="dropdown-item-list">
                                    <a href="<?php echo base_url('my_profile?id=' . $username); ?>" class="dropdown-item" href=""><i class="la la-user me-2"></i>Profile</a>
                                    <a href="<?php echo base_url('my_questions?id=' . $username); ?>" class="dropdown-item" href=""><i class="la la-question-circle me-2"></i>My Questions</a>
                                    <a href="<?php echo base_url('login'); ?>" class="dropdown-item" href=""><i class="la la-power-off me-2"></i>Log out</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
    </header>






    <script src="http://localhost/IIT_UOW/assets/js/jquery-3.7.1.min.js"></script>
    <script src="http://localhost/IIT_UOW/assets/js/bootstrap.bundle.min.js"></script>
    <script src="http://localhost/IIT_UOW/assets/js/owl.carousel.min.js"></script>
    <script src="http://localhost/IIT_UOW/assets/js/selectize.min.js"></script>
    <script src="http://localhost/IIT_UOW/assets/js/main.js"></script>