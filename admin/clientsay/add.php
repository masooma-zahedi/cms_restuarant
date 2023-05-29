<?php
if(isset($_POST['btn'])){
    $data = $_POST['frm'];
    $img = uploader('img','images/clientsay/',"client",'say');
    add_clientsay($data,$img);
}
?>



<div class="addmenu">
    <div class="card mb-5 ">
        <h2 class="card-body text-center text-warning">
            Add New client say
        </h2>
    </div>
    <form method="post" enctype="multipart/form-data" class="border border-secondary p-3 ">
        <div class="mb-3 ">
            <label for="exampleInputEmail1" class="form-label">client name</label>
            <input type="text" name="frm[name]" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">description</label>
            <input type="text" name="frm[description]" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3 ">
            <label for="exampleInputEmail1" class="form-label">image </label>
            <input type="file" name="img" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <button type="submit" name="btn" class="btn btn-primary">Add clientsay</button>
    </form>
</div>