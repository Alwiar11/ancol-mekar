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
                    <h1 class="m-0 gradient-background mt-2 mb-2 text-light">Detail Warga</h1>
                </div>

            </div>
            <div class="row mb-2">
                <div class="col-sm-12">
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item"><a href="#">Daftar Warga</a></li>
                        <li class="breadcrumb-item active">Detail Warga</li>
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
                            <h3 class="profile-username text-center">Acep Surahman</h3>
                            <p class="text-muted text-center">3214382983132</p>
                            <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item">
                                    <b>Jenis Kelamin</b> <a class="float-right">Laki-Laki</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Nomor Telepon</b> <a class="float-right">0831234123</a>
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

                                        <dt class="col-sm-3">Nama Kepala Keluarga</dt>
                                        <dd class="col-sm-9">Acep Surahman</dd>

                                        <dt class="col-sm-3">Alamat</dt>
                                        <dd class="col-sm-9">Jalan Contoh No. 1, RT 01/RW 01, Desa Contoh</dd>

                                        <dt class="col-sm-3">RT/RW</dt>
                                        <dd class="col-sm-9">01/01</dd>

                                        <dt class="col-sm-3">Kelurahan/Desa</dt>
                                        <dd class="col-sm-9">Desa Contoh</dd>

                                        <dt class="col-sm-3">Kecamatan</dt>
                                        <dd class="col-sm-9">Kecamatan Contoh</dd>

                                        <dt class="col-sm-3">Kota/Kabupaten</dt>
                                        <dd class="col-sm-9">Kota Contoh</dd>

                                        <dt class="col-sm-3">Provinsi</dt>
                                        <dd class="col-sm-9">Provinsi Contoh</dd>

                                        <dt class="col-sm-3">Kode Pos</dt>
                                        <dd class="col-sm-9">12345</dd>

                                        <dt class="col-sm-3">Email</dt>
                                        <dd class="col-sm-9">acep@example.com</dd>

                                        <dt class="col-sm-3">Status Perkawinan</dt>
                                        <dd class="col-sm-9">Belum Menikah</dd>

                                        <dt class="col-sm-3">Pekerjaan</dt>
                                        <dd class="col-sm-9">Karyawan Swasta</dd>

                                        <dt class="col-sm-3">Kewarganegaraan</dt>
                                        <dd class="col-sm-9">WNI</dd>

                                        <dt class="col-sm-3">Agama</dt>
                                        <dd class="col-sm-9">Islam</dd>

                                        <dt class="col-sm-3">Golongan Darah</dt>
                                        <dd class="col-sm-9">O</dd>

                                        <dt class="col-sm-3">Status Kependudukan</dt>
                                        <dd class="col-sm-9">Aktif</dd>
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
                        <h5 class="modal-title" id="editWargaModalLabel">Edit Data Warga</h5>
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
                                    <label for="nama">Nama Lengkap</label>
                                    <input type="text" class="form-control" id="nama" name="nama" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="no_kk">Nomor KK</label>
                                    <input type="text" class="form-control" id="no_kk" name="no_kk" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="nama_kk">Nama Kepala Keluarga</label>
                                    <input type="text" class="form-control" id="nama_kk" name="nama_kk" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="tempat_lahir">Tempat Lahir</label>
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
                                    <label for="alamat">Alamat</label>
                                    <textarea class="form-control" id="alamat" name="alamat" rows="3" required></textarea>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="rt_rw">RT/RW</label>
                                    <input type="text" class="form-control" id="rt_rw" name="rt_rw" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="kelurahan_desa">Kelurahan/Desa</label>
                                    <input type="text" class="form-control" id="kelurahan_desa" name="kelurahan_desa" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="kecamatan">Kecamatan</label>
                                    <input type="text" class="form-control" id="kecamatan" name="kecamatan" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="kota_kabupaten">Kota/Kabupaten</label>
                                    <input type="text" class="form-control" id="kota_kabupaten" name="kota_kabupaten" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="provinsi">Provinsi</label>
                                    <input type="text" class="form-control" id="provinsi" name="provinsi" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="kode_pos">Kode Pos</label>
                                    <input type="text" class="form-control" id="kode_pos" name="kode_pos">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="no_telepon">No Telepon</label>
                                    <input type="text" class="form-control" id="no_telepon" name="no_telepon">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="status_perkawinan">Status Perkawinan</label>
                                    <select class="form-control" id="status_perkawinan" name="status_perkawinan" required>
                                        <option value="">Pilih Status</option>
                                        <option value="Belum Menikah">Belum Menikah</option>
                                        <option value="Menikah">Menikah</option>
                                        <option value="Cerai">Cerai</option>
                                        <option value="Janda/Duda">Janda/Duda</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="pekerjaan">Pekerjaan</label>
                                    <input type="text" class="form-control" id="pekerjaan" name="pekerjaan">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="kewarganegaraan">Kewarganegaraan</label>
                                    <input type="text" class="form-control" id="kewarganegaraan" name="kewarganegaraan" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="agama">Agama</label>
                                    <select class="form-control" id="agama" name="agama" required>
                                        <option value="">Pilih Agama</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen">Kristen</option>
                                        <option value="Katolik">Katolik</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Buddha">Buddha</option>
                                        <option value="Konghucu">Konghucu</option>
                                        <option value="Lainnya">Lainnya</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="golongan_darah">Golongan Darah</label>
                                    <select class="form-control" id="golongan_darah" name="golongan_darah" required>
                                        <option value="">Pilih Golongan Darah</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="AB">AB</option>
                                        <option value="O">O</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="status_kependudukan">Status Kependudukan</label>
                                    <select class="form-control" id="status_kependudukan" name="status_kependudukan" required>
                                        <option value="">Pilih Status</option>
                                        <option value="Penduduk Tetap">Penduduk Tetap</option>
                                        <option value="Penduduk Sementara">Penduduk Sementara</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="foto_ktp">Foto KTP</label>
                                <input type="file" class="form-control-file" id="foto_ktp" name="foto_ktp" required>
                            </div>
                            <div class="form-group">
                                <label for="catatan">Catatan Tambahan</label>
                                <textarea class="form-control" id="catatan" name="catatan" rows="3"></textarea>
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
