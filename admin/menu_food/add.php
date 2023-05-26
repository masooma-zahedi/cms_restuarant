<?php
if(isset($_POST['btn'])){
    $data = $_POST['frm'];
    $titlecat = selectparentfood($data['parent']);
    $img = uploader('img','images/menufood/',$titlecat,'namefood');
    add_menufood($data,$img);
}
?>



<div class="addmenu">
    <div class="card mb-5 ">
        <h2 class="card-body text-center text-warning">
            Add New Menu Food
        </h2>
    </div>
    <form method="post" enctype="multipart/form-data" class="border border-secondary p-3 ">
        <div class="mb-3 ">
            <label for="exampleInputEmail1" class="form-label">menu title</label>
            <input type="text" name="frm[title]" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">description</label>
            <input type="text" name="frm[description]" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3 ">
            <label for="exampleInputEmail1" class="form-label">Price Food</label>
            <input type="number" name="frm[price]" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <!-- <div class="mb-3 ">
            <label for="exampleInputEmail1" class="form-label">title Food Category </label>
            <input type="text" name="frm[title_cat]" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div> -->
        <div class="mb-3">
        <label for="select ">Food category</label>
        <!-- <div class="border border-danger"> -->
            <select class="form-control border p-1 mb-3" name="frm[parent]" aria-label="Default select example">
                <!-- <option value="0">Menu Level One</option> -->
                <?php
                    $submenufood = submenufood();
                    // var_dump($submenufood);
                    foreach($submenufood as $subs){
                        echo "<option value='$subs[id]'>$subs[title_cat]</option>";
                    }
                ?>

                <!-- <option value="1">Menu Level Two</option>
                <option value="2">Menu Level Three</option> -->
            </select>
        <!-- </div> -->

        </div>
        <div class="mb-3 ">
            <label for="exampleInputEmail1" class="form-label">image </label>
            <input type="file" name="img" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <button type="submit" name="btn" class="btn btn-primary">Add Menu</button>
    </form>
</div>