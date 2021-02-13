<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-5 text-gray-800"><?= $title ?></h1>
    <form action="<?= base_url('admin/changePass/') . $passID ?>" method="POST">
        <div class="row justify-content-between">
            <div class="col-md-5">
                <h1 class="h4 mb-4">Account Information</h1>
                <div class="col-md-8 form-group mb-2">
                    <label class="text p-2 font-weight-bolder" for="password">New Password</label>
                    <input type="text" class="form-control" id="password" name="password" placeholder="Password" value="<?= set_value('password'); ?>">
                    <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <div class="col-md-12">
                    <button class="btn btn-primary" type="submit">Save</button>
                </div>
            </div>

        </div>
    </form>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->