<?php
$id = $_GET['id'];
$edit = showedit_menufood($id);

// update
if(isset($_POST['btn'])){
    $data = $_POST['frm'];
    edit_menufood($data,$id);
    header("location:dashbord.php?m=menu_food&p=list");
}
?>
<div class="addmenu">
    <div class="card mb-5 ">
        <h2 class="card-body text-center text-warning">
            Edit Menu <?php echo $edit['title'] ?>
        </h2>
    </div>
    <form method="post" class="border border-secondary p-3 ">
        <div class="mb-3 ">
            <label for="exampleInputEmail1" class="form-label">menu title</label>
            <input type="text" name="frm[title]" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $edit['title'] ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">description</label>
            <input type="text" name="frm[description]" class="form-control" id="exampleInputPassword1" value="<?php echo $edit['description'] ?>">
        </div>
        <div class="mb-3 ">
            <label for="exampleInputEmail1" class="form-label">Price</label>
            <input type="number" name="frm[price]" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $edit['price'] ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">title_cat</label>
            <input type="text" name="frm[title_cat]" class="form-control" id="exampleInputPassword1" value="<?php echo $edit['title_cat'] ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">image</label>
            <input type="text" name="frm[img]" class="form-control" id="exampleInputPassword1" value="<?php echo $edit['img'] ?>">
        </div>
        <button type="submit" name="btn" class="btn btn-primary">Edit Menu</button>
    </form>
</div>