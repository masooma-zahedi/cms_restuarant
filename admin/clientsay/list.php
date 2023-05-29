<div class="listmenu">
    <div class="card mb-5 ">
        <h2 class="card-body text-center text-warning">
            List client says
        </h2>
    </div>
    <table class="table table-striped ">
  <thead class="">
    <tr>
      <th scope="col">client Name</th>
      <th scope="col">Description</th>
      <th scope="col">image</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $listclient = list_clientsay();
    foreach($listclient as $list):
    ?>
    <tr>
      <th scope="row"><?php echo $list['name'] ?></th>
      <td><?php echo $list['description'] ?></td>
      <td><?php echo $list['img'] ?></td>
      <td class="text-center"><a href="dashbord.php?m=clientsay&p=delete&id=<?php echo $list['id'] ?>"><i class="fa-solid fa-trash" style="color:red"></a></i></td>
    </tr>
    <?php
        endforeach;
    ?>
  </tbody>
</table>
</div>