<?php
$id = $_GET['id'];
$edit = showedit_team($id);

// update
if(isset($_POST['btn'])){
    $data = $_POST['frm'];
    $img = uploader('img','images/team/','ourteam','name');
    edit_ourteam($data,$id,$img);
    echo '<script>window.location.href="dashbord.php?m=ourteam&p=list";</script>';
}
?>
<div class="addmenu">
    <div class="card mb-5 ">
        <h2 class="card-body text-center text-warning">
            Edit <?php echo $edit['name'] ?>
        </h2>
    </div>
    <form method="post" class="border border-secondary p-3 " enctype="multipart/form-data">
        <div class="mb-3 ">
            <label for="exampleInputEmail1" class="form-label">name</label>
            <input type="text" name="frm[name]" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $edit['name'] ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">image</label>
            <input type="file" name="img" class="form-control" id="exampleInputPassword1" value="">
            <img src="<?php echo $edit['img'] ?>" style="width:80px" alt="team">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">job</label>
            <input type="text" name="frm[job]" class="form-control" id="exampleInputPassword1" value="<?php echo $edit['job'] ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">facebook</label>
            <input type="text" name="frm[facebook]" class="form-control" id="exampleInputPassword1" value="<?php echo $edit['facebook'] ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">instagram</label>
            <input type="text" name="frm[instagram]" class="form-control" id="exampleInputPassword1" value="<?php echo $edit['instagram'] ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">twitter</label>
            <input type="text" name="frm[twitter]" class="form-control" id="exampleInputPassword1" value="<?php echo $edit['twitter'] ?>">
        </div>

        <button type="submit" name="btn" class="btn btn-primary">Edit team</button>
    </form>
</div>