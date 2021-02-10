<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <h1 class="h3 mb-4 text-gray-800">Detail Scores</h1>
            <?= $this->session->flashdata('message'); ?>
        </div>
    </div>



    <div class="row">
        <div class="col-lg-6" style="color: black">
            <form class="user" method="post" action="">

                <h1 class="h4 mb-4 text-center">Information</h1>

                <!-- Hidden input -->
                <!-- <input type="text" class="form-control form-control-user" id="id_athelete" name="id_athelete" value="<?= $myId; ?>" hidden> -->
                <div class="form-group">
                    <label>Tanggal</label>
                    <input type="text" class="form-control input-sm" id="date" name="date" value="<?= $athlete[0]['date_scores'] ?>" disabled>
                </div>

                <div class="form-group">
                    <label>Nama</label>
                    <input class="form-control input-sm" type="text" value="<?= $athlete[0]['name'] ?>" disabled>
                </div>
                <div class="form-group ">
                    <label for="location">Location</label>
                    <input type="text" class="form-control" id="location" name="location" value="<?= $athlete[0]['location'] ?>" disabled>
                </div>
                <div class="form-group ">
                    <label class="text" for="distance">Distance</label>
                    <input size="50" type="text" class="form-control" id="distance" name="distance" value="<?= $athlete[0]['distance'] . ' Meter' ?>" disabled>
                </div>
            </form>

        </div>
        <div class="col-lg-6" style="color: black">
            <h1 class="h4 mb-4 text-center">Scores</h1>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Round 1</span>
                </div>

                <select class="custom-select">
                    <option value="<?= $athlete[0]['11'] ?>" selected hidden disabled><?= $athlete[0]['11'] ?></option>
                </select>

                <select class="custom-select">
                    <option value="<?= $athlete[0]['12'] ?>" selected><?= $athlete[0]['12'] ?></option>
                </select>

                <select class="custom-select">
                    <option value="<?= $athlete[0]['13'] ?>" selected><?= $athlete[0]['13'] ?></option>
                </select>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Round 2</span>
                </div>

                <select class="custom-select">
                    <option value="<?= $athlete[0]['21'] ?>" selected><?= $athlete[0]['21'] ?></option>
                </select>

                <select class="custom-select">
                    <option value="<?= $athlete[0]['22'] ?>" selected><?= $athlete[0]['22'] ?></option>
                </select>

                <select class="custom-select">
                    <option value="<?= $athlete[0]['23'] ?>" selected><?= $athlete[0]['23'] ?></option>
                </select>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Round 3</span>
                </div>

                <select class="custom-select">
                    <option value="<?= $athlete[0]['31'] ?>" selected><?= $athlete[0]['31'] ?></option>
                </select>

                <select class="custom-select">
                    <option value="<?= $athlete[0]['32'] ?>" selected><?= $athlete[0]['32'] ?></option>
                </select>

                <select class="custom-select">
                    <option value="<?= $athlete[0]['33'] ?>" selected><?= $athlete[0]['33'] ?></option>
                </select>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Round 4</span>
                </div>

                <select class="custom-select">
                    <option value="<?= $athlete[0]['41'] ?>" selected><?= $athlete[0]['41'] ?></option>
                </select>

                <select class="custom-select">
                    <option value="<?= $athlete[0]['42'] ?>" selected><?= $athlete[0]['42'] ?></option>
                </select>

                <select class="custom-select">
                    <option value="<?= $athlete[0]['43'] ?>" selected><?= $athlete[0]['43'] ?></option>
                </select>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Round 5</span>
                </div>

                <select class="custom-select">
                    <option value="<?= $athlete[0]['51'] ?>" selected><?= $athlete[0]['51'] ?></option>
                </select>

                <select class="custom-select">
                    <option value="<?= $athlete[0]['52'] ?>" selected><?= $athlete[0]['52'] ?></option>
                </select>

                <select class="custom-select">
                    <option value="<?= $athlete[0]['53'] ?>" selected><?= $athlete[0]['53'] ?></option>
                </select>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Round 6</span>
                </div>

                <select class="custom-select">
                    <option value="<?= $athlete[0]['61'] ?>" selected><?= $athlete[0]['61'] ?></option>
                </select>

                <select class="custom-select">
                    <option value="<?= $athlete[0]['62'] ?>" selected><?= $athlete[0]['62'] ?></option>
                </select>

                <select class="custom-select">
                    <option value="<?= $athlete[0]['63'] ?>" selected><?= $athlete[0]['63'] ?></option>
                </select>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Round 7</span>
                </div>

                <select class="custom-select">
                    <option value="<?= $athlete[0]['71'] ?>" selected><?= $athlete[0]['71'] ?></option>
                </select>

                <select class="custom-select">
                    <option value="<?= $athlete[0]['72'] ?>" selected><?= $athlete[0]['72'] ?></option>
                </select>

                <select class="custom-select">
                    <option value="<?= $athlete[0]['73'] ?>" selected><?= $athlete[0]['73'] ?></option>
                </select>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Round 8</span>
                </div>

                <select class="custom-select">
                    <option value="<?= $athlete[0]['81'] ?>" selected><?= $athlete[0]['81'] ?></option>
                </select>

                <select class="custom-select">
                    <option value="<?= $athlete[0]['82'] ?>" selected><?= $athlete[0]['82'] ?></option>
                </select>

                <select class="custom-select">
                    <option value="<?= $athlete[0]['83'] ?>" selected><?= $athlete[0]['83'] ?></option>
                </select>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Round 9</span>
                </div>

                <select class="custom-select">
                    <option value="<?= $athlete[0]['91'] ?>" selected><?= $athlete[0]['91'] ?></option>
                </select>

                <select class="custom-select">
                    <option value="<?= $athlete[0]['92'] ?>" selected><?= $athlete[0]['92'] ?></option>
                </select>

                <select class="custom-select">
                    <option value="<?= $athlete[0]['93'] ?>" selected><?= $athlete[0]['93'] ?></option>
                </select>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Round 10</span>
                </div>

                <select class="custom-select">
                    <option value="<?= $athlete[0]['101'] ?>" selected><?= $athlete[0]['101'] ?></option>
                </select>

                <select class="custom-select">
                    <option value="<?= $athlete[0]['102'] ?>" selected><?= $athlete[0]['102'] ?></option>
                </select>

                <select class="custom-select">
                    <option value="<?= $athlete[0]['103'] ?>" selected><?= $athlete[0]['103'] ?></option>
                </select>
            </div>
        </div>
    </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -- >     