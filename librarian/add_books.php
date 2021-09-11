<?php include('header.php'); ?>
             <!-- CONTENT -->
            <!-- ========================================================= -->
            <div class="content">
<?php 

if (isset($_POST['save_book'])) {
    $book_id=$_POST['book_id'];
    $book_name=$_POST['book_name'];
    $image = $_FILES['image'];
    $book_author_name=$_POST['book_author_name'];
    $book_publication_name=$_POST['book_publication_name'];
    $book_purchase_date=$_POST['book_purchase_date'];
    $book_price=$_POST['book_price'];
    $book_qty=$_POST['book_qty'];
    $available_qty=$_POST['available_qty'];
    $libraian_username=$_SESSION['fname'];

    $imagename = $image['name'];
    $imagepath = $image['tmp_name'];
    $imageerror = $image['error'];

    if ($imageerror==0) {
    $destfile = 'upload/'.$imagename;
    move_uploaded_file($imagepath, $destfile);
    }

    $sql= "INSERT INTO `books`(`book_id`, `book_name`, `book_image`, `book_author_name`, `book_publication_name`, `book_purchase_date`, `book_price`, `book_qty`, `available_qty`, `libraian_username`) VALUES ('$book_id','$book_name','$destfile','$book_author_name','$book_publication_name','$book_purchase_date','$book_price','$book_qty','$available_qty','$libraian_username')";

    $query= mysqli_query($con,$sql);

    if($query == 1){
      echo "<h3 style='color:green;'><center>Successfull</center></h3>";
      }else{
      echo "<h3 style='color:red;'><center>Sorry! Try again</center></h3>";
      }

}

?>
                <!-- content HEADER -->
                <!-- ========================================================= -->
                <div class="content-header">
                    <!-- leftside content header -->
                    <div class="leftside-content-header">
                        <ul class="breadcrumbs">
                            <li><i class="fa fa-home" aria-hidden="true"></i><a href="#">Add Books</a></li>
                        </ul>
                    </div>
                </div>
                <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
                <div class="row animated fadeInUp">
                <!--HORIZONTAL-->
                <div class="col-sm-6 col-sm-offset-3">
                    <div class="panel">
                        <div class="panel-content">
                            <div class="row">
                                <div class="col-md-12">
                                    <form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
                                        <h5 class="mb-lg">Add Book</h5>
                                        <div class="form-group">
                                            <label for="book id" class="col-sm-4 control-label">Book ID</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" placeholder="Book ID" name="book_id" value="<?= isset($book_id) ? $book_id:'' ?>" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="Book Name" class="col-sm-4 control-label">Book Name</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" placeholder="Book Name" name="book_name" value="<?= isset($book_name) ? $book_name:'' ?>" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="Book Image" class="col-sm-4 control-label">Book Image</label>
                                            <div class="col-sm-8">
                                                <input type="file" class="form-control" placeholder="Book Image" name="image" value="<?= isset($image) ? $image:'' ?>" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="Author Name" class="col-sm-4 control-label">Author Name</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" placeholder="Author Name" name="book_author_name" value="<?= isset($book_author_name) ? $book_author_name:'' ?>" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="Publication Name" class="col-sm-4 control-label">Publication Name</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" placeholder="Publication Name" name="book_publication_name" value="<?= isset($book_publication_name) ? $book_publication_name:'' ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="Purchase Date" class="col-sm-4 control-label">Purchase Date</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" placeholder="2020-01-01" name="book_purchase_date" value="<?= isset($book_purchase_date) ? $book_purchase_date:'' ?>" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="Book Price" class="col-sm-4 control-label">Book Price</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" placeholder="Book Price" name="book_price" value="<?= isset($book_price) ? $book_price:'' ?>" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="Book Quantity" class="col-sm-4 control-label">Book Quantity</label>
                                            <div class="col-sm-8">
                                                <input type="number" class="form-control" placeholder="Book Quantity" name="book_qty" value="<?= isset($book_qty) ? $book_qty:'' ?>" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="Available Quantity" class="col-sm-4 control-label">Available Quantity</label>
                                            <div class="col-sm-8">
                                                <input type="number" class="form-control" placeholder="Available Quantity" name="available_qty" value="<?= isset($available_qty) ? $available_qty:'' ?>" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-offset-5 col-sm-10">
                                                <input class="btn btn-primary" type="submit" name="save_book" value="Save Book">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
            </div>
<?php include('footer.php'); ?>