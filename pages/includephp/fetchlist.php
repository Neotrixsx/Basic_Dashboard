<?php
    $sql = "SELECT `catid`, `category` FROM `category`";
    $result = mysqli_query($db, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
    if ($count >= 1) {
        $catinfo = $result;
    } else if ($count == 0) {
        $userinfo = "Data not found!!!";
        echo "<script type='text/javascript'> nodatatoast(); </script>";
    }
    
    $countriesql = "SELECT `name` FROM `countries`";
    $countrieresult = mysqli_query($db, $countriesql);
    $countrierow = mysqli_fetch_array($countrieresult, MYSQLI_ASSOC);
    $countriecount = mysqli_num_rows($countrieresult);
    if ($countriecount >= 1) {
        $countriecatinfo = $countrieresult;
    } else if ($countriecount == 0) {
        $countrieuserinfo = "Data not found!!!";
        echo "<script type='text/javascript'> nodatatoast(); </script>";
    }

    
//   $db->close();
?>
