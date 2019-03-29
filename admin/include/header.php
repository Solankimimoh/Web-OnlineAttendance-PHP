
     <!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="index.php"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                    </li>
                    <li class="menu-title">MENU</li>
                    <!-- /.menu-title -->
                    <!--                    start my menu-->

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-home"></i>Faculty</a>
                        <ul class="sub-menu children dropdown-menu">

                            <?php 
                            if($_SESSION['userType']==1)
                            {
                                ?>
                            <li><i class="fa fa-plus"></i><a href="addfaculty.php">Add Faculty</a></li>
                            <?php
                            }
                            ?>
                            <li><i class="fa fa-info"></i><a href="viewfaculty.php">View Faculty</a></li>
                        </ul>
                    </li>

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-home"></i>Student</a>
                        <ul class="sub-menu children dropdown-menu">
                            <?php 
                            if($_SESSION['userType']==1)
                            {
                                ?>
                            <li><i class="fa fa-plus"></i><a href="addstudent.php">Add Student</a></li>
                            <?php 
                            }
                                ?>
                            <li><i class="fa fa-info"></i><a href="viewstudent.php">View Student</a></li>

                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-home"></i>Attendance</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-plus"></i><a href="selectdepartment.php">Add Attendance</a></li>

                            <li><i class="fa fa-info"></i><a href="viewattendance.php">View Attendance</a></li>

                        </ul>
                    </li>


                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-home"></i>Leaving Application</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-info"></i><a href="viewleavingapp.php">View Leaving App</a></li>
                        </ul>
                    </li>
                    
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-home"></i>TIME TABLE</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-info"></i><a href="addtimetable.php">ADD TIME TABLE</a></li> <li><i class="fa fa-info"></i><a href="viewtimetable.php">View TIME TABLE</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
    </aside>
    <!-- /#left-panel -->
    <!-- Left Panel -->
