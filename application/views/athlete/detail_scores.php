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

                <select class="custom-select" id="ra11" name="ra11" required>
                    <option value="<?= $athlete[0]['11'] ?>" selected><?= $athlete[0]['11'] ?></option>
                    <option value="10">10</option>
                    <option value="9">9</option>
                    <option value="8">8</option>
                    <option value="7">7</option>
                    <option value="6">6</option>
                    <option value="5">5</option>
                    <option value="0">Miss</option>
                </select>

                <select class="custom-select" id="ra12" name="ra12" required>
                    <option value="<?= $athlete[0]['12'] ?>" selected><?= $athlete[0]['12'] ?></option>
                    <option value="10">10</option>
                    <option value="9">9</option>
                    <option value="8">8</option>
                    <option value="7">7</option>
                    <option value="6">6</option>
                    <option value="5">5</option>
                    <option value="0">Miss</option>
                </select>

                <select class="custom-select" id="ra13" name="ra13" required>
                    <option value="<?= $athlete[0]['13'] ?>" selected><?= $athlete[0]['13'] ?></option>
                    <option value="10">10</option>
                    <option value="9">9</option>
                    <option value="8">8</option>
                    <option value="7">7</option>
                    <option value="6">6</option>
                    <option value="5">5</option>
                    <option value="0">Miss</option>
                </select>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Round 2</span>
                </div>

                <select class="custom-select" id="ra21" name="ra21" required>
                    <option value="<?= $athlete[0]['21'] ?>" selected><?= $athlete[0]['21'] ?></option>
                    <option value="10">10</option>
                    <option value="9">9</option>
                    <option value="8">8</option>
                    <option value="7">7</option>
                    <option value="6">6</option>
                    <option value="5">5</option>
                    <option value="0">Miss</option>
                </select>

                <select class="custom-select" id="ra22" name="ra22" required>
                    <option value="<?= $athlete[0]['22'] ?>" selected><?= $athlete[0]['22'] ?></option>
                    <option value="10">10</option>
                    <option value="9">9</option>
                    <option value="8">8</option>
                    <option value="7">7</option>
                    <option value="6">6</option>
                    <option value="5">5</option>
                    <option value="0">Miss</option>
                </select>

                <select class="custom-select" id="ra23" name="ra23" required>
                    <option value="<?= $athlete[0]['23'] ?>" selected><?= $athlete[0]['23'] ?></option>
                    <option value="10">10</option>
                    <option value="9">9</option>
                    <option value="8">8</option>
                    <option value="7">7</option>
                    <option value="6">6</option>
                    <option value="5">5</option>
                    <option value="0">Miss</option>
                </select>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Round 3</span>
                </div>

                <select class="custom-select" id="ra31" name="ra31" required>
                    <option value="<?= $athlete[0]['31'] ?>" selected><?= $athlete[0]['31'] ?></option>
                    <option value="10">10</option>
                    <option value="9">9</option>
                    <option value="8">8</option>
                    <option value="7">7</option>
                    <option value="6">6</option>
                    <option value="5">5</option>
                    <option value="0">Miss</option>
                </select>

                <select class="custom-select" id="ra32" name="ra32" required>
                    <option value="<?= $athlete[0]['32'] ?>" selected><?= $athlete[0]['32'] ?></option>
                    <option value="10">10</option>
                    <option value="9">9</option>
                    <option value="8">8</option>
                    <option value="7">7</option>
                    <option value="6">6</option>
                    <option value="5">5</option>
                    <option value="0">Miss</option>
                </select>

                <select class="custom-select" id="ra33" name="ra33" required>
                    <option value="<?= $athlete[0]['33'] ?>" selected><?= $athlete[0]['33'] ?></option>
                    <option value="10">10</option>
                    <option value="9">9</option>
                    <option value="8">8</option>
                    <option value="7">7</option>
                    <option value="6">6</option>
                    <option value="5">5</option>
                    <option value="0">Miss</option>
                </select>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Round 4</span>
                </div>

                <select class="custom-select" id="ra41" name="ra41" required>
                    <option value="<?= $athlete[0]['41'] ?>" selected><?= $athlete[0]['41'] ?></option>
                    <option value="10">10</option>
                    <option value="9">9</option>
                    <option value="8">8</option>
                    <option value="7">7</option>
                    <option value="6">6</option>
                    <option value="5">5</option>
                    <option value="0">Miss</option>
                </select>

                <select class="custom-select" id="ra42" name="ra42" required>
                    <option value="<?= $athlete[0]['42'] ?>" selected><?= $athlete[0]['42'] ?></option>
                    <option value="10">10</option>
                    <option value="9">9</option>
                    <option value="8">8</option>
                    <option value="7">7</option>
                    <option value="6">6</option>
                    <option value="5">5</option>
                    <option value="0">Miss</option>
                </select>

                <select class="custom-select" id="ra43" name="ra43" required>
                    <option value="<?= $athlete[0]['43'] ?>" selected><?= $athlete[0]['43'] ?></option>
                    <option value="10">10</option>
                    <option value="9">9</option>
                    <option value="8">8</option>
                    <option value="7">7</option>
                    <option value="6">6</option>
                    <option value="5">5</option>
                    <option value="0">Miss</option>
                </select>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Round 5</span>
                </div>

                <select class="custom-select" id="ra51" name="ra51" required>
                    <option value="<?= $athlete[0]['51'] ?>" selected><?= $athlete[0]['51'] ?></option>
                    <option value="10">10</option>
                    <option value="9">9</option>
                    <option value="8">8</option>
                    <option value="7">7</option>
                    <option value="6">6</option>
                    <option value="5">5</option>
                    <option value="0">Miss</option>
                </select>

                <select class="custom-select" id="ra52" name="ra52" required>
                    <option value="<?= $athlete[0]['52'] ?>" selected><?= $athlete[0]['52'] ?></option>
                    <option value="10">10</option>
                    <option value="9">9</option>
                    <option value="8">8</option>
                    <option value="7">7</option>
                    <option value="6">6</option>
                    <option value="5">5</option>
                    <option value="0">Miss</option>
                </select>

                <select class="custom-select" id="ra53" name="ra53" required>
                    <option value="<?= $athlete[0]['53'] ?>" selected><?= $athlete[0]['53'] ?></option>
                    <option value="10">10</option>
                    <option value="9">9</option>
                    <option value="8">8</option>
                    <option value="7">7</option>
                    <option value="6">6</option>
                    <option value="5">5</option>
                    <option value="0">Miss</option>
                </select>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Round 6</span>
                </div>

                <select class="custom-select" id="ra61" name="ra61" required>
                    <option value="<?= $athlete[0]['61'] ?>" selected><?= $athlete[0]['61'] ?></option>
                    <option value="10">10</option>
                    <option value="9">9</option>
                    <option value="8">8</option>
                    <option value="7">7</option>
                    <option value="6">6</option>
                    <option value="5">5</option>
                    <option value="0">Miss</option>
                </select>

                <select class="custom-select" id="ra62" name="ra62" required>
                    <option value="<?= $athlete[0]['62'] ?>" selected><?= $athlete[0]['62'] ?></option>
                    <option value="10">10</option>
                    <option value="9">9</option>
                    <option value="8">8</option>
                    <option value="7">7</option>
                    <option value="6">6</option>
                    <option value="5">5</option>
                    <option value="0">Miss</option>
                </select>

                <select class="custom-select" id="ra63" name="ra63" required>
                    <option value="<?= $athlete[0]['63'] ?>" selected><?= $athlete[0]['63'] ?></option>
                    <option value="10">10</option>
                    <option value="9">9</option>
                    <option value="8">8</option>
                    <option value="7">7</option>
                    <option value="6">6</option>
                    <option value="5">5</option>
                    <option value="0">Miss</option>
                </select>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Round 7</span>
                </div>

                <select class="custom-select" id="ra71" name="ra71" required>
                    <option value="<?= $athlete[0]['71'] ?>" selected><?= $athlete[0]['71'] ?></option>
                    <option value="10">10</option>
                    <option value="9">9</option>
                    <option value="8">8</option>
                    <option value="7">7</option>
                    <option value="6">6</option>
                    <option value="5">5</option>
                    <option value="0">Miss</option>
                </select>

                <select class="custom-select" id="ra72" name="ra72" required>
                    <option value="<?= $athlete[0]['72'] ?>" selected><?= $athlete[0]['72'] ?></option>
                    <option value="10">10</option>
                    <option value="9">9</option>
                    <option value="8">8</option>
                    <option value="7">7</option>
                    <option value="6">6</option>
                    <option value="5">5</option>
                    <option value="0">Miss</option>
                </select>

                <select class="custom-select" id="ra73" name="ra73" required>
                    <option value="<?= $athlete[0]['73'] ?>" selected><?= $athlete[0]['73'] ?></option>
                    <option value="10">10</option>
                    <option value="9">9</option>
                    <option value="8">8</option>
                    <option value="7">7</option>
                    <option value="6">6</option>
                    <option value="5">5</option>
                    <option value="0">Miss</option>
                </select>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Round 8</span>
                </div>

                <select class="custom-select" id="ra81" name="ra81" required>
                    <option value="<?= $athlete[0]['81'] ?>" selected><?= $athlete[0]['81'] ?></option>
                    <option value="10">10</option>
                    <option value="9">9</option>
                    <option value="8">8</option>
                    <option value="7">7</option>
                    <option value="6">6</option>
                    <option value="5">5</option>
                    <option value="0">Miss</option>
                </select>

                <select class="custom-select" id="ra82" name="ra82" required>
                    <option value="<?= $athlete[0]['82'] ?>" selected><?= $athlete[0]['82'] ?></option>
                    <option value="10">10</option>
                    <option value="9">9</option>
                    <option value="8">8</option>
                    <option value="7">7</option>
                    <option value="6">6</option>
                    <option value="5">5</option>
                    <option value="0">Miss</option>
                </select>

                <select class="custom-select" id="ra83" name="ra83" required>
                    <option value="<?= $athlete[0]['83'] ?>" selected><?= $athlete[0]['83'] ?></option>
                    <option value="10">10</option>
                    <option value="9">9</option>
                    <option value="8">8</option>
                    <option value="7">7</option>
                    <option value="6">6</option>
                    <option value="5">5</option>
                    <option value="0">Miss</option>
                </select>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Round 9</span>
                </div>

                <select class="custom-select" id="ra91" name="ra91" required>
                    <option value="<?= $athlete[0]['91'] ?>" selected><?= $athlete[0]['91'] ?></option>
                    <option value="10">10</option>
                    <option value="9">9</option>
                    <option value="8">8</option>
                    <option value="7">7</option>
                    <option value="6">6</option>
                    <option value="5">5</option>
                    <option value="0">Miss</option>
                </select>

                <select class="custom-select" id="ra92" name="ra92" required>
                    <option value="<?= $athlete[0]['92'] ?>" selected><?= $athlete[0]['92'] ?></option>
                    <option value="10">10</option>
                    <option value="9">9</option>
                    <option value="8">8</option>
                    <option value="7">7</option>
                    <option value="6">6</option>
                    <option value="5">5</option>
                    <option value="0">Miss</option>
                </select>

                <select class="custom-select" id="ra93" name="ra93" required>
                    <option value="<?= $athlete[0]['93'] ?>" selected><?= $athlete[0]['93'] ?></option>
                    <option value="10">10</option>
                    <option value="9">9</option>
                    <option value="8">8</option>
                    <option value="7">7</option>
                    <option value="6">6</option>
                    <option value="5">5</option>
                    <option value="0">Miss</option>
                </select>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Round 10</span>
                </div>

                <select class="custom-select" id="ra101" name="ra101" required>
                    <option value="<?= $athlete[0]['101'] ?>" selected><?= $athlete[0]['101'] ?></option>
                    <option value="10">10</option>
                    <option value="9">9</option>
                    <option value="8">8</option>
                    <option value="7">7</option>
                    <option value="6">6</option>
                    <option value="5">5</option>
                    <option value="0">Miss</option>
                </select>

                <select class="custom-select" id="ra102" name="ra102" required>
                    <option value="<?= $athlete[0]['102'] ?>" selected><?= $athlete[0]['102'] ?></option>
                    <option value="10">10</option>
                    <option value="9">9</option>
                    <option value="8">8</option>
                    <option value="7">7</option>
                    <option value="6">6</option>
                    <option value="5">5</option>
                    <option value="0">Miss</option>
                </select>

                <select class="custom-select" id="ra103" name="ra103" required>
                    <option value="<?= $athlete[0]['103'] ?>" selected><?= $athlete[0]['103'] ?></option>
                    <option value="10">10</option>
                    <option value="9">9</option>
                    <option value="8">8</option>
                    <option value="7">7</option>
                    <option value="6">6</option>
                    <option value="5">5</option>
                    <option value="0">Miss</option>
                </select>
            </div>
        </div>
    </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -- >     