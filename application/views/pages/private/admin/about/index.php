<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">About</h4>
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
                    <a href="javascript:void()">About</a>
                </li>
            </ul>
        </div>
        <div class="page-category">
            <form id="form">
                <input type="text" name="old_images" value="<?= $field['images'] ?>" style="display: none;">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">

                                <div class="form-group">
                                    <label for="smallInput">About</label>
                                    <textarea name="body" id="summernote" class="form-control form-control-sm" cols="30"
                                        rows="10" style="height:200px ;"><?= $field['body'] ?></textarea>
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">

                                <div class="mb-3 row">
                                    <label for="staticEmail" class="col-sm-2 col-form-label">Title</label>
                                    <div class="col-sm-10">
                                        <input name="title" type="text" class="form-control form-control-sm"
                                            id="smallInput" value="<?= $field['title'] ?>" />
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="staticEmail" class="col-sm-2 col-form-label">Link</label>
                                    <div class="col-sm-10">
                                        <input name="link" type="text" class="form-control form-control-sm"
                                            id="smallInput" value="<?= $field['link'] ?>" />
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="staticEmail" class="col-sm-2 col-form-label">Deskripsi</label>
                                    <div class="col-sm-10">
                                        <textarea name="deskripsi" class="form-control form-control-sm"
                                            id="smallInput"><?= $field['deskripsi'] ?></textarea>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="staticEmail" class="col-sm-2 col-form-label">Foto</label>
                                    <div class="col-sm-10">
                                        <input name="images" type="file" class="form-control form-control-sm"
                                            id="smallInput" />
                                    </div>

                                </div>
                                <div class="mb-3 row">
                                    <div class="col-sm-12 text-end">
                                        <div id="banner-images">
                                            <img style=" height:100px" class="rounded"
                                                src="<?= base_url() ?>assets/public/img/<?= $field['images'] ?> "
                                                alt="Avatar" title="Change the avatar">
                                        </div>
                                    </div>
                                </div>


                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary btn-sm" id="btnSave">Save</button>
                                </div>
                                <?php $this->load->view('pages/private/admin/about/js') ?>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>