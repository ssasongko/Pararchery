<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12 d-flex justify-content-between mb-3">
            <h1 class="h3 text-gray-800"><?= $title; ?></h1>
            <div>
                <a href="#" data-toggle="modal" data-target="#newImageModal" class="btn btn-primary">Add New Images</a>
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
                            <th scope="col">Title</th>
                            <th scope="col">Picture</th>
                            <th scope="col">Date Upload</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($athlete as $a) : ?>
                            <tr>
                                <th scope="row"><?= $i; ?></th>
                                <td><?= $a['name']; ?></td>
                                <td><?= $a['alt']; ?></td>
                                <td><img class="mb-4 img-thumbnail img-fluid mx-auto d-block" src="<?= base_url('assets/img/gallery/') . $a['location']; ?>" size="65" height="64"></td>
                                <td><?= $a['date']; ?></td>
                                <td>
                                    <a href="<?= base_url('admin/gallery_delete/') . $a['id_image']; ?>" class="badge badge-danger">Delete</a>
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
<div class="modal fade" id="newImageModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <?= form_open_multipart('admin/gallery'); ?>
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New Images</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group mb-2">
                    <input type="text" class="form-control" id="title" name="title" placeholder="Title Images" required>
                </div>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="image" name="image" accept="image/*">
                    <label class="custom-file-label" for="image">Choose file</label>
                </div>

                <?php date_default_timezone_set("Asia/Jakarta"); ?>
                <input type="text" class="form-control" id="date" name="date" value="<?= date('Y-m-d G:i:s') ?>" hidden>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary">Upload</button>
            </div>

        </div>
    </div>
    </form>
</div>