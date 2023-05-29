<?php
$id = $_GET['id'];
$edit = showedit_menufood($id);

// update
if(isset($_POST['btn'])){
    $data = $_POST['frm'];
    // var_dump($data["parent"]);
    $titlecat = selectparentfood($data['parent']);
    $img = uploader('img','images/menufood/',$titlecat,'namefood');
    edit_menufood($data,$id,$img);
    header("location:dashbord.php?m=menu_food&p=list");
}
?>
<div class="addmenu">
    <div class="card mb-5 ">
        <h2 class="card-body text-center text-warning">
            Edit Menu<?php echo $edit['title'] ?>
        </h2>
    </div>
    <form method="post" class="border border-secondary p-3 " enctype="multipart/form-data">
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
        <!-- <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">title_cat</label>
            <input type="text" name="frm[title_cat]" class="form-control" id="exampleInputPassword1" value="<?php echo $edit['title_cat'] ?>">
        </div> -->
        <div class="mb-3">
        <label for="select ">Menu Location</label>
        <!-- <div class="border border-danger"> -->
            <select class="form-control border p-1 mb-3" name="frm[parent]" aria-label="Default select example">
                <!-- <option value="0">Menu Level One</option> -->
                <?php
                    $submenufood = submenufood();
                    foreach($submenufood as $subs){
                        echo "<option value='$subs[id]'";
                        // ////////////////////////////////////// work
                        if($edit['title_cat'] == $subs['id']){
                            echo " selected";
                        }
                        echo ">$subs[title_cat]</option>";
                    }
                ?>

                <!-- <option value="1">Menu Level Two</option>
                <option value="2">Menu Level Three</option> -->
            </select>
        <!-- </div> -->
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">image</label>
            <input type="file" name="img" class="form-control" id="exampleInputPassword1" value="">
            <img src="<?php echo $edit['img'] ?>" style="width:80px" alt="">
        </div>
        <button type="submit" name="btn" class="btn btn-primary">Edit Menu</button>
    </form>
</div>