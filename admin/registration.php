<?php
session_start();
if (isset($_SESSION['username'])) {
    ?>
    <script>
        window.location.href = "home.php";
    </script>
    <?php
}
?>
<!doctype html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9" lang=""> <![endif]-->
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
    <?php

    require "include/Database.php";

    $db = new Database();
    ?>
</head>

<body class="bg-light">


<div class="sufee-login d-flex align-content-center flex-wrap">
    <div class="container">
        <div class="login-content">

            <div class="login-logo">
                <a href="index.php">
                    <img class="align-content" src="images/logo.png" alt="">
                </a>
            </div>

            <div class="login-form shadow">
                <form action="regidata.php" method="post">
                    <div class="form-group">
                        <label>Name of HOD</label>
                        <input type="text" required class="form-control" placeholder="Full name" name="name">
                    </div>

                    <div class="form-group">
                        <label>Email address</label>
                        <input type="email" required class="form-control" placeholder="Email" name="email">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" required class="form-control" placeholder="Password" name="password">
                    </div>
                    <div class="form-group">
                        <label>Mobile Number</label>
                        <input type="text" required class="form-control" placeholder="Contact Number" name="mobile">
                    </div>
                    <div class="form-group">
                        <label>Department</label>
                        <select name="department" class="form-control">

                            <?php

                            $selectDepartment = "SELECT * FROM `department`";

                            $result = mysqli_query($db->db_connect(), $selectDepartment);

                            while ($row = mysqli_fetch_row($result)) {
                                ?>
                                <option value="<?php echo $row[0]; ?>"><?php echo $row[1]; ?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>

                    <button type="submit" name="sbmt" class="btn btn-success btn-flat m-b-30 m-t-30">Register</button>

                </form>
            </div>
        </div>
    </div>
</div>


<script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/plugins.js"></script>
<script src="assets/js/main.js"></script>


</body>

</html>
