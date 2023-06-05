@extends('layouts.master')

@section('content')

<div class="row">
    <div class="col-sm-12">
        <div class="home-tab">
            <!-- <div class="tab-content tab-content-basic"> -->
                <!-- <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview"> -->
                    <!-- <div class="row"> -->
                        <!-- <div class="col-sm-12"> -->
                            <!-- <div class="statistics-details d-flex align-items-center justify-content-between"> -->
                                <!-- <div>
                                    <p class="statistics-title">Total Pemesanan</p>
                                    <h3 class="rate-percentage">{{$pemesanan}}</h3>
                                    </p>
                                </div>
                                <div>
                                    <p class="statistics-title">Total Pengiriman</p>
                                    <h3 class="rate-percentage">{{$totalPengiriman}}</h3>
                                </div>
                                <div>
                                    <p class="statistics-title">Outlet Terdaftar</p>
                                    <h3 class="rate-percentage">{{$outlet}}</h3>
                                </div>
                                <div class="d-none d-md-block">
                                    <p class="statistics-title">Buah Terdaftar></p>
                                    <h3 class="rate-percentage">{{$buah}}</h3>
                                    </p>
                                </div>
                                <div class="d-none d-md-block">
                                    <p class="statistics-title">Terkirim</p>
                                    <h3 class="rate-percentage"> {{ $pengirimanBerhasil }}</h3>
                                    <p class="text-success d-flex"><i class="mdi mdi-menu-up"></i><span>pengiriman berhasil</span></p>
                                </div>
                                <div class="d-none d-md-block">
                                    <p class="statistics-title">Gagal</p>
                                    <h3 class="rate-percentage">{{ $pengirimanGagal }}</h3>
                                    <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>pengiriman Gagal</span></p>
                                    </p>
                                </div> -->
                            <!-- </div> -->
                        <!-- </div> -->
                    <!-- </div> -->
                <!-- </div> -->
            <!-- </div> -->
        </div>
    </div>
</div>
<div class="row">
    <!-- ukuran panjang card nya ganti angkanya saja cth: col-lg-1,2,dst-->

    <div class="col-lg-4 d-flex flex-column"> 
        <div class="row flex-grow">
            <div class="col-20 grid-margin stretch-card">
                <div class="card card-rounded">
                    <div class="card-body">
                        <div class="d-sm-flex justify-content-between align-items-start">
                            <div class="statistics-details d-flex align-items-center justify-content-between">
                                <div>
                                    <p class="statistics-title">Jenis - Jenis Buah Yang Ada Di Gudang</p>
                                    <h3 class="rate-percentage">{{$buah}}</h3>
                                    <p class="text-success d-flex"><i class=""></i><span>Jenis Buah</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-4 d-flex flex-column"> 
        <div class="row flex-grow">
            <div class="col-20 grid-margin stretch-card">
                <div class="card card-rounded">
                    <div class="card-body">
                        <div class="d-sm-flex justify-content-between align-items-start">
                            <div class="statistics-details d-flex align-items-center justify-content-between">
                                <div>
                                    <p class="statistics-title">Total Pesanan</p>
                                    <h3 class="rate-percentage">{{$pemesanan}}</h3>
                                    <p class="text-success d-flex"><i class=""></i><span>Pesanan</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="col-lg-4 d-flex flex-column">
        <div class="row flex-grow">
            <div class="col-20 grid-margin stretch-card">
                <div class="card card-rounded">
                    <div class="card-body">
                        <div class="d-sm-flex justify-content-between align-items-start">
                            <div class="statistics-details d-flex align-items-center justify-content-between">
                                <div>
                                    <p class="statistics-title">Total Pengiriman</p>
                                    <h3 class="rate-percentage">{{$totalPengiriman}}</h3>
                                    <p class="text-success d-flex"><i class=""></i><span>Pengiriman</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-4 d-flex flex-column"> 
        <div class="row flex-grow">
            <div class="col-20 grid-margin stretch-card">
                <div class="card card-rounded">
                    <div class="card-body">
                        <div class="d-sm-flex justify-content-between align-items-start">
                            <div class="statistics-details d-flex align-items-center justify-content-between">
                                <div>
                                    <p class="statistics-title">Jadwal Pengiriman</p>
                                    <h3 class="rate-percentage">{{$jadwal}}</h3>
                                    <p class="text-success d-flex"><i class=""></i><span>Jadwal Pengiriman</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-4 d-flex flex-column"> 
        <div class="row flex-grow">
            <div class="col-20 grid-margin stretch-card">
                <div class="card card-rounded">
                    <div class="card-body">
                        <div class="d-sm-flex justify-content-between align-items-start">
                            <div class="statistics-details d-flex align-items-center justify-content-between">
                                <div>
                                    <p class="statistics-title">Pengiriman Terkirim</p>
                                    <h3 class="rate-percentage">{{$pengirimanBerhasil}}</h3>
                                    <p class="text-success d-flex"><i class=""></i><span>Terkirim</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-4 d-flex flex-column"> 
        <div class="row flex-grow">
            <div class="col-20 grid-margin stretch-card">
                <div class="card card-rounded">
                    <div class="card-body">
                        <div class="d-sm-flex justify-content-between align-items-start">
                            <div class="statistics-details d-flex align-items-center justify-content-between">
                                <div>
                                    <p class="statistics-title">Pengiriman Gagal</p>
                                    <h3 class="rate-percentage">{{$pengirimanGagal}}</h3>
                                    <p class="text-success d-flex"><i class=""></i><span>Gagal</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection