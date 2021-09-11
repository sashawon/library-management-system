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
                            <li><i class="fa fa-home" aria-hidden="true"></i><a href="#">Students</a></li>
                        </ul>
                    </div>
                </div>
                <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
                <div class="row animated fadeInUp">
                    <div class="col-sm-12">
                    <div class="pull-left"><h4 class="section-subtitle"><b>All Students</b></h4></div>
                    <div class="pull-right"><a href="print_all_student.php" target="_blank" class="btn btn-primary"><i class="fa fa-print">Print</i></a></div>
                    <div class="clearfix"></div>
                    <div class="panel">
                        <div class="panel-content">
                            <div class="table-responsive">
                                <table id="basic-table" class="data-table table table-striped table-bordered nowrap table-hover" cellspacing="0" width="100%">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Student ID</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Photo</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            $sql = "SELECT * FROM students";
                                            $query=mysqli_query ($con, $sql);
                                            
                                            while ($row=mysqli_fetch_assoc($query)) {
                                                ?>
                                                <tr>
                                                    <td><?= ucwords($row['fname'].' '.$row['lname']) ?></td>
                                                    <td><?= $row['sid'] ?></td>
                                                    <td><?= $row['email'] ?></td>
                                                    <td><?= $row['phone'] ?></td>
                                                    <td><img style="width: 40px;" src="../student/<?= $row['image'] ?>" alt="photo"></td>
                                                    <td><?= $row['status'] == 1 ? 'Active' : 'Inactive' ?></td>
                                                    <td>
                                                        <?php 
                                                        if ($row['status']==1) {
                                                             ?>
                                                                <a href="status_inactive.php?id=<?= base64_encode($row['id']) ?>" class="btn btn-primary"><i class="fa fa-arrow-up"></i></a>
                                                            <?php 
                                                        } else  {
                                                             ?>
                                                                <a href="status_active.php?id=<?= base64_encode($row['id']) ?>" class="btn btn-warning"><i class="fa fa-arrow-down"></i></a>
                                                            <?php 
                                                        }
                                                         ?>
                                                    </td>
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
<?php include('footer.php'); ?>