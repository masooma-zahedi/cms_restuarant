<?php
$id = $_GET['id'];
delete_menufood_cat($id);
// header("location:dashbord.php?m=menu_food_cat&p=list");
?>
<script>
    window.location.href="dashbord.php?m=menu_food_cat&p=list";
</script>