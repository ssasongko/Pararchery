<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-5 text-gray-800">Detail <?= ($d_role == 1) ? 'Admin' : (($d_role == 2) ? 'Coach' : 'Athlete') ?></h1>
    <form action="<?= base_url('admin/detail/') . $d_role . '/' . $d_id; ?>" method="POST">
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
                    <input type="text" class="form-control" placeholder="Email name" value="<?= $account[0]['email']; ?>" readonly>
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
        <input type="text" id="id_atlet" name="id_atlet" value="<?= $account[0]['id']; ?>" required hidden>
        <div class="col-md-8 form-group mb-2">
            <label class="text p-2 font-weight-bolder" for="date">Birth Date</label>
            <input type="date" class="form-control" id="date" name="date" value="<?= $account[0]['birth_date']; ?>" required>
            <?= form_error('date', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="col-md-8 form-group">
            <label class="text p-2 font-weight-bolder" for="gender">Gender</label>
            <select class="custom-select" id="gender" name="gender" required>
                <option value="<?= $account[0]['gender']; ?>" selected hidden readonly>
                    <?= ($account[0]['gender'] == 'L' ? 'Men (Laki-laki)' : 'Women (Perempuan)'); ?>
                </option>
                <option value="L">Men (Laki-laki)</option>
                <option value="P">Women (Perempuan)</option>
            </select>
        </div>
        <div class="col-md-8 form-group mb-2">
            <label class="text p-2 font-weight-bolder" for="status">Status</label>
            <input type="text" class="form-control" id="status" name="status" placeholder="Status name" value="<?= $account[0]['status']; ?>" required>
            <?= form_error('status', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="col-md-8 form-group mb-2">
            <label class="text p-2 font-weight-bolder" for="classes">Classes</label>
            <select class="custom-select" id="classes" name="classes" required>
                <option value="<?= $account[0]['gender']; ?>" selected hidden readonly>
                    <?php
                    switch ($account[0]['class']) {
                        case 'Barebow':
                            echo 'Barebow';
                            break;
                        case 'Standard Bow':
                            echo 'Standard Bow';
                            break;
                        case 'Recurve Bow':
                            echo 'Recurve Bow';
                            break;
                        default:
                            echo 'Compound Bow';
                            break;
                    };
                    ?>
                </option>
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