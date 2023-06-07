<?php
$id = $_GET['id'];
delete_contact($id);
?>
<script>
    window.location.href="dashbord.php?m=contact&p=list";
</script>