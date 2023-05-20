<?php
if(isset($_POST['btn'])){
    $data = $_POST['frm'];
    add_menufood($data);
}
?>



<div class="addmenu">
    <div class="card mb-5 ">
        <h2 class="card-body text-center text-warning">
            Add New Menu Food
        </h2>
    </div>
    <form method="post" class="border border-secondary p-3 ">
        <div class="mb-3 ">
            <label for="exampleInputEmail1" class="form-label">menu title</label>
            <input type="text" name="frm[title]" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">description</label>
            <input type="text" name="frm[description]" class="form-control" id="exampleInputPassword1">
        </div>
        <!-- <label class="form-check-label" for="exampleCheck1">status Menu</label>
        <div class="mb-1 form-check">
            <input type="radio" name="frm[status]" class="form-check-input" id="exampleCheck1" value="1">
            <label class="form-check-label" for="exampleCheck1">active</label>
        </div>
        <div class="mb-3 form-check">
            <input type="radio" name="frm[status]" class="form-check-input" id="exampleCheck1" value="0">
            <label class="form-check-label" for="exampleCheck1">unactive</label>
        </div> -->
        <div class="mb-3 ">
            <label for="exampleInputEmail1" class="form-label">Price Food</label>
            <input type="number" name="frm[price]" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3 ">
            <label for="exampleInputEmail1" class="form-label">title Food Category </label>
            <input type="text" name="frm[title_cat]" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <button type="submit" name="btn" class="btn btn-primary">Add Menu</button>
    </form>
</div>