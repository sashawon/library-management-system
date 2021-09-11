<?php
    include('database.php');
    session_start();     
    //error_reporting(0);
    
    $user = $_SESSION['fname'];
    if($user == true){

    }else{
      header('location:login.php');
    }
?>

<!doctype html>
<html lang="en" class="fixed left-sidebar-top">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>LMS</title>
    <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
    <link rel="icon" type="image/png" sizes="192x192" href="favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <!--load progress bar-->
    <script src="vendor/pace/pace.min.js"></script>
    <link href="vendor/pace/pace-theme-minimal.css" rel="stylesheet" />

    <!--BASIC css-->
    <!-- ========================================================= -->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="vendor/animate.css/animate.css">
    <!--SECTION css-->
    <!-- ========================================================= -->
    <!--Notification msj-->
    <link rel="stylesheet" href="vendor/toastr/toastr.min.css">
    <!--Magnific popup-->
    <link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.css">
    <!--dataTable-->
    <link rel="stylesheet" href="vendor/data-table/media/css/dataTables.bootstrap.min.css">
    <!--TEMPLATE css-->
    <!-- ========================================================= -->
    <link rel="stylesheet" href="stylesheets/css/style.css">


</head>

<body>
    <div class="wrap">
        <!-- page HEADER -->
        <!-- ========================================================= -->
        <div class="page-header">
            <!-- LEFTSIDE header -->
            <div class="leftside-header">
                <div class="logo">
                    <a href="index.php" class="on-click">
                        <h3>LMS</h3>
                    </a>
                </div>
                <div id="menu-toggle" class="visible-xs toggle-left-sidebar" data-toggle-class="left-sidebar-open" data-target="html">
                    <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
                </div>
            </div>
            <!-- RIGHTSIDE header -->
            <div class="rightside-header">
                <div class="header-middle"></div>
                <!--NOCITE HEADERBOX-->
                <div class="header-section hidden-xs" id="notice-headerbox">
                    <!--messages-->
                    <div class="notice" id="messages-notice">
                        <i class="fa fa-comments-o" aria-hidden="true"><span class="badge badge-xs badge-top-right x-danger"><i class="fa fa-exclamation"></i></span>
                        </i>
                        <div class="dropdown-box basic">
                            <div class="drop-header ">
                                <h3><i class="fa fa-comments" aria-hidden="true"></i> Messages</h3>
                                <span class="badge x-danger b-rounded">120</span>
                            </div>
                            <div class="drop-content">
                                <div class="widget-list list-left-element">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <div class="left-element"><img alt="profile photo" src="images/avatar/avatar_1.jpg" /></div>
                                                <div class="text">
                                                    <span class="title">John Doe</span>
                                                    <span class="subtitle">hello world</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="left-element"><img alt="profile photo" src="images/avatar/avatar_2.jpg" /></div>
                                                <div class="text">
                                                    <span class="title">Alice Smith</span>
                                                    <span class="subtitle">hello world</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="left-element"><img alt="profile photo" src="images/avatar/avatar_3.jpg" /></div>
                                                <div class="text">
                                                    <span class="title">Klaus Wolf</span>
                                                    <span class="subtitle">hello world</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="left-element"><img alt="profile photo" src="images/avatar/avatar_4.jpg" /></div>
                                                <div class="text">
                                                    <span class="title">Sun Li</span>
                                                    <span class="subtitle">hello world</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="left-element"><img alt="profile photo" src="images/avatar/avatar_5.jpg" /></div>
                                                <div class="text">
                                                    <span class="title">Sonia Valera</span>
                                                    <span class="subtitle">hello world</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="drop-footer">
                                <a>See all messages</a>
                            </div>
                        </div>
                    </div>
                    <!--alerts notices-->
                    <div class="notice" id="alerts-notice">
                        <i class="fa fa-bell-o" aria-hidden="true"><span class="badge badge-xs badge-top-right x-danger">7</span></i>

                        <div class="dropdown-box basic">
                            <div class="drop-header">
                                <h3><i class="fa fa-bell-o" aria-hidden="true"></i> Notifications</h3>
                                <span class="badge x-danger b-rounded">7</span>

                            </div>
                            <div class="drop-content">
                                <div class="widget-list list-left-element list-sm">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <div class="left-element"><i class="fa fa-warning color-warning"></i></div>
                                                <div class="text">
                                                    <span class="title">8 Bugs</span>
                                                    <span class="subtitle">reported today</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="left-element"><i class="fa fa-flag color-danger"></i></div>
                                                <div class="text">
                                                    <span class="title">Error</span>
                                                    <span class="subtitle">sevidor C down</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="left-element"><i class="fa fa-cog color-dark"></i></div>
                                                <div class="text">
                                                    <span class="title">New Configuration</span>
                                                    <span class="subtitle"></span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="left-element"><i class="fa fa-tasks color-success"></i></div>
                                                <div class="text">
                                                    <span class="title">14 Task</span>
                                                    <span class="subtitle">completed</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="left-element"><i class="fa fa-envelope color-primary"></i></div>
                                                <div class="text">
                                                    <span class="title">21 Menssage</span>
                                                    <span class="subtitle"> (see more)</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="drop-footer">
                                <a>See all notifications</a>
                            </div>
                        </div>
                    </div>
                    <div class="header-separator"></div>
                </div>
                <!--USER HEADERBOX -->
                <div class="header-section" id="user-headerbox">
                    <div class="user-header-wrap">
                        <div class="user-photo">
                            <img alt="profile photo" src="images/avatar/avatar_user.jpg" />
                        </div>
                        <div class="user-info">
                            <span class="user-name"><?php echo 'welcome '.$_SESSION['fname']; ?></span>
                            <span class="user-profile">
                                <?php $role=$_SESSION['role'];
                                if ($role==1) {
                                    echo 'Admin';
                                } else if ($role==2) {
                                    echo 'Moderator';
                                } else {
                                    echo 'Member';
                                }
                                 ?>
                            </span>
                        </div>
                        <i class="fa fa-plus icon-open" aria-hidden="true"></i>
                        <i class="fa fa-minus icon-close" aria-hidden="true"></i>
                    </div>
                    <div class="user-options dropdown-box">
                        <div class="drop-content basic">
                            <ul>
                                <li> <a href="#"><i class="fa fa-user" aria-hidden="true"></i> Profile</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="header-separator"></div>
                <!--Log out -->
                <div class="header-section">
                    <a href="logout.php" data-toggle="tooltip" data-placement="left" title="Logout"><i class="fa fa-sign-out log-out" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
        <!-- page BODY -->
        <!-- ========================================================= -->
        <div class="page-body">
            <!-- LEFT SIDEBAR -->
            <!-- ========================================================= -->
            <div class="left-sidebar">
                <!-- left sidebar HEADER -->
                <div class="left-sidebar-header">
                    <div class="left-sidebar-title">Welcome</div>
                    <div class="left-sidebar-toggle c-hamburger c-hamburger--htla hidden-xs" data-toggle-class="left-sidebar-collapsed" data-target="html">
                        <span></span>
                    </div>
                </div>
                <!-- NAVIGATION -->
                <!-- ========================================================= -->
                <div id="left-nav" class="nano">
                    <div class="nano-content">
                        <nav>
                            <ul class="nav nav-left-lines" id="main-nav">
                                <!--HOME-->
                                <li class="active-item"><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i><span>Dashboard</span></a></li>
                                <!--STUDENT LIST-->
                                <li class="has-child-item close-item">
                                    <a><i class="fa fa-cubes" aria-hidden="true"></i><span>Students</span></a>
                                    <ul class="nav child-nav level-1">
                                        <?php $role=$_SESSION['role'];
                                        if ($role==1) { ?>
                                        <li><a href="register.php">Add Student</a></li>
                                    <?php } ?>
                                        <li><a href="student.php"><span>Students List</span></a></li>
                                    </ul>
                                </li>
                                <!--BOOKS LIST-->
                                <li class="has-child-item close-item">
                                    <a><i class="fa fa-cubes" aria-hidden="true"></i><span>Books</span></a>
                                    <ul class="nav child-nav level-1">
                                        <li><a href="add_books.php">Add Books</a></li>
                                        <li><a href="manage_books.php">Manage Books</a></li>
                                    </ul>
                                </li>
                                <?php $role=$_SESSION['role'];
                                        if ($role==1) { ?>
                                <!--ISSUE BOOK-->
                                <li><a href="issue_books.php"><i class="fa fa-users" aria-hidden="true"></i><span>Issue Books</span></a></li>
                                <!--RETURN BOOK-->
                                <li><a href="return_books.php"><i class="fa fa-users" aria-hidden="true"></i><span>Return Books</span></a></li>
                                <?php } ?>

                            </ul>
                        </nav>
                    </div>
                </div>
            </div>