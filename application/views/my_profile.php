<?php $this->load->view('nav_header'); ?>



<section class="question-area pt-10px pb-10px">
    <div class="container">
        <br>

        <div class="row">
            <div class="col-lg-2">
            </div>

            <div class="col-lg-8">
                <section class="about-area pb-20px">

                    <form action="<?php echo base_url('update_myprofile'); ?>" method="post" class="card card-item">
                        <div class="card-body row p-0">
                            <div class="col-lg-8 mx-auto">
                                <div class="form-action-wrapper py-5">
                                    <div class="form-group">
                                        <h3 class="fs-22 pb-2 fw-bold">MY PROFILE &nbsp; : &nbsp; <?php echo $username; ?></h3>
                                        <div class="divider"><span></span></div>
                                    </div>
                                    <div class="form-group">
                                        <label class="fs-14 text-black fw-medium lh-18 mb-2">Full Name</label>
                                        <input type="text" value="<?php echo $profile_details->fullname; ?>" name="fullname" id="fullname" class="form-control form--control">
                                    </div>
                                    <div class="form-group">
                                        <label class="fs-14 text-black fw-medium lh-18 mb-2">Email</label>
                                        <input type="email" value="<?php echo $profile_details->useremail; ?>" name="useremail" id="useremail" class="form-control form--control">
                                    </div>
                                    <div class="form-group">
                                        <label class="fs-14 text-black fw-medium lh-18 mb-2">Username</label>
                                        <input type="text" value="<?php echo $profile_details->username; ?>" readonly disabled class="form-control form--control">
                                    </div>
                                    <div class="form-group">
                                        <label class="fs-14 text-black fw-medium lh-18 mb-2">Created Date</label>
                                        <input type="text" value="<?php echo $profile_details->created_date; ?>" readonly disabled class="form-control form--control">
                                    </div>
                                    <div class="form-group">
                                        <label class="fs-14 text-black fw-medium lh-18 mb-2">New Password</label>
                                        <div class="input-group mb-1">
                                            <input class="form-control form--control password-field" type="password" name="password" id="password" placeholder="Password" required>
                                            <button class="input-group-text toggle-password" type="button" id="passwordIcon">
                                                <svg class="eye-on" xmlns="http://www.w3.org/2000/svg" height="22px" viewBox="0 0 24 24" width="22px" fill="currentColor">
                                                    <path d="M0 0h24v24H0V0z" fill="none" />
                                                    <path d="M12 6c3.79 0 7.17 2.13 8.82 5.5C19.17 14.87 15.79 17 12 17s-7.17-2.13-8.82-5.5C4.83 8.13 8.21 6 12 6m0-2C7 4 2.73 7.11 1 11.5 2.73 15.89 7 19 12 19s9.27-3.11 11-7.5C21.27 7.11 17 4 12 4zm0 5c1.38 0 2.5 1.12 2.5 2.5S13.38 14 12 14s-2.5-1.12-2.5-2.5S10.62 9 12 9m0-2c-2.48 0-4.5 2.02-4.5 4.5S9.52 16 12 16s4.5-2.02 4.5-4.5S14.48 7 12 7z" />
                                                </svg>
                                                <svg class="eye-off" xmlns="http://www.w3.org/2000/svg" height="22px" viewBox="0 0 24 24" width="22px" fill="currentColor">
                                                    <path d="M0 0h24v24H0V0zm0 0h24v24H0V0zm0 0h24v24H0V0zm0 0h24v24H0V0z" fill="none" />
                                                    <path d="M12 6c3.79 0 7.17 2.13 8.82 5.5-.59 1.22-1.42 2.27-2.41 3.12l1.41 1.41c1.39-1.23 2.49-2.77 3.18-4.53C21.27 7.11 17 4 12 4c-1.27 0-2.49.2-3.64.57l1.65 1.65C10.66 6.09 11.32 6 12 6zm-1.07 1.14L13 9.21c.57.25 1.03.71 1.28 1.28l2.07 2.07c.08-.34.14-.7.14-1.07C16.5 9.01 14.48 7 12 7c-.37 0-.72.05-1.07.14zM2.01 3.87l2.68 2.68C3.06 7.83 1.77 9.53 1 11.5 2.73 15.89 7 19 12 19c1.52 0 2.98-.29 4.32-.82l3.42 3.42 1.41-1.41L3.42 2.45 2.01 3.87zm7.5 7.5l2.61 2.61c-.04.01-.08.02-.12.02-1.38 0-2.5-1.12-2.5-2.5 0-.05.01-.08.01-.13zm-3.4-3.4l1.75 1.75c-.23.55-.36 1.15-.36 1.78 0 2.48 2.02 4.5 4.5 4.5.63 0 1.23-.13 1.77-.36l.98.98c-.88.24-1.8.38-2.75.38-3.79 0-7.17-2.13-8.82-5.5.7-1.43 1.72-2.61 2.93-3.53z" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="fs-14 text-black fw-medium lh-18 mb-2">Confirm New Password</label>
                                        <div class="input-group mb-1">
                                            <input class="form-control form--control password-field" type="password" name="confirm_password" id="confirm_password" placeholder="Password" required>
                                            <button class="input-group-text toggle-password" type="button" id="confirm_passwordIcon">
                                                <svg class="eye-on" xmlns="http://www.w3.org/2000/svg" height="22px" viewBox="0 0 24 24" width="22px" fill="currentColor">
                                                    <path d="M0 0h24v24H0V0z" fill="none" />
                                                    <path d="M12 6c3.79 0 7.17 2.13 8.82 5.5C19.17 14.87 15.79 17 12 17s-7.17-2.13-8.82-5.5C4.83 8.13 8.21 6 12 6m0-2C7 4 2.73 7.11 1 11.5 2.73 15.89 7 19 12 19s9.27-3.11 11-7.5C21.27 7.11 17 4 12 4zm0 5c1.38 0 2.5 1.12 2.5 2.5S13.38 14 12 14s-2.5-1.12-2.5-2.5S10.62 9 12 9m0-2c-2.48 0-4.5 2.02-4.5 4.5S9.52 16 12 16s4.5-2.02 4.5-4.5S14.48 7 12 7z" />
                                                </svg>
                                                <svg class="eye-off" xmlns="http://www.w3.org/2000/svg" height="22px" viewBox="0 0 24 24" width="22px" fill="currentColor">
                                                    <path d="M0 0h24v24H0V0zm0 0h24v24H0V0zm0 0h24v24H0V0zm0 0h24v24H0V0z" fill="none" />
                                                    <path d="M12 6c3.79 0 7.17 2.13 8.82 5.5-.59 1.22-1.42 2.27-2.41 3.12l1.41 1.41c1.39-1.23 2.49-2.77 3.18-4.53C21.27 7.11 17 4 12 4c-1.27 0-2.49.2-3.64.57l1.65 1.65C10.66 6.09 11.32 6 12 6zm-1.07 1.14L13 9.21c.57.25 1.03.71 1.28 1.28l2.07 2.07c.08-.34.14-.7.14-1.07C16.5 9.01 14.48 7 12 7c-.37 0-.72.05-1.07.14zM2.01 3.87l2.68 2.68C3.06 7.83 1.77 9.53 1 11.5 2.73 15.89 7 19 12 19c1.52 0 2.98-.29 4.32-.82l3.42 3.42 1.41-1.41L3.42 2.45 2.01 3.87zm7.5 7.5l2.61 2.61c-.04.01-.08.02-.12.02-1.38 0-2.5-1.12-2.5-2.5 0-.05.01-.08.01-.13zm-3.4-3.4l1.75 1.75c-.23.55-.36 1.15-.36 1.78 0 2.48 2.02 4.5 4.5 4.5.63 0 1.23-.13 1.77-.36l.98.98c-.88.24-1.8.38-2.75.38-3.79 0-7.17-2.13-8.82-5.5.7-1.43 1.72-2.61 2.93-3.53z" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" value="<?php echo $profile_details->user_id; ?>" name="user_id" id="user_id" hidden>
                                    </div>
                                    <div class="form-group">
                                        <label class="fs-14 text-black fw-medium lh-18 mb-2">
                                            <div id="confirm_password_error" class="text-danger"></div>
                                        </label>
                                    </div>

                                    <div class="form-group">
                                        <button id="send-message-btn" class="btn theme-btn w-100" type="submit">Update <i class="la la-arrow-right icon ms-1"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>



                </section>
            </div>

            <div class="col-lg-2">
            </div>
        </div>

    </div>
</section>


<?php $this->load->view('nav_sub_footer'); ?>
<?php $this->load->view('nav_footer'); ?>
</body>
</html>





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