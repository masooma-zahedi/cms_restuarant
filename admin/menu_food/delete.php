<?php
$id = $_GET['id'];
delete_menufood_cat($id);
header("location:dashbord.php?m=menu_food&p=list");