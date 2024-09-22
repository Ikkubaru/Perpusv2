<div class="page-wrapper">
            <!-- ============================================================== -->
             <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                        <div class="card card-hover">
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-md-flex align-items-center">
                                    <div>
                                        <h1 class="card-title">Welcome</h1>
                                        <a href="<?= base_url('Admin/Users/userAdd') ?>" class="btn btn-info">Add User</a>
                                    </div>
                                </div>
                                <div class="row">
                                    <!-- column -->
                                    <div class="col-lg-12">
                                    <div class="card-body">
                                <div class="table-responsive">
                                    <div id="zero_config_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                                        <div class="row"><div class="col-sm-12 col-md-6">
                                            <div class="dataTables_length" id="zero_config_length">

                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <div id="zero_config_filter" class="dataTables_filter">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table id="zero_config" class="table table-striped table-bordered dataTable" role="grid" aria-describedby="zero_config_info">
                                        <thead>
                                            <tr role="row">
                                                <th><b>Num</b></th>
                                                <th><b>Username</b></th>
                                                <th><b>Full Name</b></th>
                                                <th><b>Address</b></th>
                                                <th><b>Phone Number</b></th>
                                                <th><b>Level</b></th>
                                                <th><b>Action</b></th>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $num =1; 
                                            foreach($users as $user){ ?>
                                            <tr role="row" class="odd">
                                                <td><?= $num++ ?></td>
                                                <td><?= $user['username'] ?></td>
                                                <td><?= $user['fullName'] ?></td>
                                                <td><?= $user['address'] ?></td>
                                                <td><?= $user['phone'] ?></td>
                                                <td><?= $user['level'] ?></td>
                                                <td>
                                                    <a href="<?= base_url('admin/users/userDelete/'.$user['userID']) ?>" class="btn btn-danger" onClick="confirm('Yakin Ingin Menghapus?')">Delete</a>
                                                    <a href="<?= base_url('admin/users/userEdit/'.$user['userID']) ?>" class="btn btn-warning">Edit</a>
                                                </td>
                                            </tr>
                                                <?php }?>
                                        </tbody>
                                </div>
                            </div>
                                    </div>
                                    <!-- column -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->