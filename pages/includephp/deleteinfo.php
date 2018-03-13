<?php
if (isset($_GET['param'])){
    $php_var = $_GET['param'];

    $selectemail = "SELECT `email` FROM `userinfo` WHERE `userid`='$php_var'";
    $result = mysqli_query($db, $selectemail);
    while ($row = $result->fetch_assoc()) {
        $newcemail = "deleted_".$row['email'];
    }
    $update = "UPDATE `userinfo` SET `email` = '$newcemail', `status` = '0' WHERE `userid` = $php_var";
    if ($db->query($update) === TRUE) {
        echo "<script type='text/javascript'> successtoastdelinfo(); </script>";
        echo "<script type='text/javascript'> setTimeout(function(){   window.location.reload(); }, 500); </script>";
    } else {
        echo "Error updating record: " . $db->error;
        echo "<script type='text/javascript'> warningtoast(); </script>";
    }
}

?>