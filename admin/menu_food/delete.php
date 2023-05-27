<?php
$id = $_GET['id'];
delete_menufood($id);
// header("location:dashbord.php?m=menu_food&p=list");
?>
<script>
    window.location.href="dashbord.php?m=menu_food&p=list";
</script>