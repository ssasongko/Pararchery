<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-md-8 col-sm-12">
            <h1 class="h3 mb-4 text-gray-800">My Scores</h1>
            <!--   <p>Latest data updated on 1 Februari 2021</p> -->
        </div>
        <!--         <div class="col-md-4 col-sm-8">
            <a href="#" class="btn btn-success float-right mr-0">Tambah Atlet</a>
        </div> -->
    </div>

    <div class="row">
        <div class="col-lg-12">

            <?= $this->session->flashdata('message'); ?>


            <div class="table-responsive">
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <!-- <th scope="col">Name</th> -->
                            <th scope="col">Date</th>
                            <th scope="col">Location</th>
                            <th scope="col">Total</th>
                            <th scope="col">Distance</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($athlete as $a) : ?>
                            <tr>
                                <th scope="row"><?= $i; ?></th>
                                <td><?= $a['date_scores']; ?></td>
                                <td><?= $a['location']; ?></td>
                                <td><?= $a['total']; ?></td>
                                <td><?= $a['distance']; ?> Meter</td>
                                <td>
                                    <a href="<?= base_url('athlete/detail_scores/') . $a['id'] ?>" class="badge badge-warning">Detail</a>
                                    <!-- <a href="#" class="badge badge-warning" data-toggle="modal" data-target="#detail">Detail</a> -->
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
    <div class="modal" id="detail">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Detail</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

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