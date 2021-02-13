<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-5 text-gray-800">Edit <?= ($d_role == 1) ? 'Admin' : (($d_role == 2) ? 'Coach' : 'Athlete') ?></h1>
    <form action="<?= base_url('admin/addathlete') ?>" method="POST">
        <div class="row justify-content-between">
            <div class="col-md-5">
                <h1 class="h4 mb-4"><?= ($d_role == 1) ? 'Admin' : (($d_role == 2) ? 'Coach' : 'Athlete') ?> Information</h1>
                <div class="col-md-8 form-group mb-2">
                    <label class="text p-2 font-weight-bolder" for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Full Name" value="<?= $account[0]['name']; ?>">
                    <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="col-md-8 form-group mb-2">
                    <label class="text p-2 font-weight-bolder" for="email">Email</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="Email name" value="<?= set_value('email'); ?>">
                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="col-md-8 form-group mb-2">
                    <label class="text p-2 font-weight-bolder" for="password">Password</label>
                    <input type="text" class="form-control" id="password" name="password" placeholder="Password name" value="<?= set_value('password'); ?>">
                    <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            <?php if ($d_role == 1 || $d_role == 2) : ?>
                <div class="col-md-12">
                    <button class="btn btn-primary" type="submit">Save</button>
                </div>

        </div>
    </form>
</div>
<!-- /.container-fluid -->

</div>
<?php endif; ?>
<?php if ($d_role == 3) : ?>
    <div class="col-md-7">
        <h1 class="h4 mb-4">Data Information</h1>
        <div class="col-md-8 form-group mb-2">
            <label class="text p-2 font-weight-bolder" for="date">Birth Date</label>
            <input type="date" class="form-control" id="date" name="date" value="<?= set_value('date'); ?>">
            <?= form_error('date', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="col-md-8 form-group">
            <label class="text p-2 font-weight-bolder" for="gender">Gender</label>
            <select class="custom-select" id="gender" name="gender" required>
                <option selected hidden disabled>Choose option below</option>
                <option value="L">Men (Laki-laki)</option>
                <option value="P">Women (Perempuan)</option>
            </select>
        </div>
        <div class="col-md-8 form-group mb-2">
            <label class="text p-2 font-weight-bolder" for="status">Status</label>
            <input type="text" class="form-control" id="status" name="status" placeholder="Status name" value="<?= set_value('status'); ?>">
            <?= form_error('status', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="col-md-8 form-group mb-2">
            <label class="text p-2 font-weight-bolder" for="classes">Classes</label>
            <select class="custom-select" id="classes" name="classes" required>
                <option selected hidden disabled>Choose option below</option>
                <option value="Barebow">Barebow</option>
                <option value="Standard Bow">Standard Bow</option>
                <option value="Recurve Bow">Recurve Bow</option>
                <option value="Compound Bow">Compound Bow</option>
            </select>
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
<?php endif; ?>