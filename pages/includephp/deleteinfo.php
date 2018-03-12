<?php
if (isset($_GET['param'])){
    $php_var = $_GET['param'];
    $update = "UPDATE `userinfo` SET `status` = '0' WHERE `userid` = $php_var";
    if ($db->query($update) === TRUE) {
        echo "<script type='text/javascript'> successtoastdelinfo(); </script>";
    } else {
        echo "Error updating record: " . $db->error;
        echo "<script type='text/javascript'> warningtoast(); </script>";
    }
}

?>