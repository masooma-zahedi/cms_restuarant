<div class="listmenu">
    <div class="card mb-5 ">
        <h2 class="card-body text-center text-warning">
            List MenuFood_cat
        </h2>
    </div>
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Menu Name</th>
      <th scope="col">Status</th>
      <th scope="col">Sort</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $listmenu_cat = list_menufood_cat();
    foreach($listmenu_cat as $list):
    ?>
    <tr>
      <th scope="row"><?php echo $list['title_cat'] ?></th>

      <td><?php 
          if($list['status'] == "1"){
            echo "<span class =' btn-sm btn-success'>active</span>";
          }
          else{
            echo "<span class =' btn-sm btn-danger'>unactive</span>";
          }
        ?>
      </td>
      <td><?php echo $list['sort'] ?></td>
      <td><a href="dashbord.php?m=menu_food_cat&p=edit&id=<?php echo $list['id'] ?>"><i class="fas fa-edit" style="color:brown"></i></a></td>
      <td><a href="dashbord.php?m=menu_food_cat&p=delete&id=<?php echo $list['id'] ?>"><i class="fa-solid fa-trash" style="color:red"></a></i></td>
    </tr>
    <?php
        endforeach;
    ?>
  </tbody>
</table>
</div>