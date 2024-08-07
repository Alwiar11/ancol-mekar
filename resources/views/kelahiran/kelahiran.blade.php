@extends('layout.index')
@section('container')
<style>
    .bg-gradient {
        background: linear-gradient(45deg, #0070FF, #F2F5F8);
        border-radius: 10px;
    }
</style>
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2 bg-gradient ml-1 mb-3">
                <div class="col-sm-6">
                    <h1 class="m-0 gradient-background mt-2 mb-2 ml-2 text-light">Kelahiran</h1>
                </div>
            </div>
            <div class="col-sm-6 text-left">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addKelahiranModal">
                    <span style="font-size: larger">+</span> Tambah Kelahiran
                </button>

            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <table id="tables" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NIK</th>
                                <th>Nama Kepala Keluarga</th>
                                <th>Nama Ibu</th>
                                <th>Nama Lengkap</th>
                                <th class="text-center">Detail</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php for ($i = 1; $i <= 20; $i++) : ?>
                                <tr>
                                    <td><?= $i ?></td>
                                    <td>3204554488779</td>
                                    <td>Acep Surahman</td>
                                    <td>Euis</td>
                                    <td>Alexander toto</td>
                                    <td class="text-center"><a href="/detail-kelahiran" style="color: #0070FF;"><i class="ion ion-android-menu"></i></a></td>
                                </tr>
                            <?php endfor; ?>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </section>
</div>

<!-- Modal untuk menambah data warga -->
<div class="modal fade" id="addKelahiranModal" tabindex="-1" role="dialog" aria-labelledby="addKelahiranLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addKelahiranModalLabel">Tambah Data Kelahiran</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="addKelahiranForm">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="nik">NIK</label>
                            <input type="text" class="form-control" id="nik" name="nik" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="nama">Nama Kepala Keluarga</label>
                            <input type="text" class="form-control" id="nama" name="nama" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="no_kk">Nama Ibu</label>
                            <input type="text" class="form-control" id="no_kk" name="no_kk" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="nama_kk">Nama Lengkap</label>
                            <input type="text" class="form-control" id="nama_kk" name="nama_kk" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="tempat_lahir">Kabupaten/Kota</label>
                            <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="tanggal_lahir">Tempat Dilahirkan</label>
                            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
                                <option value="">Pilih Jenis Kelamin</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary" form="addWargaForm">Simpan</button>
            </div>
        </div>
    </div>
</div>

@endsection
