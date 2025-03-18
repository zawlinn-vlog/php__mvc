<?php

# KICK BACK TO HOME

require_once APPROOT . "/views/inc/header.php";
require_once APPROOT . "/views/inc/navbar.php";

// var_dump(isset($_SESSION['currentuser'])? $_SESSION['currentuser'] : '');

// echo var_dump(isset($_SESSION['currentuser'])? $_SESSION['currentuser'] -> usertype : '');

?>


<div class="container py-5">
    <div class="row">
        <div class="col-8 mx-auto border border-1 p-5">

        <?php  # var_dump($data);   ?>

            <h4 class="text-primary text-center mb-5">Creating Posts &mdash;</h4>
            <form action="" method="POST" enctype="multipart/form-data" class="d-grid gap-4">
                <!-- <div class="input-group">
                    <span class="input-group-text px-3"> Post Title </span>
                    <input type="text" name="" id="" class="form-control">
                </div> -->
                <div class="form-group">
                    <div class="row gap-4">
                        <div class="col-12 col-lg-6">
                            <label for="title" class="form-label">Post Title</label>
                            <div class="input-group">
                                <select name="head" id="" class=" input-group-text" >
                                    <option value="HTML">HTML</option>
                                    <option value="CSS">CSS</option>
                                    <option value="JS">JavaScript</option>
                                    <option value="jq">jQuery</option>
                                    <option value="BT">Bootstrap</option>
                                </select>
                                <input type="text" name="title" id="title" class="form-control">
                            </div>
                            <span class="text-danger">
                                <?php echo isset($data['titleErr']) ? $data['titleErr'] : '';     ?>
                            </span>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="course" class="form-label">Intend for</label>
                                <select name="courses" id="courses" class="form-select">
                                    <option value="" >Choose Purpose</option>
                                    <option value="0" selected>Free Courses</option>
                                    <option value="1">Premium Course</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row gap-4">
                    <div class="col">
                        <div class="form-group">
                            <p class="form-label">Upload Thubmnails </p>
                            <label for="thumnails" class="border border-1 rounded d-flex justify-content-center align-items-center" style="width:200px; height: 120px;">
                                <i class="fal fa-plus-square fa-2x"></i>
                            </label>
                            <input type="file" name="pic" id="thumnails" class="d-none" accept="image/*">
                            <span class="text-danger">
                                <?php echo isset($data['imgPathErr']) ? $data['imgPathErr'] : '';     ?>
                            </span>
                        </div>
                    </div>

                    <div class="col">
                        <div class="form-group">
                            <p class="form-label">Upload Video &mdash; </p>
                            <label for="vdo" class="border border-1 rounded d-flex justify-content-center align-items-center" style="width:200px; height: 120px;">
                                <i class="fal fa-video-plus fa-2x"></i>                        
                            </label>
                            <input type="file" name="vdo" id="vdo" class="d-none" accept="video/*">
                            <span class="text-danger">
                                <?php echo isset($data['vdoPathErr']) ? $data['vdoPathErr'] : ''; ?>
                            </span>
                        </div>
                    </div>
                </div>   

                <div class="form-group">
                    <label for="desc_txt" class="form-label">Description </label>
                    <textarea class="form-control" name="desc"  id="desc_txt" style="resize: none; height: 150px">

                    </textarea>

                    <span class="text-danger">
                        <?php echo isset($data['descriptionErr']) ? $data['descriptionErr'] : '';     ?>
                    </span>
                </div>

                

                <div class="d-grid mt-3">
                    <button type="submit" class="btn btn-primary me-auto px-5" >Create Post</button>
                </div>
            </form>
        </div>
    </div>
</div>









<?php

require_once APPROOT . "/views/inc/footer.php";