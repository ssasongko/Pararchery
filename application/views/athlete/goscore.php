<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-md-8 col-sm-12">
            <h1 class="h3 mb-4 text-gray-800">Go Scoring</h1>
            <p>Lets make a history!</p>
        </div>
        <!--         <div class="col-md-4 col-sm-8">
            <a href="#" class="btn btn-success float-right mr-0">Tambah Atlet</a>
        </div> -->
    </div>



    <div class="row">
        <div class="col-lg-12">
            <?= $this->session->flashdata('message'); ?>
            <hr>
        </div>
        <div class="col-lg-6" style="color: black">
            <form class="user" method="post" action="<?= base_url('athlete/savescore') ?>">

                <h1 class="h4 mb-4 text-center">Information</h1>

                <!-- Hidden input -->
                <!--     <input type="text" class="form-control form-control-user" id="id_athelete" name="id_athelete" value="<?= $myId; ?>" hidden> -->
                <?php date_default_timezone_set("Asia/Jakarta"); ?>

                <div class="input-group mb-3">
                    <label class="text p-2" for="time">Time : </label>
                    <input type="text" class="form-control" id="date" name="date" value="<?= date('Y-m-d G:i:s') ?>" readonly>
                </div>

                <div class="input-group mb-3">
                    <label class="text p-2" for="location">Location : </label>
                    <input type="text" class="form-control" id="location" name="location" placeholder="">
                    <?= form_error('location', '<small class="d-block p-2 text-danger pl-3">', '</small>'); ?>
                </div>

                <div class="input-group mb-3">
                    <label class="text p-2" for="distance">Distance : </label>
                    <input type="text" class="form-control" id="distance" name="distance" placeholder="">
                    <label class="text p-2" style="margin-right: 60%;" for="distance"> Meter</label>
                    <?= form_error('distance', '<small class="d-block p-2 text-danger pl-3">', '</small>'); ?>
                </div>

        </div>
        <div class="col-lg-6" style="color: black">
            <!-- Round 1 -->
            <h1 class="h4 mb-4 text-center">Scoresheet</h1>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Round 1</span>
                </div>

                <select class="custom-select" id="ra11" name="ra11" required>
                    <option selected disabled hidden></option>
                    <option value="10">10</option>
                    <option value="9">9</option>
                    <option value="8">8</option>
                    <option value="7">7</option>
                    <option value="6">6</option>
                    <option value="5">5</option>
                    <option value="0">Miss</option>
                </select>

                <select class="custom-select" id="ra12" name="ra12" required>
                    <option selected disabled hidden></option>
                    <option value="10">10</option>
                    <option value="9">9</option>
                    <option value="8">8</option>
                    <option value="7">7</option>
                    <option value="6">6</option>
                    <option value="5">5</option>
                    <option value="0">Miss</option>
                </select>

                <select class="custom-select" id="ra13" name="ra13" required>
                    <option selected disabled hidden></option>
                    <option value="10">10</option>
                    <option value="9">9</option>
                    <option value="8">8</option>
                    <option value="7">7</option>
                    <option value="6">6</option>
                    <option value="5">5</option>
                    <option value="0">Miss</option>
                </select>
            </div>

            <!-- Round 2 -->
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Round 2</span>
                </div>

                <select class="custom-select" id="ra21" name="ra21" required>
                    <option selected disabled hidden></option>
                    <option value="10">10</option>
                    <option value="9">9</option>
                    <option value="8">8</option>
                    <option value="7">7</option>
                    <option value="6">6</option>
                    <option value="5">5</option>
                    <option value="0">Miss</option>
                </select>

                <select class="custom-select" id="ra22" name="ra22" required>
                    <option selected disabled hidden></option>
                    <option value="10">10</option>
                    <option value="9">9</option>
                    <option value="8">8</option>
                    <option value="7">7</option>
                    <option value="6">6</option>
                    <option value="5">5</option>
                    <option value="0">Miss</option>
                </select>

                <select class="custom-select" id="ra23" name="ra23" required>
                    <option selected disabled hidden></option>
                    <option value="10">10</option>
                    <option value="9">9</option>
                    <option value="8">8</option>
                    <option value="7">7</option>
                    <option value="6">6</option>
                    <option value="5">5</option>
                    <option value="0">Miss</option>
                </select>
            </div>

            <!-- Round 3 -->
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Round 3</span>
                </div>

                <select class="custom-select" id="ra31" name="ra31" required>
                    <option selected disabled hidden></option>
                    <option value="10">10</option>
                    <option value="9">9</option>
                    <option value="8">8</option>
                    <option value="7">7</option>
                    <option value="6">6</option>
                    <option value="5">5</option>
                    <option value="0">Miss</option>
                </select>

                <select class="custom-select" id="ra32" name="ra32" required>
                    <option selected disabled hidden></option>
                    <option value="10">10</option>
                    <option value="9">9</option>
                    <option value="8">8</option>
                    <option value="7">7</option>
                    <option value="6">6</option>
                    <option value="5">5</option>
                    <option value="0">Miss</option>
                </select>

                <select class="custom-select" id="ra33" name="ra33" required>
                    <option selected disabled hidden></option>
                    <option value="10">10</option>
                    <option value="9">9</option>
                    <option value="8">8</option>
                    <option value="7">7</option>
                    <option value="6">6</option>
                    <option value="5">5</option>
                    <option value="0">Miss</option>
                </select>
            </div>

            <!-- Round 4-->
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Round 4</span>
                </div>

                <select class="custom-select" id="ra41" name="ra41" required>
                    <option selected disabled hidden></option>
                    <option value="10">10</option>
                    <option value="9">9</option>
                    <option value="8">8</option>
                    <option value="7">7</option>
                    <option value="6">6</option>
                    <option value="5">5</option>
                    <option value="0">Miss</option>
                </select>

                <select class="custom-select" id="ra42" name="ra42" required>
                    <option selected disabled hidden></option>
                    <option value="10">10</option>
                    <option value="9">9</option>
                    <option value="8">8</option>
                    <option value="7">7</option>
                    <option value="6">6</option>
                    <option value="5">5</option>
                    <option value="0">Miss</option>
                </select>

                <select class="custom-select" id="ra43" name="ra43" required>
                    <option selected disabled hidden></option>
                    <option value="10">10</option>
                    <option value="9">9</option>
                    <option value="8">8</option>
                    <option value="7">7</option>
                    <option value="6">6</option>
                    <option value="5">5</option>
                    <option value="0">Miss</option>
                </select>
            </div>

            <!-- Round 5 -->
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Round 5</span>
                </div>

                <select class="custom-select" id="ra51" name="ra51" required>
                    <option selected disabled hidden></option>
                    <option value="10">10</option>
                    <option value="9">9</option>
                    <option value="8">8</option>
                    <option value="7">7</option>
                    <option value="6">6</option>
                    <option value="5">5</option>
                    <option value="0">Miss</option>
                </select>

                <select class="custom-select" id="ra52" name="ra52" required>
                    <option selected disabled hidden></option>
                    <option value="10">10</option>
                    <option value="9">9</option>
                    <option value="8">8</option>
                    <option value="7">7</option>
                    <option value="6">6</option>
                    <option value="5">5</option>
                    <option value="0">Miss</option>
                </select>

                <select class="custom-select" id="ra53" name="ra53" required>
                    <option selected disabled hidden></option>
                    <option value="10">10</option>
                    <option value="9">9</option>
                    <option value="8">8</option>
                    <option value="7">7</option>
                    <option value="6">6</option>
                    <option value="5">5</option>
                    <option value="0">Miss</option>
                </select>
            </div>

            <!-- Round 6 -->
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Round 6</span>
                </div>

                <select class="custom-select" id="ra61" name="ra61" required>
                    <option selected disabled hidden></option>
                    <option value="10">10</option>
                    <option value="9">9</option>
                    <option value="8">8</option>
                    <option value="7">7</option>
                    <option value="6">6</option>
                    <option value="5">5</option>
                    <option value="0">Miss</option>
                </select>

                <select class="custom-select" id="ra62" name="ra62" required>
                    <option selected disabled hidden></option>
                    <option value="10">10</option>
                    <option value="9">9</option>
                    <option value="8">8</option>
                    <option value="7">7</option>
                    <option value="6">6</option>
                    <option value="5">5</option>
                    <option value="0">Miss</option>
                </select>

                <select class="custom-select" id="ra63" name="ra63" required>
                    <option selected disabled hidden></option>
                    <option value="10">10</option>
                    <option value="9">9</option>
                    <option value="8">8</option>
                    <option value="7">7</option>
                    <option value="6">6</option>
                    <option value="5">5</option>
                    <option value="0">Miss</option>
                </select>
            </div>

            <!-- Round 7 -->
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Round 7</span>
                </div>

                <select class="custom-select" id="ra71" name="ra71" required>
                    <option selected disabled hidden></option>
                    <option value="10">10</option>
                    <option value="9">9</option>
                    <option value="8">8</option>
                    <option value="7">7</option>
                    <option value="6">6</option>
                    <option value="5">5</option>
                    <option value="0">Miss</option>
                </select>

                <select class="custom-select" id="ra72" name="ra72" required>
                    <option selected disabled hidden></option>
                    <option value="10">10</option>
                    <option value="9">9</option>
                    <option value="8">8</option>
                    <option value="7">7</option>
                    <option value="6">6</option>
                    <option value="5">5</option>
                    <option value="0">Miss</option>
                </select>

                <select class="custom-select" id="ra73" name="ra73" required>
                    <option selected disabled hidden></option>
                    <option value="10">10</option>
                    <option value="9">9</option>
                    <option value="8">8</option>
                    <option value="7">7</option>
                    <option value="6">6</option>
                    <option value="5">5</option>
                    <option value="0">Miss</option>
                </select>
            </div>

            <!-- Round 8 -->
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Round 8</span>
                </div>

                <select class="custom-select" id="ra81" name="ra81" required>
                    <option selected disabled hidden></option>
                    <option value="10">10</option>
                    <option value="9">9</option>
                    <option value="8">8</option>
                    <option value="7">7</option>
                    <option value="6">6</option>
                    <option value="5">5</option>
                    <option value="0">Miss</option>
                </select>

                <select class="custom-select" id="ra82" name="ra82" required>
                    <option selected disabled hidden></option>
                    <option value="10">10</option>
                    <option value="9">9</option>
                    <option value="8">8</option>
                    <option value="7">7</option>
                    <option value="6">6</option>
                    <option value="5">5</option>
                    <option value="0">Miss</option>
                </select>

                <select class="custom-select" id="ra83" name="ra83" required>
                    <option selected disabled hidden></option>
                    <option value="10">10</option>
                    <option value="9">9</option>
                    <option value="8">8</option>
                    <option value="7">7</option>
                    <option value="6">6</option>
                    <option value="5">5</option>
                    <option value="0">Miss</option>
                </select>
            </div>

            <!-- Round 9 -->
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Round 9</span>
                </div>

                <select class="custom-select" id="ra91" name="ra91" required>
                    <option selected disabled hidden></option>
                    <option value="10">10</option>
                    <option value="9">9</option>
                    <option value="8">8</option>
                    <option value="7">7</option>
                    <option value="6">6</option>
                    <option value="5">5</option>
                    <option value="0">Miss</option>
                </select>

                <select class="custom-select" id="ra92" name="ra92" required>
                    <option selected disabled hidden></option>
                    <option value="10">10</option>
                    <option value="9">9</option>
                    <option value="8">8</option>
                    <option value="7">7</option>
                    <option value="6">6</option>
                    <option value="5">5</option>
                    <option value="0">Miss</option>
                </select>

                <select class="custom-select" id="ra93" name="ra93" required>
                    <option selected disabled hidden></option>
                    <option value="10">10</option>
                    <option value="9">9</option>
                    <option value="8">8</option>
                    <option value="7">7</option>
                    <option value="6">6</option>
                    <option value="5">5</option>
                    <option value="0">Miss</option>
                </select>
            </div>

            <!-- Round 10 -->
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Round 10</span>
                </div>

                <select class="custom-select" id="ra101" name="ra101" required>
                    <option selected disabled hidden></option>
                    <option value="10">10</option>
                    <option value="9">9</option>
                    <option value="8">8</option>
                    <option value="7">7</option>
                    <option value="6">6</option>
                    <option value="5">5</option>
                    <option value="0">Miss</option>
                </select>

                <select class="custom-select" id="ra102" name="ra102" required>
                    <option selected disabled hidden></option>
                    <option value="10">10</option>
                    <option value="9">9</option>
                    <option value="8">8</option>
                    <option value="7">7</option>
                    <option value="6">6</option>
                    <option value="5">5</option>
                    <option value="0">Miss</option>
                </select>

                <select class="custom-select" id="ra103" name="ra103" required>
                    <option selected disabled hidden></option>
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
        <div class="col-lg-12">
            <button type="submit" class="btn btn-primary btn-user btn-block">Simpan</button>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -- >     