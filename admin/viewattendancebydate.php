   <?php require "include/session.php"; ?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ela Admin - HTML5 Admin Template</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="images/favicon.png">
    <link rel="shortcut icon" href="images/favicon.png">

    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/pe-icon-7-filled.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>

<body>
    <!-- Left Panel -->
    <?php include("include/header.php");?>
    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- /header -->
        <?php include("include/top_head.php"); ?>
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Dashboard</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Dashboard</a></li>
                                    <li><a href="#">Table</a></li>
                                    <li class="active">Basic table</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content">

            <?php
            require "include/Database.php";

$db = new Database();

            $semester = $_REQUEST['semester'];
            $depID = $_REQUEST['department'];
            $date = $_REQUEST['date'];
            
            $selectQuery = "SELECT * FROM `attendance` WHERE `date`= '$date' AND `semster`='$semester' AND `department_id`='$depID'";
            
            $result = mysqli_query($db->db_connect(),$selectQuery);
            
            ?>

            <div class="row">

                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">ATTENDANCE Table</strong>
                        </div>
                        <div class="table-stats order-table ov-h">
                            <table class="table ">
                                <thead>
                                    <tr>


                                        <th>Name</th>
                                        <th>ENROLLMENT</th>
                                        <th>DATE</th>
                                        <th>TOTAL LECTURE</th>
                                        <th>ATTENED LECTURE</th>
                                        <th>STATUS</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                            while($row =  mysqli_fetch_row($result))
                            {
                                ?>



                                    <tr>
                                        <td class="name">

                                            <?php                                      
                    $selectQuery1 = "SELECT * FROM `student` WHERE `id`=$row[5]";
            
            $result1 = mysqli_query($db->db_connect(),$selectQuery1);
                                
                                while($row1 = mysqli_fetch_row($result1))
                                {
                                    echo $row1[1];
                                    
                                    ?>

                                        </td>
                                        <td>
                                            <?php echo $row1[3]; ?>
                                        </td>

                                        <?php
                                            }
                                           
                                           ?>
                                        <td> <?php echo $row[1]; ?> </td>
                                        <td> <?php echo $row[2]; ?> </td>
                                        <td> <?php echo $row[3]; ?> </td>
                                        <td> <?php                                            
                                if($row[4]==1)
                                {
                                    echo "<span class='text-success'>PRESENT</span>";
                                }else if($row[4]==0)
                                {
                                    
                                    echo "<span class='text-danger'>ABSEND<span>";
                                }
                                            ?> </td>

                                    </tr>

                                    <?php
                                
                            }
                                    ?>

                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-stats -->
                    </div>
                </div>
            </div>


        </div>
        <!-- .content -->

        <div class="clearfix"></div>

        <footer class="site-footer">
            <div class="footer-inner bg-white">
                <div class="row">
                    <div class="col-sm-6">
                        Copyright &copy; 2018 Ela Admin
                    </div>
                    <div class="col-sm-6 text-right">
                        Designed by <a href="https://colorlib.com">Colorlib</a>
                    </div>
                </div>
            </div>
        </footer>

    </div>
    <!-- /#right-panel -->

    <!-- Right Panel -->


    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>


</body>

</html>
