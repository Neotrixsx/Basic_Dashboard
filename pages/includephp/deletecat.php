<?php
    if (isset($_GET['param'])){
        $php_var = $_GET['param'];
        $update = "DELETE FROM `category` WHERE `category`.`catid` = $php_var";
        if ($db->query($update) === TRUE) {
            echo "<script type='text/javascript'> successtoastdelcat(); </script>";
        } else {
            echo "Error updating record: " . $db->error;
            echo "<script type='text/javascript'> warningtoast(); </script>";
        }
    }
?>


 