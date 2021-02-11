<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-5 text-gray-800">Add Athlete</h1>

    <div class="row justify-content-between">
        <div class="col-md-5">
            <h1 class="h4 mb-4">Account Information</h1>
            <div class="col-md-8 form-group mb-2">
                <label class="text p-2 font-weight-bolder" for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Full Name" value="<?= set_value('name'); ?>">
                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="col-md-8 form-group mb-2">
                <label class="text p-2 font-weight-bolder" for="email">Email</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Email name" value="<?= set_value('email'); ?>">
                <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="col-md-8 form-group mb-2">
                <label class="text p-2 font-weight-bolder" for="password">Password</label>
                <input type="text" class="form-control" id="password" name="password" placeholder="Password name" value="<?= set_value('password'); ?>">
                <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
        </div>
        <div class="col-md-7">
            <h1 class="h4 mb-4">Data Information</h1>
            <div class="col-md-8 form-group mb-2">
                <label class="text p-2 font-weight-bolder" for="date">Birth Date</label>
                <input type="date" class="form-control" id="date" name="date" value="<?= set_value('date'); ?>">
                <?= form_error('date', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group">
                <select class="custom-select" id="gender" name="gender" required>
                    <option value="<?= set_value('gender'); ?>"><?= set_value('gender'); ?></option>
                    <option value="L">Men (Laki-laki)</option>
                    <option value="P" selected>Women (Perempuan)</option>
                </select>
            </div>
            <div class="col-md-8 form-group mb-2">
                <label class="text p-2 font-weight-bolder" for="password">Password</label>
                <input type="text" class="form-control" id="password" name="password" placeholder="Password name" value="<?= set_value('password'); ?>">
                <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="col-md-8 form-group mb-2">
                <label class="text p-2 font-weight-bolder">Role : </label>
                <input type="text" class="form-control" id="role" name="role" value="3" hidden>
                <input type="text" class="form-control" value="Athlete" readonly>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->