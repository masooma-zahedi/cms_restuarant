<div class="listmenu">
    <div class="card mb-5 ">
        <h2 class="card-body text-center text-warning">
            List Contact
        </h2>
    </div>
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Subject</th>
      <th scope="col">Message</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $listcontact = list_contact();
    foreach($listcontact as $list):
    ?>
    <tr>
      <th scope="row"><?php echo $list['name'] ?></th>
      <td><?php echo $list['email'] ?></td>
      <td><?php echo $list['subject'] ?></td>
      <td><?php echo $list['message'] ?></td>
      <td class="text-center"><a href="dashbord.php?m=contact&p=delete&id=<?php echo $list['id'] ?>"><i class="fa-solid fa-trash" style="color:red"></a></i></td>
    </tr>
    <?php
        endforeach;
    ?>
  </tbody>
</table>
</div>