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
                    <a href="<?= base_url('app-admin/pages/service') ?>">Service</a>
                </li>
                <li class="nav-item">
                    <a href="javascript:void()">Form</a>
                </li>
            </ul>
        </div>
        <div class="page-category">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center">
                                <h4 class="card-title">Form Service</h4>
                                <a class="btn btn-secondary btn-round ms-auto"
                                    href="<?= base_url('app-admin/pages/service') ?>">
                                    <i class="fas fa-arrow-left"></i>
                                    Back Service
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <form id="form">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <textarea name="body" id="summernote"
                                                        class="form-control form-control-sm" cols="30" rows="10"
                                                        style="height:200px ;"></textarea>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-lg-4">

                                        <div class="card">
                                            <div class="card-body">
                                                <div class="mb-3 row">
                                                    <label for="staticEmail"
                                                        class="col-sm-4 col-form-label">Title</label>
                                                    <div class="col-sm-8">
                                                        <input name="title" type="text"
                                                            class="form-control form-control-sm" id="smallInput" />
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label for="staticEmail"
                                                        class="col-sm-4 col-form-label">Keyword</label>
                                                    <div class="col-sm-8">
                                                        <textarea name="keyword" class="form-control form-control-sm"
                                                            id="smallInput"></textarea>
                                                    </div>
                                                </div>

                                                <div class="mb-3 row">
                                                    <label for="staticEmail"
                                                        class="col-sm-4 col-form-label">Deskripsi</label>
                                                    <div class="col-sm-8">
                                                        <textarea name="meta_deskripsi"
                                                            class="form-control form-control-sm"
                                                            id="smallInput"></textarea>
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label for="staticEmail"
                                                        class="col-sm-4 col-form-label">Images</label>
                                                    <div class="col-sm-8">
                                                        <input name="images" type="file"
                                                            class="form-control form-control-sm" id="smallInput" />
                                                    </div>

                                                </div>
                                                <div class="text-center">
                                                    <button type="submit" class="btn btn-primary btn-sm"
                                                        id="btnSave">Save</button>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('pages/private/admin/service/js') ?>