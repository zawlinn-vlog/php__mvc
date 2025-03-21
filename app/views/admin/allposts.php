<?php

# KICK BACK TO HOME


require_once APPROOT . "/views/inc/header.php";
require_once APPROOT . "/views/inc/navbar.php";

// foreach($data as $val)
// {
//     printArr($val);
// }


?>

<div class="container py-5">
    <div class="row justify-content-center justify-content-md-start gy-4">
        <?php foreach($data as $val) :?>
        <div class="col-10 col-md-6 col-lg-3 " >
            <div class="card h-100">
                <img src="<?php echo URLROOT .  $val->picture ?>" alt="" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title"><?php  echo $val->title;   ?></h5>
                    <p class="card-text">
                        <?php  echo substr($val->description, 0 , 80)  ?> ...
                    </p>
                    <div class="d-flex justify-content-end gap-3">
                        <a href="<?php echo URLROOT . "admin/edit/". $val->id ?>" class="btn btn-primary ">Edit</a>
                        <a href="<?php echo URLROOT . "admin/delete/". $val->id ?>" class="btn btn-danger ">Delete</a>
                    </div>
                </div>
                
            </div>
        </div>

        <?php endforeach; ?>
    </div>
</div>








<?php

require_once APPROOT . "/views/inc/footer.php";