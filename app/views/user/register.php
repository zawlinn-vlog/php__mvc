<?php

require_once APPROOT . "/views/inc/header.php";
require_once APPROOT . "/views/inc/navbar.php";

$usertype = '';

if(isset($_SESSION['currentuser']))
{
    $usertype = $_SESSION['currentuser'] -> usertype;
}

?>

<div class="container pt-3 pb-5">
    <div class="row justify-content-lg-end justify-content-center">
        <div class="col-11 col-md-7 col-lg-5 p-5 border border-1 rounded">
            
            <form action="" method="POST" class="d-grid gap-4">

                <h3 class="text-primary text-center mb-4"> <?php echo isset($_SESSION['currentuser']) ? "Create Accounts" : "Register";  ?> &mdash;</h3>

                <!-- Fullname -->
                <div class="form-floating">
                    <input type="text" name="fname" id="fname" class="form-control" placeholder="Zaw Linn Tun" value="<?php echo !empty($data['fname']) && $data['fname'] ? $data['fname'] : "" ?>">
                    <label for="fname">Full Name</label>
                    <span class="text-danger"><?php echo !empty($data['fnameErr']) ? $data['fnameErr'] : ''  ?></span>
                    
                </div>

                <!-- EMAIL -->
                <div class="form-floating">
                    <input type="email" name="email" id="email" class="form-control" placeholder="contact@website.com" value="<?php echo !empty($data['email']) && !$data['emailExist'] ? $data['email'] : "" ?>">
                    <label for="email">Email Address</label>
                    <span class="text-danger"><?php echo !empty($data['emailErr']) ? $data['emailErr'] : ''  ?></span>
                    
                </div>

                <!-- PASSWORD -->
                <div class="form-floating">
                    <input type="password" name="password" id="pass" class="form-control" placeholder="password">
                    <label for="pass">Password</label>
                    <span class="text-danger"><?php echo !empty($data['passErr']) ? $data['passErr'] : ''  ?></span>
                </div>

                <!-- COMFIRMED PASSWORD -->
                <div class="form-floating">
                    <input type="password" name="cpassword" id="cpass" class="form-control" placeholder="password">
                    <label for="cpass">Comfirmed Password</label>
                    <span class="text-danger"><?php echo !empty($data['cpassErr']) ? $data['cpassErr'] : ''  ?></span>
                </div>


                <?php if($usertype == 0):  ?>

                <!-- CHOOSE USERTYPE -->

                <div class="form-group">
                    <!-- <label for="utype" class="form-label">Role of User </label> -->
                    <select name="usertype" id="utype" class="form-select">
                        <option value="">Choose User Role</option>
                        <option value="1" selected>Member</option>
                        <option value="0">Administrator</option>
                    </select>
                </div>

                <?php endif; ?>

                <!-- REMEMBER PASSWORD -->
                <div class="form-check">
                    <input type="checkbox" name="remeber_password" id="remember_password" class="form-check-input" checked>
                    <label for="remember_password" class="form-check-label">I accept all of agreement</label>
                </div>

                <!-- SUBMIT BUTTON -->

                <div class="d-grid mt-3">
                    <button type="submit" class="btn btn-primary"> <?php echo isset($_SESSION['currentuser']) ? "Create Account" : 'Register';   ?> </button>
                </div>

            </form>

            <?php  if($usertype == 0):   ?>
                <p class="text-center text-muted mt-4">If your are already a member <a href="<?php echo URLROOT . 'admin/index'   ?>">All Users</a></p>

            <?php else : ?>
                <p class="text-center text-muted mt-4">If your are already a member <a href="<?php echo URLROOT . 'user/login'   ?>">Login Here</a></p>
            <?php endif; ?>
            
        </div>
    </div>
</div>


<?php

require_once APPROOT . "/views/inc/footer.php";