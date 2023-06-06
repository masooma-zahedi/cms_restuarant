<?php
if(isset($_POST['btn'])){
    $img_up_right = $_FILES['img_up_right'];
    $img_up_left = $_FILES['img_up_left'];
    $img_down_left = $_FILES['img_down_left'];
    $img_down_right = $_FILES['img_down_right'];
    $img1 = uploader('img_up_right','images/about/',"img",'-');
    $img2 = uploader('img_up_left','images/about/',"img",'-');
    $img3 = uploader('img_down_left','images/about/',"img",'-');
    $img4 = uploader('img_down_right','images/about/',"img",'-');
    update_img_about( $img1,$img2,$img3,$img4);
    // var_dump(show_img_about());
    // $u = show_img_about();
    // echo $u['img_up_right'];


}
?>



<div class="addmenu">
    <div class="card mb-5 ">
        <h2 class="card-body text-center text-warning">
            Add Image For About Part
        </h2>
    </div>
    <form method="post" enctype="multipart/form-data" class="border border-secondary p-3 ">
        <div class="mb-3 border border-primary p-2">
            <label for="exampleInputEmail1" class="form-label">image up_left </label>
            <input type="file" name="img_up_right" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3 border border-primary p-2">
            <label for="exampleInputEmail1" class="form-label">image up_right</label>
            <input type="file" name="img_up_left" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3 border border-primary p-2">
            <label for="exampleInputEmail1" class="form-label">image down_left</label>
            <input type="file" name="img_down_left" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3 border border-primary p-2">
            <label for="exampleInputEmail1" class="form-label">image down_right</label>
            <input type="file" name="img_down_right" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <button type="submit" name="btn" class="btn btn-primary">update image</button>
    </form>
</div>