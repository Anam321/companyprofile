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
                    <a href="<?= base_url('app-admin/project') ?>">Project</a>
                </li>

                <li class="separator">
                    <i class="icon-arrow-right"></i>
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
                                <h4 class="card-title">Form Project</h4>
                                <a class="btn btn-secondary btn-round ms-auto"
                                    href="<?= base_url('app-admin/project') ?>">
                                    <i class="fas fa-arrow-left"></i>
                                    Back Project
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="card-body">
                                <table class="table">
                                    <tr>
                                        <td style="width: 200px;">Nama Projek</td>
                                        <td style="width: 30px;">:</td>
                                        <td><?= $projek['nama_projek'] ?></td>
                                    </tr>
                                    <tr>
                                        <td style="width: 200px;">Nama Client</td>
                                        <td style="width: 30px;">:</td>
                                        <td><?= $projek['nama_client'] ?></td>
                                    </tr>
                                    <tr>
                                        <td style="width: 200px;">Alamat</td>
                                        <td style="width: 30px;">:</td>
                                        <td><?= $projek['alamat'] ?></td>
                                    </tr>
                                    <tr>
                                        <td style="width: 200px;">Volume</td>
                                        <td style="width: 30px;">:</td>
                                        <td><?= $projek['volume'] ?></td>
                                    </tr>
                                    <tr>
                                        <td style="width: 200px;">Anggaran</td>
                                        <td style="width: 30px;">:</td>
                                        <td><?= $anggaran ?></td>
                                    </tr>
                                    <tr>
                                        <?php $awal  = new DateTime($projek['tgl_mulai']);
                                        $awal  = new DateTime($projek['tgl_mulai']);
                                        $akhir = new DateTime($projek['tgl_akhir']);
                                        $diff  = date_diff($awal, $akhir);

                                        $timeline = $diff->format('%a hari'); ?>

                                        <td style="width: 200px;">Timeline</td>
                                        <td style="width: 30px;">:</td>
                                        <td><?= $timeline ?>, ( <?= date_indo($projek['tgl_mulai'])  ?> -
                                            <?= date_indo($projek['tgl_akhir'])  ?> )</td>
                                    </tr>
                                    <?php if ($projek['status'] == 1) {
                                        $badge = '<span class="badge bg-warning text-dark">Sedang Di kerjakan</span>';
                                    } else {
                                        $badge = '<span class="badge bg-success text-dark">Selesai</span>';
                                    } ?>
                                    <tr>
                                        <td style="width: 200px;">Status</td>
                                        <td style="width: 30px;">:</td>
                                        <td><?= $badge ?></td>
                                    </tr>

                                </table>
                                <?php if ($projek['status'] == 1) : ?>
                                    <div class="text-center">
                                        <button onclick="done()" type="button" class="btn btn-success me-3"
                                            id="done">Konfirmasi Project Sudah Selesai</button>
                                    </div>
                                <?php endif ?>
                            </div>
                        </div>
                    </div>


                    <div class="card mt-3">
                        <div class="card-body">

                            <div class="row">
                                <div class="col-sm-6">
                                    <button onclick="add()" type="button" class="btn btn-primary btn-sm m-2"><i
                                            class="fa fa-plus me-2"></i>Tambah File Foto</button>

                                    <div class="row" id="images_view">

                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <h5 class="mt-2 mb-3">RAB PROJECT</h5>
                                    <div class="table-responsive">
                                        <table id="myTable" class="table table-sm table-bordered " style="width: 100%;">
                                            <thead class="table-secondary">
                                                <tr style="height: 50px; ">
                                                    <th style="text-align: center; vertical-align: middle;">#</th>
                                                    <th style="text-align: center; vertical-align: middle;">URAIAN
                                                        PEKERJAAN
                                                    </th>
                                                    <th style="text-align: center; vertical-align: middle;">SPESIFIKASI
                                                        BAHAN</th>
                                                    <th style="text-align: center; vertical-align: middle;">VOLUME</th>
                                                    <th style="text-align: center; vertical-align: middle;">SATUAN</th>
                                                    <th style="text-align: center; vertical-align: middle;">HARGA SATUAN
                                                    </th>
                                                    <th style="text-align: center; vertical-align: middle;">TOTAL HARGA
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody id="listuraian">
                                                <?php $ab = 'A';
                                                $sub_total = 0;
                                                foreach ($uraian as $field) : ?>
                                                    <tr>
                                                        <td style="border-right: none;">
                                                        </td>
                                                        <td style="border: none; padding:10px;">
                                                            <h6><?= $ab++ ?>. <?= $field->uraian ?></h6>
                                                        </td>
                                                        <td style="border: none; "></td>
                                                        <td style="border: none;"></td>
                                                        <td style="border: none;"></td>
                                                        <td style="border: none;"></td>
                                                        <td style="border-left: none;"></td>
                                                    </tr>
                                                    <?php $no = 1;
                                                    $total = 0;

                                                    $this->db->where('id_uraian', $field->id);
                                                    $query = $this->db->get('ref_projek_rab')->result();
                                                    foreach ($query as $row) : ?>
                                                        <tr>
                                                            <td><?= $no++ ?></td>
                                                            <td><?= $row->uraian ?></td>
                                                            <td><?= $row->spesifikasi_bahan ?></td>
                                                            <td><?= $row->vol ?></td>
                                                            <td><?= $row->satuan ?></td>
                                                            <td>Rp. <?= number_format($row->harga_satuan) ?></td>
                                                            <td>Rp. <?= number_format($row->tot_harga) ?></td>
                                                        </tr>
                                                        <?php $total += $row->tot_harga; ?>
                                                    <?php endforeach ?>


                                                    <tr>
                                                        <td style="border-right: none;" class="table-warning"></td>
                                                        <td style="border: none;" class="table-warning"></td>
                                                        <td style=" border: none; " class="table-warning"></td>
                                                        <td style=" border: none;" class="table-warning"></td>
                                                        <td style="border: none;" class="table-warning"></td>
                                                        <td style="border: none;" class="table-warning"></td>
                                                        <td style="border-left: none;" class="table-warning">
                                                            <span>Rp. <?= number_format($total) ?></span>
                                                            <?php $sub_total += $total; ?>
                                                        </td>

                                                    </tr>

                                                <?php endforeach ?>
                                                <tr>
                                                    <td style="border-right: none;" class="table-secondary"></td>
                                                    <td style="border: none;" class="table-secondary"></td>
                                                    <td style=" border: none; " class="table-secondary"></td>
                                                    <td style=" border: none;" class="table-secondary"></td>
                                                    <td style="border: none;" class="table-secondary"></td>
                                                    <td style="border: none;  padding-top:10px;"
                                                        class="table-secondary">
                                                        <h6>SUB TOTAL</h6>
                                                    </td>
                                                    <td style="border: none; padding-top:10px;" class="table-secondary">
                                                        <h6>Rp. <?= number_format($sub_total) ?></h6>
                                                    </td>

                                                </tr>
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
    </div>
</div>
<?php $this->load->view('pages/private/admin/project/js') ?>