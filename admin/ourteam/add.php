<?php
if(isset($_POST['btn'])){
    $data = $_POST['frm'];
    $img = uploader('img','images/team/','ourteam','name');
    // var_dump($img);die;
    add_ourteam($data,$img);

}
?>



<div class="addmenu">
    <div class="card mb-5 ">
        <h2 class="card-body text-center text-warning">
            Add New Team 
        </h2>
    </div>
    <form method="post" enctype="multipart/form-data" class="border border-secondary p-3 ">
        <div class="mb-3 ">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input type="text" name="frm[name]" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3 ">
            <label for="exampleInputEmail1" class="form-label">Image </label>
            <input type="file" name="img" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Job</label>
            <input type="text" name="frm[job]" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Facebook</label>
            <input type="text" name="frm[facebook]" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Instagram</label>
            <input type="text" name="frm[instagram]" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Twitter</label>
            <input type="text" name="frm[twitter]" class="form-control" id="exampleInputPassword1">
        </div>

        <button type="submit" name="btn" class="btn btn-primary">Add Menu</button>
    </form>
</div>