<?php
$id = $_GET['id'];
$edit = showedit_menu($id);
// update
if(isset($_POST['btn'])){
    $data = $_POST['frm'];
    edit_menu($data,$id);
    header("location:dashbord.php?m=menu_site&p=list");
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
            <label for="exampleInputPassword1" class="form-label">menu link</label>
            <input type="text" name="frm[url]" class="form-control" id="exampleInputPassword1" value="<?php echo $edit['url'] ?>">
        </div>
        <label for="select ">Menu Location</label>
        <!-- <div class="border border-danger"> -->
            <select class="form-control border p-1 mb-3" name="frm[parent]" aria-label="Default select example">
                <option value="0">Menu Level One</option>
                <?php
                    $submenu = submenu();
                    foreach($submenu as $subs){
                        echo "<option value='$subs[id]'";
                        if($edit['chid'] == $subs['id']){
                            echo " selected";
                        }
                        echo ">$subs[title]</option>";
                    }
                ?>

                <!-- <option value="1">Menu Level Two</option>
                <option value="2">Menu Level Three</option> -->
            </select>
        <!-- </div> -->
        <label class="form-check-label" for="exampleCheck1">status Menu</label>
        <div class="mb-1 form-check">
            <input type="radio" name="frm[status]" class="form-check-input" id="exampleCheck1" value="1" <?php if($edit['status'] == "1"){echo "checked";} ?>>
            <label class="form-check-label" for="exampleCheck1">active</label>
        </div>
        <div class="mb-3 form-check">
            <input type="radio" name="frm[status]" class="form-check-input" id="exampleCheck1" value="0" <?php if($edit['status'] == '0'){echo "checked";} ?>>
            <label class="form-check-label" for="exampleCheck1">unactive</label>
        </div>
        <div class="mb-3 ">
            <label for="exampleInputEmail1" class="form-label">View Menu</label>
            <input type="text" name="frm[sort]" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $edit['sort'] ?>">
        </div>
        <button type="submit" name="btn" class="btn btn-primary">Edit Menu</button>
    </form>
</div>