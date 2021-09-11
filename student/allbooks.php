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
            <div class="animated fadeInUp">
                <!--SEARCH-->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel">
                            <div class="panel-content">
                                <form method="POST" action="">
                                    <div class="row pt-md">
                                        <div class="form-group col-sm-9 col-lg-10">
                                                <span class="input-with-icon">
                                            <input type="text" class="form-control" name="result" id="lefticon" placeholder="Search" required="">
                                            <i class="fa fa-search"></i>
                                        </span>
                                        </div>
                                        <div class="form-group col-sm-3  col-lg-2 ">
                                            <button type="submit" name="search_books" class="btn btn-primary btn-block">Search</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
                <!--RESULTS-->
                <div class="row">
                <?php 
                    if (isset($_POST['search_books'])) {
                        $result = $_POST['result'];
                         ?>
                    <div class="col-sm-12">
                        <div class="panel">
                            <div class="panel-content">
                                <div class="search-results-grid">
                                    <div class="row">
                                        <?php 
                                            $i=0;
                                            $sql = "SELECT * FROM `books` WHERE `book_name` LIKE '%$result%'";
                                            $query=mysqli_query ($con, $sql);
                                            $data=mysqli_num_rows($query);

                                            if ($data>0) {
                                                while ($row=mysqli_fetch_assoc($query)) {
                                                $i++;
                                                ?>

                                        <div class="col-sm-6 col-md-3">
                                            <a href="#"><img alt="photo" src="../librarian/<?= $row['book_image'] ?>" class="img-responsive"></a>
                                            <div class="search-item-content">
                                                <span class="highlight"><?= $i ?>. <?= ucwords($row['book_name']) ?></span><br>
                                                <span class="text"><b>Book ID: <?= $row['book_id'] ?></b></span><br>
                                                <span class="text"><b>Author: <?= $row['book_author_name'] ?>   </b></span><br>
                                                <span class="text"><b>Publication: <?= $row['book_publication_name'] ?></b></span><br>
                                                <span class="text"><b>Available: <?= $row['available_qty'] ?></span><br></b><br><br>
                                            </div>
                                        </div>
                                        <?php 
                                            }
                                            } else {
                                                echo "<h1>No Books Found!</h1>";
                                            }
                                            
                                         ?> 

                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                        <?php 
                    } else{
                        ?>
                    <div class="col-sm-12">
                        <div class="panel">
                            <div class="panel-content">
                                <div class="search-results-grid">
                                    <div class="row">
                                        <?php 
                                            $i=0;
                                            $sql = "SELECT * FROM `books`";
                                            $query=mysqli_query ($con, $sql);
                                            
                                            while ($row=mysqli_fetch_assoc($query)) {
                                                $i++;
                                                ?>

                                        <div class="col-sm-6 col-md-3">
                                            <a href="#"><img alt="photo" src="../librarian/<?= $row['book_image'] ?>" class="img-responsive"></a>
                                            <div class="search-item-content">
                                                <span class="highlight"><?= $i ?>. <?= ucwords($row['book_name']) ?></span><br>
                                                <span class="text"><b>Book ID: <?= $row['book_id'] ?></b></span><br>
                                                <span class="text"><b>Author: <?= $row['book_author_name'] ?>   </b></span><br>
                                                <span class="text"><b>Publication: <?= $row['book_publication_name'] ?></b></span><br>
                                                <span class="text"><b>Available: <?= $row['available_qty'] ?></span><br></b><br><br>
                                            </div>
                                        </div>
                                        <?php 
                                            }
                                         ?> 

                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                        <?php 
                    }
                 ?>
                </div>
            </div>

                <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
            </div>
<?php include('footer.php'); ?>