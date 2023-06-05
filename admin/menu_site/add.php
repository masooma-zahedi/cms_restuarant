<?php
if(isset($_POST['btn'])){
    $data = $_POST['frm'];
    add_menu($data);
}
?>



<div class="addmenu">
    <div class="card mb-5 ">
        <h2 class="card-body text-center text-warning">
            Add New Menu 
        </h2>
    </div>
    <form method="post" class="border border-secondary p-3 ">
        <div class="mb-3 ">
            <label for="exampleInputEmail1" class="form-label">menu title</label>
            <input type="text" name="frm[name]" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">menu link</label>
            <input type="text" name="frm[url]" class="form-control" id="exampleInputPassword1">
        </div>
        <label for="select ">Menu Location</label>
        <!-- <div class="border border-danger"> -->
            <select class="form-control border p-1 mb-3" name="frm[parent]" aria-label="Default select example">
                <option value="0">Menu Level One</option>
                <?php
                    $submenu = submenu();
                    // var_dump($submenu);
                    foreach($submenu as $subs){
                        echo "<option value='$subs[id]'>$subs[title]</option>";
                    }
                ?>

                <!-- <option value="1">Menu Level Two</option>
                <option value="2">Menu Level Three</option> -->
            </select>
        <!-- </div> -->
        <label class="form-check-label" for="exampleCheck1">status Menu</label>
        <div class="mb-1 form-check">
            <input type="radio" name="frm[status]" class="form-check-input" id="exampleCheck1" value="1">
            <label class="form-check-label" for="exampleCheck1">active</label>
        </div>
        <div class="mb-3 form-check">
            <input type="radio" name="frm[status]" class="form-check-input" id="exampleCheck1" value="0">
            <label class="form-check-label" for="exampleCheck1">unactive</label>
        </div>
        <div class="mb-3 ">
            <label for="exampleInputEmail1" class="form-label">View Menu</label>
            <input type="text" name="frm[sort]" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <button type="submit" name="btn" class="btn btn-primary">Add Menu</button>
    </form>
</div>