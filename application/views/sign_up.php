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
    <link rel="icon" sizes="16x16" href="assets/images/favicon.png">

    <!-- inject:css -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/line-awesome.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <style>
        #fullname, #username, #useremail, #password, #confirm_password, #passwordIcon, #confirm_passwordIcon{
            border-color: #2479d8; 
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


<section class="sign-up-area pt-20px pb-20px position-relative">
    <div class="container" style="width: 50%;">

        <form action="<?php echo base_url('register');?>" method="post" class="card card-item">
            <div class="card-body row p-0">
                <div class="col-lg-8 mx-auto" >
                    <div class="form-action-wrapper py-5">
                        <div class="form-group">
                            <h3 class="fs-22 pb-2 fw-bold">Join the Developer Support Community</h3>
                            <div class="divider"><span></span></div>
                            <p class="pt-3">Please fill out the form to Register.</p>
                        </div>
                        <div class="form-group">
                            <label class="fs-14 text-black fw-medium lh-18 mb-2">Full Name</label>
                            <input type="text" name="fullname" id="fullname" class="form-control form--control" placeholder="Enter full name" required>
                        </div>
                        <div class="form-group">
                            <label class="fs-14 text-black fw-medium lh-18 mb-2">Username</label>
                            <input type="text" name="username" id="username" class="form-control form--control" placeholder="Enter username" required>
                        </div>
                        <div class="form-group">
                            <label class="fs-14 text-black fw-medium lh-18 mb-2">Email</label>
                            <input type="email" name="useremail" id="useremail" class="form-control form--control" placeholder="Enter email address" required>
                        </div>
                        <div class="form-group">
                            <label class="fs-14 text-black fw-medium lh-18 mb-2">Password</label>
                            <div class="input-group mb-1">
                                <input class="form-control form--control password-field" type="password" name="password" id="password" placeholder="Password" required>
                                <button class="input-group-text toggle-password" type="button" id="passwordIcon">
                                    <svg class="eye-on" xmlns="http://www.w3.org/2000/svg" height="22px" viewBox="0 0 24 24" width="22px" fill="currentColor"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 6c3.79 0 7.17 2.13 8.82 5.5C19.17 14.87 15.79 17 12 17s-7.17-2.13-8.82-5.5C4.83 8.13 8.21 6 12 6m0-2C7 4 2.73 7.11 1 11.5 2.73 15.89 7 19 12 19s9.27-3.11 11-7.5C21.27 7.11 17 4 12 4zm0 5c1.38 0 2.5 1.12 2.5 2.5S13.38 14 12 14s-2.5-1.12-2.5-2.5S10.62 9 12 9m0-2c-2.48 0-4.5 2.02-4.5 4.5S9.52 16 12 16s4.5-2.02 4.5-4.5S14.48 7 12 7z"/></svg>
                                    <svg class="eye-off" xmlns="http://www.w3.org/2000/svg" height="22px" viewBox="0 0 24 24" width="22px" fill="currentColor"><path d="M0 0h24v24H0V0zm0 0h24v24H0V0zm0 0h24v24H0V0zm0 0h24v24H0V0z" fill="none"/><path d="M12 6c3.79 0 7.17 2.13 8.82 5.5-.59 1.22-1.42 2.27-2.41 3.12l1.41 1.41c1.39-1.23 2.49-2.77 3.18-4.53C21.27 7.11 17 4 12 4c-1.27 0-2.49.2-3.64.57l1.65 1.65C10.66 6.09 11.32 6 12 6zm-1.07 1.14L13 9.21c.57.25 1.03.71 1.28 1.28l2.07 2.07c.08-.34.14-.7.14-1.07C16.5 9.01 14.48 7 12 7c-.37 0-.72.05-1.07.14zM2.01 3.87l2.68 2.68C3.06 7.83 1.77 9.53 1 11.5 2.73 15.89 7 19 12 19c1.52 0 2.98-.29 4.32-.82l3.42 3.42 1.41-1.41L3.42 2.45 2.01 3.87zm7.5 7.5l2.61 2.61c-.04.01-.08.02-.12.02-1.38 0-2.5-1.12-2.5-2.5 0-.05.01-.08.01-.13zm-3.4-3.4l1.75 1.75c-.23.55-.36 1.15-.36 1.78 0 2.48 2.02 4.5 4.5 4.5.63 0 1.23-.13 1.77-.36l.98.98c-.88.24-1.8.38-2.75.38-3.79 0-7.17-2.13-8.82-5.5.7-1.43 1.72-2.61 2.93-3.53z"/></svg>
                                </button>
                              </div>
                        </div>
                        <div class="form-group">
                            <label class="fs-14 text-black fw-medium lh-18 mb-2">Confirm Password</label>
                            <div class="input-group mb-1">
                                <input class="form-control form--control password-field" type="password" name="confirm_password" id="confirm_password" placeholder="Password" required>
                                <button class="input-group-text toggle-password" type="button" id="confirm_passwordIcon">
                                    <svg class="eye-on" xmlns="http://www.w3.org/2000/svg" height="22px" viewBox="0 0 24 24" width="22px" fill="currentColor"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 6c3.79 0 7.17 2.13 8.82 5.5C19.17 14.87 15.79 17 12 17s-7.17-2.13-8.82-5.5C4.83 8.13 8.21 6 12 6m0-2C7 4 2.73 7.11 1 11.5 2.73 15.89 7 19 12 19s9.27-3.11 11-7.5C21.27 7.11 17 4 12 4zm0 5c1.38 0 2.5 1.12 2.5 2.5S13.38 14 12 14s-2.5-1.12-2.5-2.5S10.62 9 12 9m0-2c-2.48 0-4.5 2.02-4.5 4.5S9.52 16 12 16s4.5-2.02 4.5-4.5S14.48 7 12 7z"/></svg>
                                    <svg class="eye-off" xmlns="http://www.w3.org/2000/svg" height="22px" viewBox="0 0 24 24" width="22px" fill="currentColor"><path d="M0 0h24v24H0V0zm0 0h24v24H0V0zm0 0h24v24H0V0zm0 0h24v24H0V0z" fill="none"/><path d="M12 6c3.79 0 7.17 2.13 8.82 5.5-.59 1.22-1.42 2.27-2.41 3.12l1.41 1.41c1.39-1.23 2.49-2.77 3.18-4.53C21.27 7.11 17 4 12 4c-1.27 0-2.49.2-3.64.57l1.65 1.65C10.66 6.09 11.32 6 12 6zm-1.07 1.14L13 9.21c.57.25 1.03.71 1.28 1.28l2.07 2.07c.08-.34.14-.7.14-1.07C16.5 9.01 14.48 7 12 7c-.37 0-.72.05-1.07.14zM2.01 3.87l2.68 2.68C3.06 7.83 1.77 9.53 1 11.5 2.73 15.89 7 19 12 19c1.52 0 2.98-.29 4.32-.82l3.42 3.42 1.41-1.41L3.42 2.45 2.01 3.87zm7.5 7.5l2.61 2.61c-.04.01-.08.02-.12.02-1.38 0-2.5-1.12-2.5-2.5 0-.05.01-.08.01-.13zm-3.4-3.4l1.75 1.75c-.23.55-.36 1.15-.36 1.78 0 2.48 2.02 4.5 4.5 4.5.63 0 1.23-.13 1.77-.36l.98.98c-.88.24-1.8.38-2.75.38-3.79 0-7.17-2.13-8.82-5.5.7-1.43 1.72-2.61 2.93-3.53z"/></svg>
                                </button>
                              </div>
                        </div>
                        <div class="form-group">
                            <label class="fs-14 text-black fw-medium lh-18 mb-2">
                                <div id="confirm_password_error" class="text-danger"></div>
                            </label>
                            <label class="fs-14 text-black fw-medium lh-18 mb-2">
                                <div id="password_error" class="text-success"></div>
                            </label>
                        </div>
                        

                        <div class="form-group">
                            <button id="send-message-btn" class="btn theme-btn w-100" type="submit" disabled>Register <i class="la la-arrow-right icon ms-1"></i></button>
                        </div>
                        <p class="text-black text-center fs-15">Yes, I have an account? <a href="<?php echo base_url('login');?>" class="text-color hover-underline">Log in</a></p>
                    </div>
                </div>
            </div>
        </form>

    </div>
    <div class="position-absolute top-0 left-0 w-100 h-100 z-index-n1">
        <svg class="w-100 h-100" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M1200 120L0 16.48 0 0 1200 0 1200 120z" fill="#2d60eb" opacity="0.06"></path>
        </svg>
    </div>
