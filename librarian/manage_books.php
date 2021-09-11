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
                            <li><i class="fa fa-home" aria-hidden="true"></i><a href="#">Manage Books</a></li>
                        </ul>
                    </div>
                </div>
                <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
                <div class="row animated fadeInUp">
                    <div class="col-sm-12">
                    <h4 class="section-subtitle"><b>All Students</b></h4>
                    <div class="panel">
                        <div class="panel-content">
                            <div class="table-responsive">
                                <table id="basic-table" class="data-table table table-striped table-bordered nowrap table-hover" cellspacing="0" width="100%">
                                    <thead>
                                    <tr>
                                        <th>Book ID</th>
                                        <th>Book Name</th>
                                        <th>Image</th>
                                        <th>Author Name</th>
                                        <th>Publication Name</th>
                                        <th>Purchase Date</th>
                                        <th>Book Price</th>
                                        <th>Book Quantity</th>
                                        <th>Available Quantity</th>
                                        <th>Added By</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            $sql = "SELECT * FROM books";
                                            $query=mysqli_query ($con, $sql);
                                            
                                            while ($row=mysqli_fetch_assoc($query)) {
                                                ?>
                                                <tr>
                                                    <td><?= $row['book_id'] ?></td>
                                                    <td><?= $row['book_name'] ?></td>
                                                    <td><img style="width: 40px;" src="<?= $row['book_image'] ?>" alt="photo"></td>
                                                    <td><?= $row['book_author_name'] ?></td>
                                                    <td><?= $row['book_publication_name'] ?></td>
                                                    <td><?= $row['book_purchase_date'] ?></td>
                                                    <td><?= $row['book_price'] ?></td>
                                                    <td><?= $row['book_qty'] ?></td>
                                                    <td><?= $row['available_qty'] ?></td>
                                                    <td><?= $row['libraian_username'] ?></td>
                                                    <td><a class="btn btn-info" href="javascript:avoid(0)" data-toggle="modal" data-target="#book-<?= $row['id'] ?>"><i class="fa fa-eye"></i></a>
                                                            <a class="btn btn-success" data-toggle="modal" data-target="#book-update-<?= $row['id'] ?>"><i class="fa fa-pencil"></i></a>
                                                            <a class="btn btn-danger" href="delete.php?book_delete=<?= base64_encode($row['id']) ?>"><i class="fa fa-trash-o"></i></a></td>
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
$sql = "SELECT * FROM books";
$query=mysqli_query ($con, $sql);

while ($row=mysqli_fetch_assoc($query)) {
    ?>
                <!-- Modal -->
                <div class="modal fade" id="book-<?= $row['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="modal-info-label">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header state modal-info">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="modal-info-label"><i class="fa fa-book"></i>Book Info</h4>
                            </div>
                            <div class="modal-body">
                                <table class="table table-bordered">
                                    <tr>
                                        <th>Book ID</th>
                                        <td><?= $row['book_id'] ?></td>
                                    </tr>
                                    <tr>
                                        <th>Book Name</th>
                                        <td><?= $row['book_name'] ?></td>
                                    </tr>
                                    <tr>
                                        <th>Image</th>
                                        <td><img style="width: 40px;" src="<?= $row['book_image'] ?>" alt="photo"></td>
                                    </tr>
                                    <tr>
                                        <th>Author Name</th>
                                        <td><?= $row['book_author_name'] ?></td>
                                    </tr>
                                    <tr>
                                        <th>Publication Name</th>
                                        <td><?= $row['book_publication_name'] ?></td>
                                    </tr>
                                    <tr>
                                        <th>Purchase Date</th>
                                        <td><?= $row['book_purchase_date'] ?></td>
                                    </tr>
                                    <tr>
                                        <th>Book Price</th>
                                        <td><?= $row['book_price'] ?></td>
                                    </tr>
                                    <tr>
                                        <th>Book Quantity</th>
                                        <td><?= $row['book_qty'] ?></td>
                                    </tr>
                                    <tr>
                                        <th>Available Quantity</th>
                                        <td><?= $row['available_qty'] ?></td>
                                    </tr>
                                    <tr>
                                        <th>Added By</th>
                                        <td><?= $row['libraian_username'] ?></td>
                                    </tr>
                                    <tr>
                                    </tr>
                                </table>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
 <?php 
    }
 ?>  


<?php 
$sql = "SELECT * FROM books";
$query=mysqli_query ($con, $sql);

while ($row=mysqli_fetch_assoc($query)) {
        $id=$row['id'];
        $book_info=mysqli_query($con,"SELECT * FROM books WHERE id='$id'");
        $book_info_row=mysqli_fetch_assoc($book_info);
        //print_r($book_info_row);
    ?>
                <!-- Modal -->
                <div class="modal fade" id="book-update-<?= $row['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="modal-info-label">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header state modal-info">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="modal-info-label"><i class="fa fa-book"></i>Update Book Info</h4>
                            </div>
                            <div class="modal-body">
                                <div class="panel">
                                    <div class="panel-content">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <form method="POST" action="" enctype="multipart/form-data">
                                                    <div class="form-group">
                                                        <label for="book id">Book ID</label>
                                                            <input type="hidden" class="form-control" name="id" value="<?= $book_info_row['id'] ?>">
                                                            <input type="text" class="form-control" placeholder="Book ID" name="book_id" value="<?= $book_info_row['book_id'] ?>" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="Book Name">Book Name</label>
                                                            <input type="text" class="form-control" placeholder="Book Name" name="book_name" value="<?= $book_info_row['book_name'] ?>" required>
                                                    </div>
                                                <!--
                                                    <div class="form-group">
                                                        <label for="Book Image">Book Image</label>
                                                            <input type="file" class="form-control" placeholder="Book Image" name="image">
                                                            <img src="<?= $book_info_row['book_image'] ?>" style="width: 70px;" alt="Book photo">
                                                    </div>
                                                -->
                                                    <div class="form-group">
                                                        <label for="Author Name">Author Name</label>
                                                            <input type="text" class="form-control" placeholder="Author Name" name="book_author_name" value="<?= $book_info_row['book_author_name'] ?>" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="Publication Name">Publication Name</label>
                                                            <input type="text" class="form-control" placeholder="Publication Name" name="book_publication_name" value="<?= $book_info_row['book_publication_name'] ?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="Purchase Date">Purchase Date</label>
                                                            <input type="text" class="form-control" placeholder="2020-01-01" name="book_purchase_date" value="<?= $book_info_row['book_purchase_date'] ?>" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="Book Price">Book Price</label>
                                                            <input type="text" class="form-control" placeholder="Book Price" name="book_price" value="<?= $book_info_row['book_price'] ?>" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="Book Quantity">Book Quantity</label>
                                                            <input type="number" class="form-control" placeholder="Book Quantity" name="book_qty" value="<?= $book_info_row['book_qty'] ?>" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="Available Quantity">Available Quantity</label>
                                                            <input type="number" class="form-control" placeholder="Available Quantity" name="available_qty" value="<?= $book_info_row['available_qty'] ?>" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <button type="submit" name="update-book" class="btn btn-primary"> <i class="fa fa-save"> </i>Update</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
 <?php 
    }


if (isset($_POST['update-book'])) {
    $id=$_POST['id'];
    $book_id=$_POST['book_id'];
    $book_name=$_POST['book_name'];
    //$image = $_FILES['image'];
    $book_author_name=$_POST['book_author_name'];
    $book_publication_name=$_POST['book_publication_name'];
    $book_purchase_date=$_POST['book_purchase_date'];
    $book_price=$_POST['book_price'];
    $book_qty=$_POST['book_qty'];
    $available_qty=$_POST['available_qty'];
    /*
    $imagename = $image['name'];
    $imagepath = $image['tmp_name'];
    $imageerror = $image['error'];

    if ($imageerror==0) {
    $destfile = 'upload/'.$imagename;
    move_uploaded_file($imagepath, $destfile);
    }
    */
    $sql= "UPDATE `books` SET `book_id`='$book_id',`book_name`='$book_name',`book_author_name`='$book_author_name',`book_publication_name`='$book_publication_name',`book_purchase_date`='$book_purchase_date',`book_price`='$book_price',`book_qty`='$book_qty',`available_qty`='$available_qty' WHERE `id`='$id'";

    $query= mysqli_query($con,$sql);

    /*if($query == 1){
      header('location:manage_books.php');
      //"<META HTTP-EQUIV='Refresh' CONTENT='0; URL= http://localhost/LMS/manage_books.php'>";
      }else{
      echo "<h3 style='color:red;'><center>Sorry! Try again</center></h3>";
      }*/

      if ($query==1) {
        ?>
            <script>
                alert("Book Updateed Successfully");
                javascript:history.go(-1);
            </script>
        <?php
    } else {
        ?>
            <script>
                alert("Book Not Updateed");
            </script>
        <?php
    }

}

 ?>  


<?php include('footer.php'); ?>