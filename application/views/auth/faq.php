<!-- Page Content -->
<div class="row text-center text-lg-left mt-4">
    <div class="col-lg-12">
        <div class="container">
            <h2 class="text-center" style="color: black;">FAQ</h2>
            <div id="accordion">
                <?php foreach ($faq as $f) : ?>
                    <div class="card">
                        <div class="card-header">
                            <a class="card-link" data-toggle="collapse" href="<?= '#faq' . $f['id_faq']; ?>" style="color: cornflowerblue;">
                                <b><?= $f['question']; ?></b>
                            </a>
                        </div>
                        <div id="<?= 'faq' . $f['id_faq']; ?>" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                <?= $f['answer']; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

    </div>
</div>