</section>







<script src="assets/js/jquery-3.7.1.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/main.js"></script>
</body>





<script>
    $(document).ready(function() {
        $('#confirm_password').on('keyup', function () {
            if ($('#password').val() != $('#confirm_password').val()) {
                $('#confirm_password_error').html('Sorry, Confirm password does not match!');
            } else {
                $('#confirm_password_error').html('');
            }
        });
    });


    $(document).ready(function() {
        $('#password').on('keyup', function () {
            var password = $(this).val();
            var passwordRegex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/;
            
            if (!passwordRegex.test(password)) {
                $('#password_error').html('The password should be at least 8 characters long and contain at least one uppercase letter, one lowercase letter, and one number.');
            } else {
                $('#password_error').html('');
            }
        });
    });


    $(document).ready(function() {
        function validatePassword(password) {
            var minLength = 8;
            var uppercaseRegex = /[A-Z]/;
            var lowercaseRegex = /[a-z]/;
            var digitRegex = /\d/;
    
            return password.length >= minLength && uppercaseRegex.test(password) && lowercaseRegex.test(password) && digitRegex.test(password);
        }

        function updateSubmitButton() {
            var password = $('#password').val();
            var confirmPassword = $('#confirm_password').val();

            if (password === confirmPassword && validatePassword(password)) {
                $('#send-message-btn').prop('disabled', false);
            } else {
                $('#send-message-btn').prop('disabled', true);
            }
        }

        $('#confirm_password').on('keyup', updateSubmitButton);
        $('#password').on('keyup', updateSubmitButton);
    });
</script>



</html>