<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="row">
    <div class="col-md-8 col-sm-12">
      <h1 class="h3 mb-4 text-gray-800">Dashboard Coach</h1>
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
              <div class="text-xs font-weight-bold text-white text-uppercase mb-1">Total Athlete's</div>
              <div class="h5 mb-0 font-weight-bold text-white"><?= ($totalAthletes); ?> Persons</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-users fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-md- mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Barebow Users</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800"><?= ($totalUsersBAR); ?> Persons</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-users fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-md- mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Standard Bow Users</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800"><?= ($totalUsersSTD); ?> Persons</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-users fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-md- mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Recurve Bow Users</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800"><?= ($totalUsersREC); ?> Persons</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-users fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-md- mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Compound Bow Users</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800"><?= ($totalUsersCOM); ?> Persons</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-users fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-12 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-2">Best Record</div>
              <div class="dropdown-divider"></div>
              <div class="h5 mb-3 text-gray-800">
                <span class="font-weight-bold">Barebow - 50 M : </span>
                <span class="badge badge-primary"><?= $bestBAR[0]['name'] ?></span>,
                <span class="badge badge-success"> Scores : <?= $bestBAR[0]['total'] ?></span>,
                <span class="badge badge-info"> Date : <?= $bestBAR[0]['date_scores'] ?></span>,
                <a href="<?= base_url('coach/detail_scores/') . $bestBAR[0]['id'] ?>"><span class="badge badge-warning">Detail</span></a>.
              </div>
              <div class="h5 mb-3 text-gray-800">
                <span class="font-weight-bold">Standard Bow - 30 M : </span>
                <span class="badge badge-primary"><?= $bestSTD[0]['name'] ?></span>,
                <span class="badge badge-success"> Scores : <?= $bestSTD[0]['total'] ?></span>,
                <span class="badge badge-info"> Date : <?= $bestSTD[0]['date_scores'] ?></span>,
                <a href="<?= base_url('coach/detail_scores/') . $bestSTD[0]['id'] ?>"><span class="badge badge-warning">Detail</span></a>.
              </div>
              <div class="h5 mb-3 text-gray-800">
                <span class="font-weight-bold">Recurve Bow - 70 M : </span>
                <span class="badge badge-primary"><?= $bestREC[0]['name'] ?></span>,
                <span class="badge badge-success"> Scores : <?= $bestREC[0]['total'] ?></span>,
                <span class="badge badge-info"> Date : <?= $bestREC[0]['date_scores'] ?></span>,
                <a href="<?= base_url('coach/detail_scores/') . $bestREC[0]['id'] ?>"><span class="badge badge-warning">Detail</span></a>.
              </div>
              <div class="h5 mb-3 text-gray-800">
                <span class="font-weight-bold">Compound Bow - 50 M : </span>
                <span class="badge badge-primary"><?= $bestCOM[0]['name'] ?></span>,
                <span class="badge badge-success"> Scores : <?= $bestCOM[0]['total'] ?></span>,
                <span class="badge badge-info"> Date : <?= $bestCOM[0]['date_scores'] ?></span>,
                <a href="<?= base_url('coach/detail_scores/') . $bestCOM[0]['id'] ?>"><span class="badge badge-warning">Detail</span></a>.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -- >     