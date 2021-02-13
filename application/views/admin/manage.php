<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12 d-flex justify-content-between mb-3">
            <h1 class="h3 text-gray-800"><?= $title; ?></h1>
            <div>
                <a href="<?= base_url('admin/addathlete') ?>" class="btn btn-primary">Add New Athlete</a>
                <a href="<?= base_url('admin/addcoach') ?>" class="btn btn-primary">Add New Coach</a>
            </div>
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
                                <td><?= date("d-m-Y", $a['date_created']); ?></td>
                                <td>
                                    <a href="<?= base_url('admin/detail/') . $a['id_role'] . '/' . $a['id']; ?>" class="badge badge-success">Detail</a>
                                    <a href="<?= base_url('admin/changePass/') . $a['id']; ?>" class="badge badge-warning">Change Password</a>
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