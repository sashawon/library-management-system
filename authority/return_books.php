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
                            <li><i class="fa fa-home" aria-hidden="true"></i><a href="#">Return Books</a></li>
                        </ul>
                    </div>
                </div>
                <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
                <div class="row animated fadeInUp">
                    <div class="col-sm-12">
                    <h4 class="section-subtitle"><b>Return Books</b></h4>
                    <div class="panel">
                        <div class="panel-content">
                            <div class="table-responsive">
                                <table id="basic-table" class="data-table table table-striped table-bordered nowrap table-hover" cellspacing="0" width="100%">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Student ID</th>
                                        <th>Phone</th>
                                        <th>Book Image</th>
                                        <th>Book Name</th>
                                        <th>Book Issue Date</th>
                                        <th>Return Book</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            $sql = "SELECT issue_books.id, issue_books.book_id, issue_books.book_issue_date, students.fname, students.lname, students.sid, students.phone, books.book_name, books.book_image FROM issue_books INNER JOIN students ON students.sid = issue_books.sid INNER JOIN books ON books.book_id = issue_books.book_id WHERE issue_books.book_return_date=''";
                                            $query=mysqli_query ($con, $sql);
                                            
                                            while ($row=mysqli_fetch_assoc($query)) {
                                                ?>
                                                <tr>
                                                    <td><?= ucwords($row['fname'].' '.$row['lname']) ?></td>
                                                    <td><?= $row['sid'] ?></td>
                                                    <td><?= $row['phone'] ?></td>
                                                    <td><img style="width: 40px;" src="../librarian/<?= $row['book_image'] ?>" alt="photo"></td>
                                                    <td><?= $row['book_name'] ?></td>
                                                    <td><?= $row['book_issue_date'] ?></td>
                                                    <td><a href="return_books.php?id=<?= $row['id'] ?>&book_id=<?= $row['book_id'] ?>" class="btn btn-success">Return</a></td>
                                                </tr>
                                                <?php 
                                            }
                                         ?>                                    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
            </div>

            <?php 
            if (isset($_GET['id'])) {
                $id=$_GET['id'];
                $book_id=$_GET['book_id'];
                $date=date('Y-m-d');

                $sql = "UPDATE `issue_books` SET `book_return_date`='$date' WHERE `id`='$id'";
                $query=mysqli_query ($con, $sql);

            if ($query==1) {
                mysqli_query ($con, "UPDATE `books` SET `available_qty`=`available_qty`+1 WHERE `id`='$book_id'");
                ?>
                <script>
                    alert('Book Return Successfully!');
                    javascript:history.go(-1);
                </script>
                <?php
            } else {
                ?>
                <script>
                    alert('Book Return Failed!');
                </script>
                <?php
            }

            }
             ?>
<?php include('footer.php'); ?>


