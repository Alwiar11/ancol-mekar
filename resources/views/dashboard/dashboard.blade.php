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
                    <h1 class="m-0 gradient-background mt-2 mb-2 ml-2 text-light">Dashboard</h1>
                </div>

            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-primary">
                        <div class="inner">
                            <h3>100.000</h3>
                            <p>Daftar Warga</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-ios-people"></i>
                        </div>
                        <a href="/daftarObat" class="small-box-footer">Info Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-primary">
                        <div class="inner">
                            <h3>1</h3>
                            <p>Kelahiran</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-baby-carriage"></i>
                        </div>
                        <a href="/riwayatTransaksi" class="small-box-footer">Info Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-primary">
                        <div class="inner">
                            <h3>1</h3>
                            <p>Kematian</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-ribbon"></i>
                        </div>
                        <a href="/riwayatTransaksi" class="small-box-footer">Info Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-primary">
                        <div class="inner">
                            <h3>1</h3>
                            <p>Pindah Domisili</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-ios-location"></i>
                        </div>
                        <a href="/riwayatTransaksi" class="small-box-footer">Info Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

            </div>
            <div class="row">
                <section class="col-lg-7 connectedSortable">
                </section>
            </div>
        </div>
    </section>
</div>

@endsection