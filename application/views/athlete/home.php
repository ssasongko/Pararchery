<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-md-12">
            <h1 class="h3 mb-3 text-gray-800 text-center">Leaderboards <?= $time ?></h1>
        </div>

        <!-- Select Button -->
        <div class="col-md-3">
            <form class="user" method="post" action="<?= base_url('athlete/index/') ?>">
                <!-- Time -->
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Time</span>
                    </div>
                    <select class="custom-select" id="time" name="time">
                        <option selected hidden><?= (set_value('time')); ?></option>
                        <option value="All Time">All Time</option>
                        <option value="<?= date('Y') ?>">Year - <?= date('Y') ?></option>
                        <option value="<?= date('m') ?>">Month - <?= date('F') ?></option>
                    </select>
                    <?= form_error('time', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
        </div>

        <div class="col-md-3">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Class</span>
                </div>
                <select class="custom-select" id="classes" name="classes">
                    <?php foreach ($classes as $c) : ?>
                        <option selected hidden><?= (set_value('classes')); ?></option>
                        <option value="<?= $c['class']; ?>"><?= $c['class']; ?></option>
                    <?php endforeach; ?>
                </select>
                <?= form_error('classes', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
        </div>
        <div class="col-md-3">

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Distance</span>
                </div>
                <select class="custom-select" id="distances" name="distances">
                    <?php foreach ($distances as $d) : ?>
                        <option selected hidden><?= (set_value('distances')); ?></option>
                        <option value="<?= $d['distance']; ?>"><?= $d['distance']; ?></option>
                    <?php endforeach; ?>
                </select>
                <?= form_error('distances', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
        </div>
        <div class="col-md-2 mb-2">
            <button class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">

            <?= $this->session->flashdata('message'); ?>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Position</th>
                            <th scope="col">Name</th>
                            <th scope="col">Date</th>
                            <th scope="col">Location</th>
                            <th scope="col">Total</th>
                            <th scope="col">Distance</th>
                            <!-- <th scope="col">Action</th>                         -->
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($athlete as $a) : ?>
                            <tr class="leaderboard">
                                <td><?= $i; ?></th>
                                <td><?= $a['name']; ?></td>
                                <td><?= $a['date_scores']; ?></td>
                                <td><?= $a['location']; ?></td>
                                <td><?= $a['total']; ?></td>
                                <!-- <td><?= $a['distance']; ?> Meter</td> -->
                                <td>
                                    <a href="<?= base_url('athlete/detail_scores/') . $a['id'] ?>" class="badge badge-warning">Detail</a>
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
</div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -- >     