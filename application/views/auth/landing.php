<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PARACHERY</title>

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
                <a href="#" class="text-gray">PARACHERY</a>
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
                        <a href="<?= base_url('auth') ?>">SIGN IN</a>
                    </li>
                    <!-- <li class="nav-link">
                        <a href="signup.html">SIGN UP</a>
                    </li> -->
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navigation -->

    <!-- Main Site Section -->

    <!-- Main Site Section -->
    <main>
        <!-- site title -->
        <section class="site-title" style="background: url('<?= base_url('assets'); ?>/img/Untitled-1.jpg');">
            <div class="site-background">
                <h1 class="title" data-text="PARAHYANGAN ARCHERY CLUB">PARAHYANGAN ARCHERY CLUB</h1>
                <h3 class="subtitle">“There is no excellent in archery <br>
                    without great labour” </h3>
            </div>
        </section>
        <!-- site title -->

    </main>


    <!-- Jquery Library -->
    <script src="<?= base_url('assets'); ?>/js/Jquery3.4.1.min.js"></script>

    <!-- Custom Javascript file -->
    <script src="<?= base_url('assets'); ?>/js/main.js"></script>
</body>

</html>