<?php
    include 'session.php';
    include 'includephp/fetchlist.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Profile</title>
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="../dist/common/sb-admin-2.css" rel="stylesheet">
    <link href="../dist/common/style.css" rel="stylesheet" type="text/css">
   
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Brand Name</a>
            </div>
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown fr">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="includephp/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                       <li>
                            <a href="launch"><i class="fa fa-arrow-left  fa-fw"></i> Home</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Add Information</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Note: All field are mandatory.
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form"  method="post">
                                        <div class="form-group">
                                            <label>Canpany Name</label>
                                            <input class="form-control" name="cname" type="text" placeholder="Enter Canpany Name">
                                        </div>
                                        <div class="form-group">
                                            <label>Category</label>
                                            <select class="form-control" name="ccat" >
                                            <?php  
                                                while ( $row = mysqli_fetch_array($catinfo, MYSQLI_ASSOC)){
                                                ?>
                                                 <option id="<?php echo $row['category']; ?>"><?php echo $row['category']; ?></option>
                                                <?php  
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Country</label>
                                            <select class="form-control" name="ccountry" >
                                            <?php  
                                                while ( $row = mysqli_fetch_array($countriecatinfo, MYSQLI_ASSOC)){
                                                ?>
                                                 <option id="<?php echo $row['name']; ?>"><?php echo $row['name']; ?></option>
                                                <?php  
                                                }
                                                ?>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Addressr</label>
                                            <textarea class="form-control" name="cadd" rows="3" placeholder="Enter Addressr"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Website</label>
                                            <input class="form-control" name="cweb" type="text"  placeholder="Enter Website">
                                        </div>
                                        <div class="form-group">
                                            <label>Contact Person</label>
                                            <input class="form-control" name="cper" type="text"  placeholder="Enter text">
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" name="cmail" type="email"  placeholder="Enter text">
                                        </div>
                                        <div class="form-group">
                                            <label>Phone No.</label>
                                            <input class="form-control" name="cphone" type="tel"  placeholder="Enter text">
                                        </div>
                                        <button type="submit" class="btn btn-default">Submit Button</button>
                                        <button type="reset" class="btn btn-default">Reset Button</button>
                                    </form>
                                </div>
                                
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
    </div>
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>
    <script src="../dist/common/sb-admin-2.js"></script>

    <!-- toast message  -->
    <link href="../dist/toast/jquery.toast.min.css" rel="stylesheet">
    <script src="../dist/toast/jquery.toast.min.js"></script>
    <script src="../dist/toast/jquery.toast.messages.js"></script>   
</body>
</html>
<?php
include 'includephp/insrtdata.php';
?>