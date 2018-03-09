<?php
    $sql = "SELECT `userid`,`canpany_name`,`address`,`website`,`contact_person`,`email`,`phone` FROM `userinfo`";
    $result = mysqli_query($db, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
    if ($count >= 1) {
        $userinfo = $result;
    } else if ($count == 0) {
        $userinfo = "Data not found!!!";
        echo "<script type='text/javascript'> testtoast(); </script>";
    }
?>
