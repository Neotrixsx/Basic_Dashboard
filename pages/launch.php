<?php
    include 'session.php';
    include "includephp/fetchusers.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Dashboard</title>
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="../dist/common/sb-admin-2.css" rel="stylesheet">
    <link href="../dist/common/style.css" rel="stylesheet" type="text/css">
     <!-- DataTables CSS -->
     <link href="../vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

<!-- DataTables Responsive CSS -->
<link href="../vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

 <script type="text/javascript">
        var uri = window.location.toString();
        if (uri.indexOf("?") > 0) {
            var clean_uri = uri.substring(0, uri.indexOf("?"));
            window.history.replaceState({}, document.title, clean_uri);
        }
    </script>
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
                            <a href="adddata"><i class="fa fa-plus-circle   fa-fw"></i> Add Information</a>
                        </li>
                        <li>
                            <a href="catlist"><i class="fa fa-star  fa-fw"></i> Categories</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Applications <button onclick="reloadpage()"  style="float: right;" type="button" class="btn btn-success btn-circle"><i class="fa fa-refresh "></i>
                            </button> </h1>
                    </div>
                </div>
                <div class="row">
                <div class="col-lg-12">
                    <!-- // Data page -->
                    <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            DataTables Advanced Tables
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Company Name</th>
                                        <th>Address</th>
                                        <th>Website</th>
                                        <th>Contact Perason</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php  
                                // while ($row = mysql_fetch_assoc($userinfo)){
                                while ( $row = mysqli_fetch_array($userinfo, MYSQLI_ASSOC)){
                                ?>
                                <tr class="gradeX">
                                    <td class="center"><?php echo $row['userid']; ?></td>
                                    <td class="center"><?php echo $row['campany_name']; ?></td>
                                    <td class="center"><?php echo $row['address']; ?></td>
                                    <td class="center"><a href="<?php echo $row['website']; ?>"  target="_blank"  ><?php echo $row['website']; ?></a></td>
                                    <td class="center"><?php echo $row['contact_person']; ?></td>
                                    <td class="center"><a href="mailto:<?php echo $row['email']; ?>" target="_blank" ><?php echo $row['email']; ?></a></td>
                                    <td class="center"><a href="tel:<?php echo $row['phone']; ?>"><?php echo $row['phone']; ?></a></td>
                                    <td class="center"><a onclick="delinfo(<?php echo $row['userid']; ?>,'<?php echo $row['campany_name']; ?>')"><i class="fa fa-times fa-fw"></i></a></td>
                                </tr>
                                    <?php  
                               }
                                ?>
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>

                </div>
                <div>
            </div>
        </div>
    </div>
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>
    <script src="../dist/common/sb-admin-2.js"></script>
    <script src="../dist/common/js.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>
    <!-- Page-Level Demo Scripts - Tables - Use for reference -->

    <!-- toast message  -->
    <link href="../dist/toast/jquery.toast.min.css" rel="stylesheet">
    <script src="../dist/toast/jquery.toast.min.js"></script>
    <script src="../dist/toast/jquery.toast.messages.js"></script>  

     <script>
        $(document).ready(function() {
            $('#dataTables-example').DataTable({
                responsive: true
            });
        });
    </script>
</body>
</html>
<?php
    include "includephp/deleteinfo.php";
?>