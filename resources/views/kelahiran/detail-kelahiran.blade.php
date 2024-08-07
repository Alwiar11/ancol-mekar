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
            <div class="row mb-2 bg-gradient ml-1">
                <div class="col-sm-6">
                    <h1 class="m-0 gradient-background mt-2 mb-2 text-light">Detail Kelahiran</h1>
                </div>

            </div>
            <div class="row mb-2">
                <div class="col-sm-12">
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item"><a href="#">Daftar Kelahiran</a></li>
                        <li class="breadcrumb-item active">Detail Kelahiran</li>
                    </ol>
                </div>
            </div>

        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">

                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img class="profile-user-img img-fluid img-circle" src="dist/img/user2-160x160.jpg" alt="User profile picture">
                            </div>
                            <h3 class="profile-username text-center">Alexander toto</h3>
                            <p class="text-muted text-center">3204554488779</p>
                            <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item">
                                    <b>Jenis Kelamin</b> <a class="float-right">Laki-Laki</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Tempat Dilahirkan</b> <a class="float-right">Bandung</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Tanggal Lahir</b> <a class="float-right">01 Januari 1999</a>
                                </li>
                            </ul>

                        </div>

                    </div>

                </div>

                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header p-2">
                            <ul class="nav nav-pills">
                                <li class="nav-item"><a class="nav-link active" href="#biodata" data-toggle="tab">Biodata</a></li>
                                <li class="nav-item"><a class="nav-link" href="#cetakDokumen" data-toggle="tab">Cetak Dokumen</a></li>

                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="active tab-pane" id="biodata">
                                    <dl class="row">

                                        <dt class="col-sm-3">Nomor KK</dt>
                                        <dd class="col-sm-9">123456789012</dd>

                                        <dt class="col-sm-3">NIK</dt>
                                        <dd class="col-sm-9">3204554488779</dd>

                                        <dt class="col-sm-3">Nama Lengkap</dt>
                                        <dd class="col-sm-9">Alexander toto</dd>

                                        <dt class="col-sm-3">Nama Kepala Keluarga</dt>
                                        <dd class="col-sm-9">Acep Surahman</dd>

                                        <dt class="col-sm-3">Nama Ibu</dt>
                                        <dd class="col-sm-9">Euis</dd>

                                        <dt class="col-sm-3">Tempat Dilahirkan</dt>
                                        <dd class="col-sm-9">Bandung</dd>

                                        <dt class="col-sm-3">Tanggal Lahir</dt>
                                        <dd class="col-sm-9">01 januari 1999</dd>

                                        <dt class="col-sm-3">Kabupaten/Kota</dt>
                                        <dd class="col-sm-9">Kota Contoh</dd>

                                    </dl>
                                    <div class="text-right">
                                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapusWargaModal">
                                            Hapus
                                        </button>
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editWargaModal">
                                            Edit
                                        </button>
                                    </div>
                                </div>

                                <div class="tab-pane" id="cetakDokumen">
                    <div class="container">
                         <div class="row">
                             <div class="col-md-12">
                                  <div class="card">
                                      <div class="card-body">
                                             <p class="card-text">Pilih dokumen yang ingin dicetak:</p>
                                                <div class="btn-group" role="group" aria-label="Cetak Dokumen">
                                                 <button type="button" class="btn btn-primary mr-2">Cetak Keterangan Akta Kelahiran Anak</button>
                                                 <button type="button" class="btn btn-primary mr-2">Cetak Keterangan Akta Kematian</button>
                                                 <button type="button" class="btn btn-primary">Cetak Keterangan Pindah Domisili</button>
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

                </div>

            </div>

        </div>


        <!-- Modal Hapus Warga -->
        <div class="modal fade" id="hapusWargaModal">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Konfirmasi</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Anda yakin untuk menghapus data ini?</p>
                    </div>
                    <div class="modal-footer justify-content-end">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Kembali</button>
                        <button type="button" class="btn btn-danger">Hapus</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Edit Warga -->
        <div class="modal fade" id="editWargaModal" tabindex="-1" role="dialog" aria-labelledby="editWargaModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editWargaModalLabel">Edit Data Kelahiran</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="addWargaForm">
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
                                    <label for="tempat_lahir">Tempat Dilahirkan</label>
                                    <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="tanggal_lahir">Tanggal Lahir</label>
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
                                <div class="form-group col-md-6">
                                    <label for="alamat">Kabupaten/Kota</label>
                                    <textarea class="form-control" id="alamat" name="alamat" rows="3" required></textarea>
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
    </section>
</div>

@endsection
