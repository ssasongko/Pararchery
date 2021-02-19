<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container-fluid text-center mb-4 d-flex flex-content-between" style="background-color:cadetblue; padding: 7px; background-color: #000000; color: white">
        <img class="img-responsive" src="<?= base_url('assets/img/'); ?>phac.png" width="48" height="48">
        <h1><b> PARARCHERY</b></h1>
    </div>

    <div class="container text-center">
        <p class="font-weight-bolder"><?= $pic[0]['alt'] ?></p>
        <img class="mx-auto d-block img-fluid img-thumbnail mb-4" src="<?= base_url('assets/img/gallery/') . $pic[0]['location'] ?>" alt="<?= $pic[0]['alt'] ?>" width="640" height="480">
        <div>
            <span class="badge badge-success"><?= $pic[0]['name'] ?></span> |
            <span class="badge badge-warning"><?= $pic[0]['date'] ?></span>
            <div class="text-center mb-4">
                <a class="small text-primary" href="<?= base_url('auth/galery'); ?>">Back to Galery</a>
            </div>
        </div>
    </div>

</body>

</html>