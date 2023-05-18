<h2>list menu</h2>
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
      <th scope="col">Url</th>
      <th scope="col">Major title</th>
      <th scope="col">Sort</th>
      <th scope="col">Status</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $listmenu = list_menu_admin();
    foreach($listmenu as $list):
    ?>
    <tr>
      <th scope="row"><?php echo $list['title'] ?></th>
      <td><?php echo $list['url'] ?></td>
      <td><?php 
            if($list['chid']=="0" ){
                echo "Negetiv";
            }
            else{
                $parent = selectparent($list['chid']);
                echo $parent;
            }
        ?>
      </td>
      <td><?php echo $list['sort'] ?></td>
      <td><?php 
          if($list['status'] == "1"){
            echo "<span class =' btn-sm btn-danger'>active</span>";
          }
          else{
            echo "<span class =' btn-sm btn-success'>unactive</span>";
          }
        ?>
      </td>
      <td><a href=""><i class="fas fa-edit" style="color:brown"></i></a></td>
      <td><a href="dashbord.php?m=menu&p=delete&id=<?php echo $list['id'] ?>"><i class="fa-solid fa-trash" style="color:red"></a></i></td>
    </tr>
    <?php
        endforeach;
    ?>
  </tbody>
</table>
</div>