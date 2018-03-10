
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$cname = mysqli_real_escape_string($db, $_POST['cname']);
$ccat = mysqli_real_escape_string($db, $_POST['ccat']);
$cadd = mysqli_real_escape_string($db, $_POST['cadd']);
$cweb = mysqli_real_escape_string($db, $_POST['cweb']);
$cper = mysqli_real_escape_string($db, $_POST['cper']);
$cmail = mysqli_real_escape_string($db, $_POST['cmail']);
$cphone = mysqli_real_escape_string($db, $_POST['cphone']);

    $sql = "SELECT `userid` FROM `userinfo` WHERE `email` = '$cmail' ";
    $result = mysqli_query($db, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
    if ($count >= 1) {
        echo "<script type='text/javascript'> errortoast(); </script>";    
    } else if ($count == 0) {
        $insertsql = "INSERT INTO `userinfo` (`campany_name`, `category`, `address`, `website`, `contact_person`, `email`, `phone`) VALUES ( '$cname', '$ccat', '$cadd', '$cweb', '$cper', '$cmail', '$cphone')";
        $inserresult = mysqli_query($db, $insertsql);
        if($inserresult){         
            echo "<script type='text/javascript'> successtoast(); </script>";
        } else{
            echo "<script type='text/javascript'> warningtoast(); </script>";
        }
    }
}
?>
