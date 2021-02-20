<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12 d-flex justify-content-between mb-3">
            <h1 class="h3 text-gray-800"><?= $title; ?></h1>
            <div>
                <a href="#" data-toggle="modal" data-target="#newEventModal" class="btn btn-primary">Add New Event</a>
            </div>
        </div>


        <div class="col-lg-12">
            <?= $this->session->flashdata('message'); ?>
            <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
            <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
            <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
            <div class="table-responsive">
                <table class="table table-hover table-striped" id="dataTable">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Upload By</th>
                            <th scope="col">Event Name</th>
                            <th scope="col">Location</th>
                            <th scope="col">Date</th>
                            <th scope="col">Desc</th>
                            <th scope="col">Date Created</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($event as $a) : ?>
                            <tr>
                                <th scope="row"><?= $i; ?></th>
                                <td><?= $a['name']; ?></td>
                                <td><?= $a['event_name']; ?></td>
                                <td><?= $a['event_location']; ?></td>
                                <td><?= $a['event_date']; ?></td>
                                <td><?= $a['event_desc']; ?></td>
                                <td><?= $a['date']; ?></td>
                                <td>
                                    <!-- no bugs here still closed during pandemic -->
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
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Logout Modal-->
<div class="modal fade" id="newEventModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <form action="<?= base_url('admin/faq') ?>" method="POST">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Cannot Add Event</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>During it's pandemic, activities are limited. Events aren't allowed to be added.</p>
                    <img class="img-thumbnail" src="<?= base_url('assets/img/') . 'covid.jpg'; ?>" alt="covid">
                    <span class="badge badge-danger">Stay safe and stay training in home</span>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger" type="button" data-dismiss="modal">Close and stay at home</button>
                </div>
            </div>
        </div>
    </form>
</div>