@extends('layouts.dashboard')

@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-4 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between justify-content-md-center justify-content-xl-between flex-wrap mb-4">
                        <div>
                            <p class="mb-2 text-md-center text-lg-left">BAHAN BAKU</p>
                            <h1 class="mb-0">
                                {{$data['materials']}}
                            </h1>
                        </div>
                        <i class="typcn typcn-chart-pie icon-xl text-secondary"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between justify-content-md-center justify-content-xl-between flex-wrap mb-4">
                        <div>
                            <p class="mb-2 text-md-center text-lg-left">PRODUK</p>
                            <h1 class="mb-0">{{$data['products']}}</h1>
                        </div>
                        <i class="typcn typcn-chart-pie icon-xl text-secondary"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
