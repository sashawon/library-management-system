<?php include('header.php'); ?>

            <!-- CONTENT -->
            <!-- ========================================================= -->
            <div class="content">
<?php 
if (isset($_POST['issue_book'])) {
    $sid=$_POST['student_id'];
    $sname=$_POST['name'];
    $book_id=$_POST['book_id'];
    $book_issue_date=$_POST['book_issue_date'];

    $sql="INSERT INTO `issue_books`(`sid`, `sname`, `book_id`, `book_issue_date`) VALUES ('$sid','$sname','$book_id','$book_issue_date')";
    $query=mysqli_query ($con, $sql);
    if ($query==1) {
        mysqli_query ($con, "UPDATE `books` SET `available_qty`=`available_qty`-1 WHERE `id`='$book_id'");
        ?>
            <script>
                alert("Book Issued Successfully");
            </script>
        <?php
    } else {
        ?>
            <script>
                alert("Book Not Issued Successfully");
            </script>
        <?php
    }
}
?>
                <!-- content HEADER -->
                <!-- ========================================================= -->
                <div class="content-header">
                    <!-- leftside content header -->
                    <div class="leftside-content-header">
                        <ul class="breadcrumbs">
                            <li><i class="fa fa-home" aria-hidden="true"></i><a href="#">Issue Books</a></li>
                        </ul>
                    </div>
                </div>
                <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
                <div class="row animated fadeInUp">
                    <div class="panel">
                        <div class="panel-content">
                            <div class="row">
                                <div class="col-md-6 col-md-offset-4">
                                    <form class="form-inline" method="POST" action="">
                                        <select class="form-control" name="student_id" required>
                                            <option value="">Select</option>
                                            <?php 
                                                $sql = "SELECT * FROM students WHERE status='1'";
                                                $query=mysqli_query ($con, $sql);
                                                while ($row=mysqli_fetch_assoc($query)) {
                                                    ?> 
                                                        <option value="<?= $row['sid'] ?>"><?= ucwords($row['fname'].' '.$row['lname'].' - ('. $row['sid'].') ')?></option>
                                                    <?php
                                                }
                                            ?>
                                        </select>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary" name="search">Search</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <?php 
                            if (isset($_POST['search'])) {
                                $id = $_POST['student_id'];
                                $sql = "SELECT * FROM students WHERE sid='$id' AND status='1'";
                                $query=mysqli_query ($con, $sql);
                                $row=mysqli_fetch_assoc($query);
                                //print_r($row);
                             ?>
                                <div class="panel-content container">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <form class="form-horizontal form-stripe" method="POST" action="">
                                                <div class="form-group">
                                                    <label for="name" class="col-sm-2 control-label">Student Name</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" name="name" value="<?= ucwords($row['fname'].' '.$row['lname'])?>" readonly>
                                                        <input type="hidden" class="form-control" name="student_id" value="<?=$row['sid']?>">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="name" class="col-sm-2 control-label">Book Name</label>
                                                    <div class="col-sm-9">
                                                        <select class="form-control" name="book_id" required>
                                                            <option value="">Select</option>
                                                            <?php 
                                                                $sql = "SELECT * FROM books WHERE available_qty>'0'";
                                                                $query=mysqli_query ($con, $sql);
                                                                while ($row=mysqli_fetch_assoc($query)) {
                                                                    ?> 
                                                                        <option value="<?= $row['id'] ?>"><?= $row['book_name']?></option>
                                                                    <?php
                                                                }
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="name" class="col-sm-2 control-label">Book Issue Date</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" name="book_issue_date" value="<?= date('d-m-Y') ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-sm-offset-2 col-sm-10">
                                                        <button type="submit" name="issue_book" class="btn btn-primary">Save Issue Book</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            <?php 
                            }
                             ?>
                        </div>
                    </div>
                </div>
                <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
            </div>
<?php include('footer.php'); ?>