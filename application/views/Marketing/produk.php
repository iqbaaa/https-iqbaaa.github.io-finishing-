    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>


        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <?php $this->view('admin/partial/alertsukses') ?>
                        <?php //$this->view('admin/partial/alerthapus') ?>
                        <?= form_error(); ?>
                        <div class="card">
                            <div class="card-header card-primary">
                                <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#tambah">tambah</button>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">

                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Produk</th>
                                            <th>Qty</th>
                                            <th>Ukuran</th>
                                            <th>Warna</th>
                                            <th>Nomer Pesanan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($produk as $pro) {
                                        ?>
                                            <tr>
                                                <td><?= $no++ ?></td>
                                                <td><?= $pro->namaProduk ?></td>
                                                <td><?= $pro->Qty ?></td>
                                                <td><?= $pro->Ukuran ?></td>
                                                <td><?= $pro->warna ?></td>
                                                <td><?= $pro->nomerPemesanan ?></td>
                                                <td>
                                                    <a type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#edit<?php echo $pro->idProduk; ?>"><i class="fas fa-edit"></i></a>
                                                    <a href="<?= site_url('Produk/delete/' . $pro->idProduk) ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            <!-- Modal ubah -->
                                            <div class="modal fade" id="edit<?= $pro->idProduk ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="myModalLabel">Form Ubah Produk</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="<?= site_url('Produk/edit') ?>" method="POST" role="form" enctype="multipart/form-data">
                                                                <div class="form-group">
                                                                    <label for="">Nama Produk</label>
                                                                    <input class="form-control" type="text" value="<?= $pro->namaProduk ?>" name="namaProduk" placeholder="Nama Produk" />
                                                                    <input type="hidden" name="id" value="<?= $pro->idProduk ?>" id="">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="">Qty</label>
                                                                    <input class="form-control" type="text" value="<?= $pro->Qty ?>" name="Qty" placeholder="Qty" />
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="">Ukuran</label>
                                                                    <input class="form-control" type="text" value="<?= $pro->Ukuran ?>" name="Ukuran" placeholder="Ukuran" />
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="">Warna</label>
                                                                    <input class="form-control" type="text" value="<?= $pro->warna ?>" name="warna" placeholder="warna" />
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="">Nomer Pemesanan</label>
                                                                    <input class="form-control" type="text" value="<?= $pro->nomerPemesanan ?>" name="nomerPemesanan" placeholder="Nomer Pemesanan" />
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                    <button type="submit" name="simpan" class="btn btn-primary">Save changes</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <!-- Modal tambah -->
    <div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Form Tambah Produk</h4>
                </div>
                <div class="modal-body">
                    <form action="<?= site_url('Produk/add') ?>" method="POST" role="form" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="">Nama Produk</label>
                            <input class="form-control" type="text" name="namaProduk" placeholder="Nama Produk" />
                            <input type="hidden" name="id" value="<?= $pro->idProduk ?>" id="">
                        </div>
                        <div class="form-group">
                            <label for="">Qty</label>
                            <input class="form-control" type="text" name="Qty" placeholder="Qty" />
                        </div>
                        <div class="form-group">
                            <label for="">Ukuran</label>
                            <input class="form-control" type="text" name="Ukuran" placeholder="Ukuran" />
                        </div>
                        <div class="form-group">
                            <label for="">Warna</label>
                            <input class="form-control" type="text" name="warna" placeholder="warna" />
                        </div>
                        <div class="form-group">
                            <label for="">Nomer Pemesanan</label>
                            <input class="form-control" type="text" name="nomerPemesanan" placeholder="Nomer Pemesanan" />
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" name="simpan" class="btn btn-primary">Save changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>