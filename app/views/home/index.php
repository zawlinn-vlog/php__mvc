<?php

require_once APPROOT . "/views/inc/header.php";
require_once APPROOT . "/views/inc/navbar.php";

var_dump($_SESSION['currentuser']);


?>

<?php getFlash('login_success')  ?>




<?php

require_once APPROOT . "/views/inc/footer.php";