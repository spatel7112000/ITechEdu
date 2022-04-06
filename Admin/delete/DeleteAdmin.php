
<?php
    include '../includes/config.php';
    $ID = intval($_GET['ID']);
    $deletequery = "delete from tbladmin where ID=$ID";
    $query = mysqli_query($conn,$deletequery);

    header('location:../manageadmin.php');



?>