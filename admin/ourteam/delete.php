<?php
$id = $_GET['id'];
delete_team($id);
?>
<script>
    window.location.href="dashbord.php?m=ourteam&p=list";
</script>