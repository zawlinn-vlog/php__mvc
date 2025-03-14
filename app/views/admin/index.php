<?php

# KICK BACK TO HOME


require_once APPROOT . "/views/inc/header.php";
require_once APPROOT . "/views/inc/navbar.php";

// // var_dump(isset($_SESSION['currentuser'])? $_SESSION['currentuser'] : '');

// echo var_dump(isset($_SESSION['currentuser'])? $_SESSION['currentuser'] -> usertype : '');
?>

<?php getFlash('login_success') ?>


<h3 class="text-primary">Admin Panel</h3>







<?php

require_once APPROOT . "/views/inc/footer.php";