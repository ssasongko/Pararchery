<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-md-8 col-sm-12">
            <h1 class="h3 mb-4 text-gray-800">Dashboard Admin</h1>
        </div>
    </div>



    <div class="row">
        <div class="col-lg-12">
            <?= $this->session->flashdata('message'); ?>
        </div>
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-lg-12 col-md-6 mb-4">
            <div class="card bg-gradient-primary border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-white text-uppercase mb-1">Total Acount</div>
                            <div class="h5 mb-0 font-weight-bold text-white"><?= ($totalAcount); ?> Persons</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md- mb-4">
            <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Atlets</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= ($totalAtlets); ?> Persons</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md- mb-4">
            <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Coach</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= ($totalCoach); ?> Persons</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md- mb-4">
            <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Admin</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= ($totalAdmin); ?> Persons</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -- >     