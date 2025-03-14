<?php

require_once APPROOT . "/views/inc/header.php";
require_once APPROOT . "/views/inc/navbar.php";


?>


<div class="container pt-3 pb-5">
    <div class="row justify-content-lg-end justify-content-center">
        <div class="col-11 col-md-7 col-lg-5 p-5 border border-1 rounded">

        <?php  getFlash('register_success')  ?>
            
            <form action="" method="POST" class="d-grid gap-4">

                <h3 class="text-primary text-center mb-4">LOG IN &mdash;</h3>

                <!-- EMAIL -->
                <div class="form-floating">
                    <input type="email" name="email" id="email" class="form-control" placeholder="contact@website.com" value="<?php echo !empty($data['email']) && $data['emailExist'] ? $data['email'] : "" ?>">
                    <label for="email">Email Address</label>
                    <span class="text-danger"><?php echo !empty($data['emailErr']) ? $data['emailErr'] : ''  ?></span>
                    
                </div>

                <!-- PASSWORD -->
                <div class="form-floating">
                    <input type="password" name="password" id="pass" class="form-control" placeholder="password">
                    <label for="pass">Password</label>
                    <span class="text-danger"><?php echo !empty($data['passErr']) ? $data['passErr'] : ''  ?></span>
                </div>

                <!-- REMEMBER PASSWORD -->
                <div class="form-check">
                    <input type="checkbox" name="remeber_password" id="remember_password" class="form-check-input">
                    <label for="remember_password" class="form-check-label">Remember me</label>
                </div>

                <!-- SUBMIT BUTTON -->

                <div class="d-grid mt-3">
                    <button type="submit" class="btn btn-primary"> Login </button>
                </div>

            </form>

            <p class="text-center text-muted mt-4">If your are not a member <a href="<?php echo URLROOT . 'user/register'   ?>">Register Here</a></p>
        </div>
    </div>
</div>


<?php

require_once APPROOT . "/views/inc/footer.php";