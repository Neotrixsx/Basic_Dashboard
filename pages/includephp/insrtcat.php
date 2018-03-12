
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$ccat = mysqli_real_escape_string($db, $_POST['ccat']);

    $sql = "SELECT `category` FROM `category` WHERE `category` = '$ccat' ";

    echo $sql;
    $result = mysqli_query($db, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
    if ($count >= 1) {
        echo "<script type='text/javascript'> errortoastcat(); </script>";    
    } else if ($count == 0) {
        $insertsql = "INSERT INTO `category` (`category`) VALUES ('$ccat');";
        $inserresult = mysqli_query($db, $insertsql);
        if($inserresult){         
            echo "<script type='text/javascript'> successtoastcat(); </script>";
        } else{
            echo "<script type='text/javascript'> warningtoast(); </script>";
        }
    }
}
?>
