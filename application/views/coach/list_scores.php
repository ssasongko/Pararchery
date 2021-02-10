<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-md-8 col-sm-12">
            <h1 class="h3 mb-4 text-gray-800">My Scores</h1>
            <!--   <p>Latest data updated on 1 Februari 2021</p> -->
        </div>
        <!--         <div class="col-md-4 col-sm-8">
            <a href="#" class="btn btn-success float-right mr-0">Tambah Atlet</a>
        </div> -->
    </div>

    <div class="row">
        <div class="col-lg-12">

            <?= $this->session->flashdata('message'); ?>

            <div class="table-responsive">
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <!-- <th scope="col">Name</th> -->
                            <th scope="col">Nama</th>
                            <th scope="col">Time</th>
                            <th scope="col">Location</th>
                            <th scope="col">Distance</th>
                            <th scope="col">11</th>
                            <th scope="col">12</th>
                            <th scope="col">13</th>
                            <th scope="col">21</th>
                            <th scope="col">22</th>
                            <th scope="col">23</th>
                            <th scope="col">31</th>
                            <th scope="col">32</th>
                            <th scope="col">33</th>
                            <th scope="col">41</th>
                            <th scope="col">42</th>
                            <th scope="col">43</th>
                            <th scope="col">51</th>
                            <th scope="col">52</th>
                            <th scope="col">53</th>
                            <th scope="col">61</th>
                            <th scope="col">62</th>
                            <th scope="col">63</th>
                            <th scope="col">71</th>
                            <th scope="col">72</th>
                            <th scope="col">73</th>
                            <th scope="col">81</th>
                            <th scope="col">82</th>
                            <th scope="col">83</th>
                            <th scope="col">91</th>
                            <th scope="col">92</th>
                            <th scope="col">93</th>
                            <th scope="col">101</th>
                            <th scope="col">102</th>
                            <th scope="col">103</th>
                            <th scope="col">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($athlete_scores as $a) : ?>
                            <tr>
                                <th scope="row"><?= $i; ?></th>
                                <td><?= $a['name']; ?></td>
                                <td><?= $a['date_scores']; ?></td>
                                <td><?= $a['location']; ?></td>
                                <td><?= $a['distance']; ?></td>
                                <td><?= $a['11']; ?></td>
                                <td><?= $a['12']; ?></td>
                                <td><?= $a['13']; ?></td>
                                <td><?= $a['21']; ?></td>
                                <td><?= $a['22']; ?></td>
                                <td><?= $a['23']; ?></td>
                                <td><?= $a['31']; ?></td>
                                <td><?= $a['32']; ?></td>
                                <td><?= $a['33']; ?></td>
                                <td><?= $a['41']; ?></td>
                                <td><?= $a['42']; ?></td>
                                <td><?= $a['43']; ?></td>
                                <td><?= $a['51']; ?></td>
                                <td><?= $a['52']; ?></td>
                                <td><?= $a['53']; ?></td>
                                <td><?= $a['61']; ?></td>
                                <td><?= $a['62']; ?></td>
                                <td><?= $a['63']; ?></td>
                                <td><?= $a['71']; ?></td>
                                <td><?= $a['72']; ?></td>
                                <td><?= $a['73']; ?></td>
                                <td><?= $a['81']; ?></td>
                                <td><?= $a['82']; ?></td>
                                <td><?= $a['83']; ?></td>
                                <td><?= $a['91']; ?></td>
                                <td><?= $a['92']; ?></td>
                                <td><?= $a['93']; ?></td>
                                <td><?= $a['101']; ?></td>
                                <td><?= $a['102']; ?></td>
                                <td><?= $a['103']; ?></td>
                                <td><?= $a['total']; ?></td>

                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>

    <!-- Pop up detail -->
    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">


                <!-- Modal body -->
                <div class="modal-body table-responsive">
                    <table table>
                        <tr>
                            <td>Nama</td>
                        </tr>
                        <tr>
                            <td>Nur Sasongko</td>
                        </tr>
                    </table>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -- >     