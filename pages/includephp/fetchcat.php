<?php
    $sql = "SELECT `category` FROM `category`";
    $result = mysqli_query($db, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
    if ($count >= 1) {
        $catinfo = $result;
    } else if ($count == 0) {
        $userinfo = "Data not found!!!";
        echo "<script type='text/javascript'> testtoast(); </script>";
    }
?>
