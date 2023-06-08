<div class="listmenu">
    <div class="card mb-5 ">
        <h2 class="card-body text-center text-warning">
            List Menu
        </h2>
    </div>
    <table class="table table-striped ">
  <thead class="">
    <tr>
      <th scope="col">Name</th>
      <th scope="col">img</th>
      <th scope="col">job</th>
      <th scope="col">facebook</th>
      <th scope="col">instagram</th>
      <th scope="col">twitter</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $listteam = list_ourteam();
    foreach($listteam as $list):
    ?>
    <tr>
      <th scope="row"><?php echo $list['name'] ?></th>
      <td><?php echo $list['img'] ?></td>
      <td><?php echo "$".$list['job'] ?></td>
      <td><?php echo "$".$list['facebook'] ?></td>
      <td><?php echo "$".$list['instagram'] ?></td>
      <td><?php echo "$".$list['twitter'] ?></td>
      <td><a href="dashbord.php?m=ourteam&p=edit&id=<?php echo $list['id'] ?>"><i class="fas fa-edit" style="color:brown"></i></a></td>
      <td><a href="dashbord.php?m=ourteam&p=delete&id=<?php echo $list['id'] ?>"><i class="fa-solid fa-trash" style="color:red"></a></i></td>
    </tr>
    <?php
        endforeach;
    ?>
  </tbody>
</table>
</div>