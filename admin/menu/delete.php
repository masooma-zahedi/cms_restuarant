<?php
$id = $_GET['id'];
delete_menu($id);
header("location:dashbord.php?m=menu&p=list");