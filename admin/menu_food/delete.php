<?php
$id = $_GET['id'];
delete_menu($id);
// header("location:dashbord.php?m=menu_site&p=list");
?>
<script>
    window.location.href="dashbord.php?m=menu_food&p=list";
</script>
