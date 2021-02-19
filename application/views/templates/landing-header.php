<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PARACHERY</title>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/css/all.css">

    <!-- Custom Style -->
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/css/Style.css">

    <!-- icon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('assets/img/'); ?>phac.ico" />
</head>

<body>

    <!-- Navigation -->
    <nav class="nav">
        <div class="nav-menu flex-row">
            <div class="nav-brand">
                <a href="<?= base_url('auth/landing') ?>" class="text-gray">PARACHERY</a>
            </div>
            <div class="toggle-collapse">
                <div class="toggle-icons">
                    <i class="fas fa-bars"></i>
                </div>
            </div>
            <div>
                <ul class="nav-items">
                    <li class="nav-link">
                        <a href="<?= base_url('auth/galery') ?>">GALERY</a>
                    </li>
                    <li class="nav-link">
                        <a href="<?= base_url('auth/faq') ?>">FAQ</a>
                    </li>
                    <li class="nav-link">
                        <a href="<?= base_url('auth/event') ?>">EVENT</a>
                    </li>
                    <li class="nav-link">
                        <a href="<?= base_url('auth') ?>">SIGN IN</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navigation -->