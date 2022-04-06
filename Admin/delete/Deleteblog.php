
<?php
    include '../includes/config.php';
    $No = intval($_GET['No']);
    $deletequery = "delete from tblblog where No=$No";
    $query = mysqli_query($conn,$deletequery);

    header('location:../manageblog.php');



?>