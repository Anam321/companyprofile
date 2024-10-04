<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Service</h4>
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
                    <a href="javascript:void()">Pages</a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                    <a href="javascript:void()">Service</a>
                </li>
            </ul>
        </div>
        <div class="page-category">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center">
                                <h4 class="card-title">Service Data</h4>
                                <a class="btn btn-primary btn-round ms-auto"
                                    href="<?= base_url('app-admin/pages/service/form') ?>">
                                    <i class="fa fa-plus"></i>
                                    Add Service
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <!-- Modal -->


                            <div class="table-responsive">
                                <table id="myTables" class="display table table-striped table-hover"
                                    style="width: 100%;">
                                    <thead>
                                        <tr>
                                            <th style=" vertical-align: middle; width: 20px">No</th>
                                            <th style=" vertical-align: middle;"">Images</th>
                                            <th style=" vertical-align: middle;"">Title</th>
                                            <th style=" vertical-align: middle; width: 15%">Action
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
<?php $this->load->view('pages/private/admin/service/js') ?>