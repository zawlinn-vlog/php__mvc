<!-- NAVBAR SECTION -->

<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a href="#" class="navbar-brand">
            <h3 class="text-primary">LOGO</h3>
        </a>

        <button class="navbar-toggler" data-bs-target="#pageNav" data-bs-toggle="collapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="pageNav">
            <ul class="navbar-nav ms-auto gap-lg-3">

                <li class="nav-item">
                    <a href="#" class="nav-link active">Home</a>
                </li>

                <!-- FREE COURSE -->

                <li class="nav-item">
                    <div class="dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Free Courses</a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="#" class="dropdown-item py-2 active ">HTML Courses</a>
                            </li>
                            <li>
                                <a href="#" class="dropdown-item py-2">CSS Courses</a>
                            </li>
                            <li>
                                <a href="#" class="dropdown-item py-2">JavaScript Courses</a>
                            </li>
                            <li>
                                <a href="#" class="dropdown-item py-2">jQuery Courses</a>
                            </li>
                            <li>
                                <a href="#" class="dropdown-item py-2">Bootstrap Courses</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <?php if(isset($_SESSION['currentuser'])): ?>

                <!-- PAID COURSE -->

                <li class="nav-item">
                    <div class="dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Paid Course</a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="#" class="dropdown-item py-2"> PHP Courses</a>
                            </li>
                            <li>
                                <a href="#" class="dropdown-item py-2"> mySQL Courses</a>
                            </li>
                            <li>
                                <a href="#" class="dropdown-item py-2"> Laravel Courses</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <!-- ADMIN PANEL -->

                <li class="nav-item">
                    <div class="dropdown">
                        <a href="#" class="nav-link" data-bs-toggle="dropdown">
                            <img src="https://placehold.co/30" class="rounded-circle" alt="" style="width: 30px; height:30px" >
                        </a>
                        <ul class="dropdown-menu"  style="left :-250%;">
                            <li>
                                <a href="#" class="dropdown-item py-2">Profile</a>
                            </li>
                            <li>
                                <a href="#" class="dropdown-item py-2">My Courses</a>
                            </li>
                            <li>
                                <a href="#" class="dropdown-item py-2">Cart</a>
                            </li>
                            <li>
                                <a href="<?php echo URLROOT . 'user/logout'   ?>" class="dropdown-item py-2">Logout</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <?php else: ?>
                <!-- Login -->
                <li class="nav-item">
                    <a href="<?php echo URLROOT .  'user/login' ?>" class="nav-link active">Login</a>
                </li>

                <?php  endif;  ?>
            </ul>
        </div>
    </div>
</nav>