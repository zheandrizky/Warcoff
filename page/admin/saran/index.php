<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
            <div class="content-header-left col-md-4 col-12 mb-2">
                <h3 class="content-header-title">Tables</h3>
            </div>
            <div class="content-header-right col-md-8 col-12">
                <div class="breadcrumbs-top float-md-right">
                    <div class="breadcrumb-wrapper mr-1">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a>
                            </li>
                            <li class="breadcrumb-item active">Tables
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body"><!-- Basic Tables start -->


            <!-- Table head options start -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Table head options</h4>
                            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content collapse show">
                            <div class="card-body">
                                <p>Similar to default and inverse tables, use one of two modifier classes <code
                                        class="highlighter-rouge">.thead-default</code> or <code
                                        class="highlighter-rouge">.thead-inverse</code> to make <code
                                        class="highlighter-rouge">&lt;thead&gt;</code>s appear light or dark gray.
                                </p>

                                <br>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Nama User</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <?php
                                    include '../../config.php';
                                    $no = 1;
                                    $data = mysqli_query($conn, "SELECT * 
                                    FROM saran
                                    JOIN user ON saran.id_user = user.id_user
                                    ");
                                    while ($d = mysqli_fetch_array($data)) {
                                        ?>
                                        <tbody>
                                            <tr>
                                                <th scope="row"><?php echo $no++; ?></th>
                                                <td><?php echo $d['nama']; ?></td>
                                                <td>
                                                    <a class="btn btn-info"
                                                        href="index.php?page=detailsaran&id=<?php echo $d['id_saran']; ?>"><i
                                                            class="la la-eye"></i> Detail</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <?php
                                    }
                                    ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Table head options end -->
        </div>
    </div>
</div>