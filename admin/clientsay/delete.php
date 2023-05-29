<?php
$id = $_GET['id'];
delete_clientsay($id);
// header("location:dashbord.php?m=menu_food&p=list");
?>
<script>
    window.location.href="dashbord.php?m=clientsay&p=list";
</script>