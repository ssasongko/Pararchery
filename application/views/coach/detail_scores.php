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
            <h1 class="h4 mb-4 text-center">Information</h1>
            <div class="form-group">
                <label>Date Scoring : </label>
                <input type="text" class="form-control input-sm" value="<?= $athlete[0]['date_scores'] ?>" disabled>
            </div>

            <div class="form-group">
                <label>Nama</label>
                <input class="form-control input-sm" type="text" value="<?= $athlete[0]['name'] ?>" disabled>
            </div>
            <div class="form-group ">
                <label for="location">Location</label>
                <input type="text" class="form-control" value="<?= $athlete[0]['location'] ?>" disabled>
            </div>
            <div class="form-group ">
                <label class="text" for="distance">Distance</label>
                <input type="text" class="form-control" value="<?= $athlete[0]['distance'] . ' Meter' ?>" disabled>
            </div>
            <div class="form-group ">
                <label class="text" for="Total">Total</label>
                <input class="form-control" type="text" value="<?= $athlete[0]['total'] ?>" disabled>
            </div>
            </form>

        </div>
        <div class="col-lg-6" style="color: black">
            <h1 class="h4 mb-4 text-center">Scores</h1>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Round 1</span>
                </div>

                <select class="custom-select" id="ra11" name="ra11" readonly>
                    <option selected disabled hidden><?= $athlete[0]['11'] ?></option>
                </select>

                <select class="custom-select" id="ra12" name="ra12" readonly>
                    <option selected disabled hidden><?= $athlete[0]['12'] ?></option>
                </select>

                <select class="custom-select" id="ra13" name="ra13" readonly>
                    <option selected disabled hidden><?= $athlete[0]['13'] ?></option>
                </select>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Round 2</span>
                </div>

                <select class="custom-select" id="ra21" name="ra21" readonly>
                    <option selected disabled hidden><?= $athlete[0]['21'] ?></option>
                </select>

                <select class="custom-select" id="ra22" name="ra22" readonly>
                    <option selected disabled hidden><?= $athlete[0]['22'] ?></option>
                </select>

                <select class="custom-select" id="ra23" name="ra23" readonly>
                    <option selected disabled hidden><?= $athlete[0]['23'] ?></option>
                </select>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Round 3</span>
                </div>

                <select class="custom-select" id="ra31" name="ra31" readonly>
                    <option selected disabled hidden><?= $athlete[0]['31'] ?></option>
                </select>

                <select class="custom-select" id="ra32" name="ra32" readonly>
                    <option selected disabled hidden><?= $athlete[0]['32'] ?></option>
                </select>

                <select class="custom-select" id="ra33" name="ra33" readonly>
                    <option selected disabled hidden><?= $athlete[0]['33'] ?></option>
                </select>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Round 4</span>
                </div>

                <select class="custom-select" id="ra41" name="ra41" readonly>
                    <option selected disabled hidden><?= $athlete[0]['41'] ?></option>
                </select>

                <select class="custom-select" id="ra42" name="ra42" readonly>
                    <option selected disabled hidden><?= $athlete[0]['42'] ?></option>
                </select>

                <select class="custom-select" id="ra43" name="ra43" readonly>
                    <option selected disabled hidden><?= $athlete[0]['43'] ?></option>
                </select>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Round 5</span>
                </div>

                <select class="custom-select" id="ra51" name="ra51" readonly>
                    <option selected disabled hidden><?= $athlete[0]['51'] ?></option>
                </select>

                <select class="custom-select" id="ra52" name="ra52" readonly>
                    <option selected disabled hidden><?= $athlete[0]['52'] ?></option>
                </select>

                <select class="custom-select" id="ra53" name="ra53" readonly>
                    <option selected disabled hidden><?= $athlete[0]['53'] ?></option>
                </select>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Round 6</span>
                </div>

                <select class="custom-select" id="ra61" name="ra61" readonly>
                    <option selected disabled hidden><?= $athlete[0]['61'] ?></option>
                </select>

                <select class="custom-select" id="ra62" name="ra62" readonly>
                    <option selected disabled hidden><?= $athlete[0]['62'] ?></option>
                </select>

                <select class="custom-select" id="ra63" name="ra63" readonly>
                    <option selected disabled hidden><?= $athlete[0]['63'] ?></option>
                </select>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Round 7</span>
                </div>

                <select class="custom-select" id="ra71" name="ra71" readonly>
                    <option selected disabled hidden><?= $athlete[0]['71'] ?></option>
                </select>

                <select class="custom-select" id="ra72" name="ra72" readonly>
                    <option selected disabled hidden><?= $athlete[0]['72'] ?></option>
                </select>

                <select class="custom-select" id="ra73" name="ra73" readonly>
                    <option selected disabled hidden><?= $athlete[0]['73'] ?></option>
                </select>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Round 8</span>
                </div>

                <select class="custom-select" id="ra81" name="ra81" readonly>
                    <option selected disabled hidden><?= $athlete[0]['81'] ?></option>
                </select>

                <select class="custom-select" id="ra82" name="ra82" readonly>
                    <option selected disabled hidden><?= $athlete[0]['82'] ?></option>
                </select>

                <select class="custom-select" id="ra83" name="ra83" readonly>
                    <option selected disabled hidden><?= $athlete[0]['83'] ?></option>
                </select>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Round 9</span>
                </div>

                <select class="custom-select" id="ra91" name="ra91" readonly>
                    <option selected disabled hidden><?= $athlete[0]['91'] ?></option>
                </select>

                <select class="custom-select" id="ra92" name="ra92" readonly>
                    <option selected disabled hidden><?= $athlete[0]['92'] ?></option>
                </select>

                <select class="custom-select" id="ra93" name="ra93" readonly>
                    <option selected disabled hidden><?= $athlete[0]['93'] ?></option>
                </select>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Round 10</span>
                </div>

                <select class="custom-select" id="ra101" name="ra101" readonly>
                    <option selected disabled hidden><?= $athlete[0]['101'] ?></option>
                </select>

                <select class="custom-select" id="ra102" name="ra102" readonly>
                    <option selected disabled hidden><?= $athlete[0]['102'] ?></option>
                </select>

                <select class="custom-select" id="ra103" name="ra103" readonly>
                    <option selected disabled hidden><?= $athlete[0]['103'] ?></option>
                </select>
            </div>
        </div>
    </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -- >     