<?php include('header.php'); ?>
            <!-- CONTENT -->
            <!-- ========================================================= -->
            <div class="content">
                <!-- content HEADER -->
                <!-- ========================================================= -->
                <div class="content-header">
                    <!-- leftside content header -->
                    <div class="leftside-content-header">
                        <ul class="breadcrumbs">
                            <li><i class="fa fa-home" aria-hidden="true"></i><a href="#">Dashboard</a></li>
                        </ul>
                    </div>
                </div>
                <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
                <div class="row animated fadeInUp">
                    <div class="col-sm-12">
                        <div class="row">
                            <!--Student Request-->
                            <?php
                                $query1 = "SELECT * FROM `students` WHERE `status`='0';";
                                $data1 = mysqli_query ($con, $query1);
                                $new_student = mysqli_num_rows($data1);
                                //echo $new_student;
                            ?>
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="panel widgetbox wbox-1 bg-lighter-2 color-light">
                                    <a href="student.php">
                                        <div class="panel-content">
                                            <h1 class="title color-darker-2"> <i class="fa fa-user"></i> <?= $new_student;?> </h1>
                                            <h4 class="subtitle color-darker-1">Student Request</h4>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <!--Total student-->
                            <?php
                                $query2 = "SELECT * FROM students WHERE `status`='1';";
                                $data2 = mysqli_query ($con, $query2);
                                $total_student = mysqli_num_rows($data2);
                                //echo $total_student;
                            ?>
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="panel widgetbox wbox-1 bg-lighter-2 color-light">
                                    <a href="student.php">
                                        <div class="panel-content">
                                            <h1 class="title color-darker-2"> <i class="fa fa-users"></i> <?= $total_student;?> </h1>
                                            <h4 class="subtitle color-darker-1">Total student</h4>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <!--Total librarian-->
                            <?php
                                $query3 = "SELECT * FROM librarian";
                                $data3 = mysqli_query ($con, $query3);
                                $total_librarian = mysqli_num_rows($data3);
                                //echo $total_librarian;
                            ?>
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="panel widgetbox wbox-1 bg-lighter-2 color-light">
                                    <a href="admin.php">
                                        <div class="panel-content">
                                            <h1 class="title color-darker-2"> <i class="fa fa-users"></i> <?= $total_librarian;?> </h1>
                                            <h4 class="subtitle color-darker-1">Total librarian</h4>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <!--Total Item of Books-->
                            <?php
                                $query4 = "SELECT * FROM books";
                                $data4 = mysqli_query ($con, $query4);
                                $total_books = mysqli_num_rows($data4);
                                //echo $total_books;
                            ?>
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="panel widgetbox wbox-1 bg-lighter-2 color-light">
                                    <a href="manage_books.php">
                                        <div class="panel-content">
                                            <h1 class="title color-darker-2"> <i class="fa fa-book"></i> <?= $total_books; ?> </h1>
                                            <h4 class="subtitle color-darker-1">Total Item of Books</h4>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <!--Total Books-->
                            <?php
                                $query5 = "SELECT SUM(`book_qty`) AS total FROM books";
                                $data5 = mysqli_query ($con, $query5);
                                $row5 = mysqli_fetch_array($data5);
                                //echo $row5;
                            ?>
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="panel widgetbox wbox-1 bg-lighter-2 color-light">
                                    <a href="manage_books.php">
                                        <div class="panel-content">
                                            <h1 class="title color-darker-2"> <i class="fa fa-book"></i> <?= $row5['total']; ?> </h1>
                                            <h4 class="subtitle color-darker-1">Total Books</h4>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <!--Total Available Books-->
                            <?php
                                $query6 = "SELECT SUM(`available_qty`) AS total FROM books";
                                $data6 = mysqli_query ($con, $query6);
                                $row6 = mysqli_fetch_array($data6);
                                //echo $row6;
                            ?>
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="panel widgetbox wbox-1 bg-lighter-2 color-light">
                                    <a href="manage_books.php">
                                        <div class="panel-content">
                                            <h1 class="title color-darker-2"> <i class="fa fa-book"></i> <?= $row6['total']; ?> </h1>
                                            <h4 class="subtitle color-darker-1">Total Available Books</h4>
                                        </div>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
            </div>
<?php include('footer.php'); ?>