<?=$this->extend('template/template')?>
<?=$this->section('content')?>

<h1 class="h3 mb-2 text-gray-800">Data Anggota</h1>
                    <p class="mb-4">Data dibawah ini adalah data anggota yang aktif</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Contoh</h6>
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
                                        <tr>
                                            <td>Depanri Purba</td>
                                            <td>Admin</td>
                                            <td>A</td>
                                            <td><a class="btn btn-danger" href="<?=base_url()?>hapus">Hapus</a> <a class="btn btn-info" href="<?=base_url()?>edit">Edit</a></td>
                                        </tr>
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>



<?=var_dump($nama)?>
<?=$this->endSection()?>