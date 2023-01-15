<?php include('session.php'); ?>
<?php include('head.php'); ?>

<body>
    <div id="wrapper">

        <!-- Navigation -->
        <?php include('side_bar.php'); ?>

        <!-- Page Content -->
        <div id="page-wrapper">
            <hr>
            <div class="row">


                <a href="activate_accounts.php" class="btn btn-danger btn-outline pull-right" style="margin-right:12px;" name="go"><i>Activate Voter Accounts</i> </a>
                <a href="deactivate_accounts.php" class="btn btn-danger btn-outline pull-right" style="margin-right:12px;" name="go"><i>Deactivate Voter Accounts</i> </a>

                <br />
                <br />

                <hr />

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="modal-title" id="myModalLabel">
                            <div class="panel panel-primary">
                                <div class="panel-heading"><i class="fa fa-users"></i>
                                    Eligible Voter List
                                </div>
                            </div>
                        </h4>
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <th>Voter ID</th>
                                    <th>Names</th>
                                    <th>Gender</th>
                                    <th>Age</th>
                                    <th>Account</th>
                                    <th>Status</th>
                                    <th>Date Registered</th>

                                </thead>
                                <tbody>
                                    <?php
                                    require 'dbcon.php';

                                    $query = $conn->query("SELECT * FROM voters ORDER BY voters_id ASC");
                                    while ($row1 = $query->fetch_array()) {
                                        $voters_id = $row1['voters_id'];
                                    ?>

                                        <tr>
                                            <td><?php echo $row1['id_number']; ?></td>
                                            <td><?php echo $row1['firstname'] . " " . $row1['lastname']; ?></td>
                                            <td><?php echo $row1['gender']; ?></td>
                                            <td><?php echo $row1['Age']; ?></td>
                                            <td><?php echo $row1['account']; ?></td>
                                            <td><?php echo $row1['status']; ?></td>
                                            <td><?php echo $row1['date']; ?></td>
                                        </tr>


                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->

                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->

            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->



    </div>
    <!-- /#wrapper -->

    <?php include('script.php'); ?>

</body>

</html>