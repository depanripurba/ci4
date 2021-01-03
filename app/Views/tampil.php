<?=$this->extend("template/template") ?>

<?= $this->section('content') ?>
<!-- Awal dari section -->


<h1 class="h3 mb-2 text-gray-800">Data Pegawai</h1>
                    <p class="mb-4">dibawah ini adalah daftar nama pegawai yang aktif</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Pegawai</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Jabatan</th>
                                            <th>Golongan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach($nama as $data){
                                        ?>
                                        <tr>
                                            <td><?=$data["nama"]?></td>
                                            <td><?=$data["jabatan"]?></td>
                                            <td><?=$data["golongan"]?></td>
                                            <td><a class="btn btn-danger" href="<?=base_url()?>/hapus/<?=$data['id']?>">Hapus</a> <a class="btn btn-info" href="<?=base_url()?>/edit/<?=$data['id']?>">Edit</a></td>
                                        </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>







<!-- Akhir dari section  -->
<?= $this->endSection() ?>
