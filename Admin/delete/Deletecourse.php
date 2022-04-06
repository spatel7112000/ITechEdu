
<?php
    include '../includes/config.php';
    $No = intval($_GET['No']);
    $deletequery = "delete from tblcourse where No=$No";
    $query = mysqli_query($conn,$deletequery);

    header('location:../managecourse.php');



?>