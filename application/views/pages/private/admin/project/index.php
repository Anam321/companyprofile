<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Project</h4>
            <ul class="breadcrumbs">
                <li class="nav-home">
                    <a href="#">
                        <i class="icon-home"></i>
                    </a>
                </li>

                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                    <a href="javascript:void()">Project</a>
                </li>
            </ul>
        </div>
        <div class="page-category">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center">
                                <h4 class="card-title">Project Data</h4>
                                <a class="btn btn-primary btn-round ms-auto"
                                    href="<?= base_url('app-admin/project/form') ?>">
                                    <i class="fa fa-plus"></i>
                                    Add Project
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <!-- Modal -->


                            <div class="table-responsive">
                                <table id="myTables" class="table table-sm table-bordered" style="width: 100%;">
                                    <thead class="table-secondary">
                                        <tr>
                                            <th scope="col" style="text-align: center; vertical-align: middle;">#</th>
                                            <th scope="col" style="text-align: center; vertical-align: middle;">Nama
                                                Project</th>
                                            <th scope="col" style="text-align: center; vertical-align: middle;">Client
                                            </th>
                                            <th scope="col" style="text-align: center; vertical-align: middle;">Alamat
                                            </th>
                                            <th scope="col" style="text-align: center; vertical-align: middle;">Volum
                                            </th>
                                            <th scope="col" style="text-align: center; vertical-align: middle;">Anggaran
                                            </th>
                                            <th scope="col" style="text-align: center; vertical-align: middle;">Timeline
                                            </th>
                                            <th scope="col" style="text-align: center; vertical-align: middle;">Tanggal
                                                Mulai</th>
                                            <th scope="col" style="text-align: center; vertical-align: middle;">Tanggal
                                                Akhir</th>
                                            <th scope="col" style="text-align: center; vertical-align: middle;">Status
                                            </th>
                                            <th scope="col" style="text-align: center; vertical-align: middle;">Aksi
                                            </th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('pages/private/admin/project/js') ?>