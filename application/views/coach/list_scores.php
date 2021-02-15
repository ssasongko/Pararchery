<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-md-8 col-sm-12">
            <h1 class="h3 mb-4 text-gray-800">Lists Scores</h1>
        </div>
    </div>

    <div class="row">


        <?= $this->session->flashdata('message'); ?>

        <!-- Select Button -->
        <div class="col-md-3">
            <form class="user" method="post" action="<?= base_url('coach/listScores/') ?>">

                <!-- Time -->
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Class</span>
                    </div>
                    <select class="custom-select" id="classes" name="classes">
                        <option selected hidden disabled><?= set_value('classes'); ?></option>
                        <option value="Barebow">Barebow</option>
                        <option value="Standard Bow">Standard Bow</option>
                        <option value="Recurve Bow">Recurve Bow</option>
                        <option value="Compound Bow">Compound Bow</option>
                    </select>
                    <?= form_error('time', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
        </div>
        <div class="col-md-2 mb-2">
            <button class="btn btn-primary">Submit</button>
            </form>
        </div>

        <div class="col-lg-12">
            <div class="table-responsive">
                <table class="table table-hover table-striped" id="dataTable">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Time</th>
                            <th scope="col">Location</th>
                            <th scope="col">Distance</th>
                            <th scope="col">Total</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($athlete_scores as $a) : ?>
                            <tr>
                                <th scope="row"><?= $i; ?></th>
                                <td><?= $a['name']; ?></td>
                                <td><?= $a['date_scores']; ?></td>
                                <td><?= $a['location']; ?></td>
                                <td><?= $a['distance'] . " Meter"; ?></td>
                                <td><?= $a['total']; ?></td>
                                <td>
                                    <a href="<?= base_url('coach/detail_scores/') . $a['id'] ?>" class="badge badge-warning">Detail</a>
                                </td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>

    <!-- Pop up detail -->
    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">


                <!-- Modal body -->
                <div class="modal-body table-responsive">
                    <table table>
                        <tr>
                            <td>Nama</td>
                        </tr>
                        <tr>
                            <td>Nur Sasongko</td>
                        </tr>
                    </table>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -- >     