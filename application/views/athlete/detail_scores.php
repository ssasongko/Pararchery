<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <h1 class="h3 mb-4 text-gray-800">Detail Scores</h1>
            <?= $this->session->flashdata('message'); ?>
        </div>
    </div>
    
    

    <div class="row">
        <div class="col-lg-6" style="color: black">
            <form class="user" method="post" action="">

            <h1 class="h4 mb-4 text-center">Information</h1>

            <!-- Hidden input -->
            <!-- <input type="text" class="form-control form-control-user" id="id_athelete" name="id_athelete" value="<?= $myId;?>" hidden>
            <input type="text" class="form-control form-control-user" id="date" name="date" value="<?= time();?>" hidden> -->
            <div class="form-group">
              <label>Nama</label>
              <input class="form-control input-sm" type="text" value="<?= $athlete[0]['name']?>" disabled>
            </div>
            <div class="form-group ">
              <label for="location">Location</label>
              <input type="text" class="form-control" id="location" name="location" value="<?= $athlete[0]['location']?>" disabled>
            </div>   
            <div class="form-group ">
              <label class="text" for="distance">Distance </label>
              <input size="50" type="text" class="form-control" id="distance" name="distance" value="<?= $athlete[0]['distance']?>" disabled> 
               </div>  
            </form> 

        </div>
        <div class="col-lg-6" style="color: black">
            <h1 class="h4 mb-4 text-center">Scores</h1>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text">Round 1</span>
                </div>

               <select class="custom-select" id="ra11" name="ra11" required>
                    <option value="<?= $athlete[0]['11']?>" selected><?= $athlete[0]['11']?></option> 
                    <option value="10">10</option>
                    <option value="9">9</option>
                    <option value="8">8</option>
                    <option value="7">7</option>
                    <option value="6">6</option>
                    <option value="5">5</option>
                    <option value="0">Miss</option>
                </select>

                <select class="custom-select" id="ra12" name="ra12" required>
                    <option value="<?= $athlete[0]['12']?>" selected><?= $athlete[0]['12']?></option> 
                    <option value="10">10</option>
                    <option value="9">9</option>
                    <option value="8">8</option>
                    <option value="7">7</option>
                    <option value="6">6</option>
                    <option value="5">5</option>
                    <option value="0">Miss</option>
                </select>

                <select class="custom-select" id="ra13" name="ra13" required>
                    <option value="<?= $athlete[0]['13']?>" selected><?= $athlete[0]['13']?></option> 
                    <option value="10">10</option>
                    <option value="9">9</option>
                    <option value="8">8</option>
                    <option value="7">7</option>
                    <option value="6">6</option>
                    <option value="5">5</option>
                    <option value="0">Miss</option>
                </select>
            </div>    

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text">Round 2</span>
                </div>

               <select class="custom-select" id="ra21" name="ra21" required>
                    <option value="<?= $athlete[0]['21']?>" selected><?= $athlete[0]['21']?></option> 
                    <option value="10">10</option>
                    <option value="9">9</option>
                    <option value="8">8</option>
                    <option value="7">7</option>
                    <option value="6">6</option>
                    <option value="5">5</option>
                    <option value="0">Miss</option>
                </select>

                <select class="custom-select" id="ra22" name="ra22" required>
                    <option value="<?= $athlete[0]['22']?>" selected><?= $athlete[0]['22']?></option> 
                    <option value="10">10</option>
                    <option value="9">9</option>
                    <option value="8">8</option>
                    <option value="7">7</option>
                    <option value="6">6</option>
                    <option value="5">5</option>
                    <option value="0">Miss</option>
                </select>

                <select class="custom-select" id="ra23" name="ra23" required>
                    <option value="<?= $athlete[0]['23']?>" selected><?= $athlete[0]['23']?></option> 
                    <option value="10">10</option>
                    <option value="9">9</option>
                    <option value="8">8</option>
                    <option value="7">7</option>
                    <option value="6">6</option>
                    <option value="5">5</option>
                    <option value="0">Miss</option>
                </select>
            </div>    

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text">Round 3</span>
                </div>

               <select class="custom-select" id="ra31" name="ra31" required>
                    <option value="<?= $athlete[0]['31']?>" selected><?= $athlete[0]['31']?></option> 
                    <option value="10">10</option>
                    <option value="9">9</option>
                    <option value="8">8</option>
                    <option value="7">7</option>
                    <option value="6">6</option>
                    <option value="5">5</option>
                    <option value="0">Miss</option>
                </select>

                <select class="custom-select" id="ra32" name="ra32" required>
                    <option value="<?= $athlete[0]['32']?>" selected><?= $athlete[0]['32']?></option> 
                    <option value="10">10</option>
                    <option value="9">9</option>
                    <option value="8">8</option>
                    <option value="7">7</option>
                    <option value="6">6</option>
                    <option value="5">5</option>
                    <option value="0">Miss</option>
                </select>

                <select class="custom-select" id="ra33" name="ra33" required>
                    <option value="<?= $athlete[0]['33']?>" selected><?= $athlete[0]['33']?></option> 
                    <option value="10">10</option>
                    <option value="9">9</option>
                    <option value="8">8</option>
                    <option value="7">7</option>
                    <option value="6">6</option>
                    <option value="5">5</option>
                    <option value="0">Miss</option>
                </select>
            </div>  

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text">Round 4</span>
                </div>

               <select class="custom-select" id="ra41" name="ra41" required>
                    <option value="<?= $athlete[0]['41']?>" selected><?= $athlete[0]['41']?></option> 
                    <option value="10">10</option>
                    <option value="9">9</option>
                    <option value="8">8</option>
                    <option value="7">7</option>
                    <option value="6">6</option>
                    <option value="5">5</option>
                    <option value="0">Miss</option>
                </select>

                <select class="custom-select" id="ra42" name="ra42" required>
                    <option value="<?= $athlete[0]['42']?>" selected><?= $athlete[0]['42']?></option> 
                    <option value="10">10</option>
                    <option value="9">9</option>
                    <option value="8">8</option>
                    <option value="7">7</option>
                    <option value="6">6</option>
                    <option value="5">5</option>
                    <option value="0">Miss</option>
                </select>

                <select class="custom-select" id="ra43" name="ra43" required>
                    <option value="<?= $athlete[0]['43']?>" selected><?= $athlete[0]['43']?></option> 
                    <option value="10">10</option>
                    <option value="9">9</option>
                    <option value="8">8</option>
                    <option value="7">7</option>
                    <option value="6">6</option>
                    <option value="5">5</option>
                    <option value="0">Miss</option>
                </select>
            </div>  
        </div>
    </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -- >     