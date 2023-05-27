<?php
$id = $_GET['id'];
delete_booktable($id);
// header("location:dashbord.php?m=booktable&p=list");
?>
<script>
    window.location.href="dashbord.php?m=booktable&p=list";
</script>