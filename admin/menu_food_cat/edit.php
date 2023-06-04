<?php
$id = $_GET['id'];
$edit = showedit_menufood_cat($id);
// var_dump($edit);

// update
if(isset($_POST['btn'])){
    $data = $_POST['frm'];
    edit_menufood_cat($data,$id);
    header("location:dashbord.php?m=menu_food_cat&p=list");
    echo '<script>window.location.href="dashbord.php?m=menu_food&p=list";</script>';
}
?>
<div class="addmenu">
    <div class="card mb-5 ">
        <h2 class="card-body text-center text-warning">
            Edit MenuFood_category <?php echo $edit['title_cat'] ?>
        </h2>
    </div>
    <form method="post" class="border border-secondary p-3 ">
        <div class="mb-3 ">
            <label for="exampleInputEmail1" class="form-label">menu title</label>
            <input type="text" name="frm[title]" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $edit['title_cat'] ?>">
        </div>

        <label class="form-check-label" for="exampleCheck1">status MenuFood_cat</label>
        <div class="mb-1 form-check">
            <input type="radio" name="frm[status]" class="form-check-input" id="exampleCheck1" value="1" <?php if($edit['status'] == "1"){echo "checked";} ?>>
            <label class="form-check-label" for="exampleCheck1">active</label>
        </div>
        <div class="mb-3 form-check">
            <input type="radio" name="frm[status]" class="form-check-input" id="exampleCheck1" value="0" <?php if($edit['status'] == '0'){echo "checked";} ?>>
            <label class="form-check-label" for="exampleCheck1">unactive</label>
        </div>
        <div class="mb-3 ">
            <label for="exampleInputEmail1" class="form-label">View MenuFood_cat</label>
            <input type="text" name="frm[sort]" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $edit['sort'] ?>">
        </div>
        <button type="submit" name="btn" class="btn btn-primary">Edit Menu</button>
    </form>
</div>