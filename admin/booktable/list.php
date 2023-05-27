<div class="listmenu">
    <div class="card mb-5 ">
        <h2 class="card-body text-center text-warning">
            List Book Table
        </h2>
    </div>
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">email</th>
      <th scope="col">date</th>
      <th scope="col">numpeople</th>
      <th scope="col">massage</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $listmenu_cat = list_booktable();
    foreach($listmenu_cat as $list):
    ?>
    <tr>
      <th scope="row"><?php echo $list['name'] ?></th>

      <!-- <td><?php 
          if($list['status'] == "1"){
            echo "<span class =' btn-sm btn-success'>active</span>";
          }
          else{
            echo "<span class =' btn-sm btn-danger'>unactive</span>";
          }
        ?>
      </td> -->
      <td><?php echo $list['email'] ?></td>
      <td><?php echo $list['date'] ?></td>
      <td><?php echo $list['numpeople'] ?></td>
      <td><?php echo $list['massage'] ?></td>
      <!-- <td><a href="dashbord.php?m=menu_food_cat&p=edit&id=<?php echo $list['id'] ?>"><i class="fas fa-edit" style="color:brown"></i></a></td> -->
      <td><a href="dashbord.php?m=booktable&p=delete&id=<?php echo $list['id'] ?>"><i class="fa-solid fa-trash" style="color:red"></a></i></td>
    </tr>
    <?php
        endforeach;
    ?>
  </tbody>
</table>
</div>