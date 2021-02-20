<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <h1 class="h3 mb-4 text-gray-800">Detail FAQ</h1>
        </div>
    </div>


    <form action="<?= base_url('admin/faq_detail/') . $faq[0]['id_faq'] ?>" method="POST">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New FAQ</h5>
                </div>
                <div class="modal-body">
                    <div class="form-group mb-2">
                        <label for="question"><b>Question</b></label>
                        <textarea type="text" class="form-control" id="question" name="question" required><?= $faq[0]['question'] ?>
                        </textarea>
                    </div>
                    <div class=" form-group mb-2">
                        <label for="answer"><b>Answer</b></label>
                        <textarea type="text" class="form-control" id="answer" name="answer" required><?= $faq[0]['answer'] ?>
                        </textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <a class="btn btn-secondary" href="<?= base_url('admin/faq') ?>">Cancel</a>
                    <button type="submit" class="btn btn-primary">Edit</button>
                </div>
            </div>
        </div>
    </form>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -- >     