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



            <div class="row">

                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Custom Table</strong>
                        </div>
                        <div class="table-stats order-table ov-h">
                            <table class="table ">
                                <thead>
                                    <tr>
                                        
                                        <th class="avatar">PRODUCT</th>
                                      
                                        <th>Name</th>
                                        <th>PRICE</th>
                                        <th>UPDATE</th>
                                        <th>DELETE</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="avatar">
                                            <div class="round-img">
                                                <a href="#"><img class="rounded-circle" src="images/avatar/1.jpg" alt=""></a>
                                            </div>
                                        </td>
                                        <td> <span class="name">Louis Stanley</span> </td>
                                        <td> <span class="product">150</span> </td>
                                        <td>
                                            <span class="badge badge-complete">UPDATE</span>
                                            
                                        </td>
                                        <td>
                                            <span class="badge badge-complete">DELETE</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="avatar">
                                            <div class="round-img">
                                                <a href="#"><img class="rounded-circle" src="images/avatar/2.jpg" alt=""></a>
                                            </div>
                                        </td>

                                        <td> <span class="name">Gregory Dixon</span> </td>
                                        <td> <span class="product">200</span> </td>
                                        <td>
                                            
                                            <span class="badge badge-complete">UPDATE</span>
                                            
                                        </td>
                                        <td>
                                            <span class="badge badge-complete">DELETE</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="avatar">
                                            <div class="round-img">
                                                <a href="#"><img class="rounded-circle" src="images/avatar/3.jpg" alt=""></a>
                                            </div>
                                        </td>
                                        <td> <span class="name">Catherine Dixon</span> </td>
                                        <td> <span class="product">170</span> </td>
                                        <td>
                                        
                                        
                                            <span class="badge badge-complete">UPDATE</span>
                                        
                                        </td>
                                        <td>
                                            <span class="badge badge-complete">DELETE</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="avatar">
                                            <div class="round-img">
                                                <a href="#"><img class="rounded-circle" src="images/avatar/4.jpg" alt=""></a>
                                            </div>
                                        </td>
                                        <td> <span class="name">Mary Silva</span> </td>
                                        <td> <span class="product">190</span> </td>
                                        <td>
                                        
                                        
                                            <span class="badge badge-complete">UPDATE</span>
                                        
                                        </td>
                                        <td>
                                            <span class="badge badge-complete">DELETE</span>
                                        </td>
                                    </tr>
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
