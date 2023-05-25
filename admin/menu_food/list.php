<div class="listmenu">
    <div class="card mb-5 ">
        <h2 class="card-body text-center text-warning">
            List Menu
        </h2>
    </div>
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Menu Name</th>
      <th scope="col">Description</th>
      <th scope="col">Price</th>
      <th scope="col">title_cat</th>
      <th scope="col">image</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $listmenu = list_menufood();
    foreach($listmenu as $list):
    ?>
    <tr>
      <th scope="row"><?php echo $list['title'] ?></th>
      <td><?php echo $list['description'] ?></td>
      <td><?php echo "$".$list['price'] ?></td>
      <td><?php echo selectparentfood($list['title_cat'])?></td>
      <td><?php echo $list['img'] ?></td>
      <td><a href="dashbord.php?m=menu_food&p=edit&id=<?php echo $list['id'] ?>""><i class="fas fa-edit" style="color:brown"></i></a></td>
      <td><a href="dashbord.php?m=menu_food&p=delete&id=<?php echo $list['id'] ?>"><i class="fa-solid fa-trash" style="color:red"></a></i></td>
    </tr>
    <?php
        endforeach;
    ?>
  </tbody>
</table>
</div>