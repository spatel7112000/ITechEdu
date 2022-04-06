
<?php
    include '../includes/config.php';
    $UID = intval($_GET['UID']);
    $deletequery = "delete from tbluser where UID=$UID";
    $query = mysqli_query($conn,$deletequery);

    header('location:../user.php');



?>