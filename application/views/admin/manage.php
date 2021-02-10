<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12 d-flex justify-content-between mb-3">
            <h1 class="h3 text-gray-800"><?= $title; ?></h1>

            <a href="" class="btn btn-primary" data-toggle="modal" data-target="#newAccountModal">Add New Account</a>
        </div>


        <div class="col-lg-12">
            <?= $this->session->flashdata('message'); ?>
            <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
            <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
            <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
            <div class="table-responsive">
                <table class="table table-hover table-striped" id="dataTable">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Role</th>
                            <th scope="col">Date Created</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($athlete as $a) : ?>
                            <tr>
                                <th scope="row"><?= $i; ?></th>
                                <td><?= $a['name']; ?></td>
                                <td><?= $a['email']; ?></td>
                                <td><?= $a['role']; ?></td>
                                <td><?= date("d-m-Y, h:i:s", $a['date_created']); ?></td>
                                <td>
                                    <a href="#" class="badge badge-success">Detail</a>
                                    <a href="#" class="badge badge-warning">Change Password / Role</a>
                                    <!-- <a href="<?= base_url('admin/delete'); ?>" data-toggle="modal" data-target="#deleteModal" class="badge badge-danger">Delete</a> -->
                                    <a href="<?= base_url('admin/delete/') . $a['id']; ?>" class="badge badge-danger">Delete</a>
                                </td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


<!-- Modal Add Account -->
<div class="modal fade" id="newAccountModal" tabindex="-1" role="dialog" aria-labelledby="newMenuModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newMenuModalLabel">Add New Account</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('admin/manage'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Full Name" value="<?= set_value('name'); ?>">
                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="email" name="email" placeholder="Email name" value="<?= set_value('email'); ?>">
                        <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class=" form-group">
                        <input type="text" class="form-control" id="password" name="password" placeholder="Password name" value="<?= set_value('password'); ?>">
                        <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <select class="custom-select" id="role" name="role" required>
                            <option value="2">Coach</option>
                            <option value="3" selected>Athlete</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Delete Modal-->
<!-- <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete Account?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Delete" below if you are sure to delete the account.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-danger" href="<?= base_url('admin/delete'); ?>">Delete</a>
            </div>
        </div>
    </div>
</div> -->