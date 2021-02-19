    <!-- Page Content -->
    <div class="container">

        <h1 class="font-weight-light text-center text-lg-left mt-4 mb-0">Gallery Athlete</h1>

        <hr class="mt-2 mb-5">

        <div class="row text-center text-lg-left">

            <?php foreach ($pictures as $p) : ?>
                <div class="col-lg-3 col-md-4 col-6">
                    <div>
                        <a href="<?= base_url('auth/detail_galery/') . $p['id_image'] ?>"><img class="img-fluid img-thumbnail" src="<?= base_url('assets/img/gallery/') . $p['location'] ?>" alt=""></a>
                    </div>
                    <p class="text-center font-weight-bold"><?= $p['alt'] ?></p>
                </div>
            <?php endforeach ?>

        </div>

    </div>