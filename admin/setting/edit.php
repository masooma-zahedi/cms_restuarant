<?php
$edit = setting();

// update
if(isset($_POST['btn'])){
    $data = $_POST['frm'];
    // var_dump($data);
    edit_setting($data);
    echo '<script>window.location.href="dashbord.php?m=setting&p=edit&edit=done";</script>';
}
?>
<div class="addmenu">
    <div class="card mb-5 ">
        <h2 class="card-body text-center text-warning">
            Edit Setting <?php echo $edit['titlesite'] ?>
        </h2>
    </div>
    <form method="post" class="border border-secondary p-3 " enctype="multipart/form-data">
        <div class="mb-3 ">
            <label for="exampleInputEmail1" class="form-label">title site</label>
            <input type="text" name="frm[titlesite]" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $edit['titlesite'] ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">description site</label>
            <input type="text" name="frm[descriptionsite]" class="form-control" id="exampleInputPassword1" value="<?php echo $edit['descriptionsite'] ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">brand_name</label>
            <input type="text" name="frm[brand_name]" class="form-control" id="exampleInputPassword1" value="<?php echo $edit['brand_name'] ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">brand_img</label>
            <input type="text" name="frm[brand_img]" class="form-control" id="exampleInputPassword1" value="<?php echo $edit['brand_img'] ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">about_us</label>
            <input type="text" name="frm[about_us]" class="form-control" id="exampleInputPassword1" value="<?php echo $edit['about_us'] ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">contact_us</label>
            <input type="text" name="frm[contact_us]" class="form-control" id="exampleInputPassword1" value="<?php echo $edit['contact_us'] ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">booking</label>
            <input type="text" name="frm[booking]" class="form-control" id="exampleInputPassword1" value="<?php echo $edit['booking'] ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">phone</label>
            <input type="text" name="frm[phone]" class="form-control" id="exampleInputPassword1" value="<?php echo $edit['phone'] ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">email</label>
            <input type="text" name="frm[email]" class="form-control" id="exampleInputPassword1" value="<?php echo $edit['email'] ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">address</label>
            <input type="text" name="frm[address]" class="form-control" id="exampleInputPassword1" value="<?php echo $edit['address'] ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">map</label>
            <input type="text" name="frm[map]" class="form-control" id="exampleInputPassword1" value="<?php echo $edit['map'] ?>">
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
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">youtube</label>
            <input type="text" name="frm[youtube]" class="form-control" id="exampleInputPassword1" value="<?php echo $edit['youtube'] ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">linkedin</label>
            <input type="text" name="frm[linkedin]" class="form-control" id="exampleInputPassword1" value="<?php echo $edit['linkedin'] ?>">
        </div>

        <button type="submit" name="btn" class="btn btn-primary">Edit Menu</button>
    </form>
</div>