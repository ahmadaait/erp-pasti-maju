@extends('layouts.dashboard')

@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-xl-6 grid-margin stretch-card flex-column">
            <div class="row">
                <a href="{{route("material.create")}}" class="btn btn-primary btn-sm btn-icon-text mr-3 text-light text-decoration-none">
                    Tambah
                    <i class="typcn typcn-plus btn-icon-append"></i>                          
                </a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
            <div class="table-responsive pt-3">
                <table class="table table-striped project-orders-table">
                    <thead>
                        <tr>
                            <th class="ml-5">No.</th>
                            <th>Kode Bahan</th>
                            <th>Nama Bahan</th>
                            <th>Jumlah Bahan</th>
                            <th>Harga Bahan</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $no = 1;
                        @endphp
                        @forelse ($materials as $item)
                        <tr>
                            <td>#{{$no++}}</td>
                            <td>{{$item->code}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->qty}}</td>
                            <td>{{$item->price}}</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="{{route('material.edit',['id' => $item->id])}}" class="btn btn-warning btn-sm btn-icon-text mr-3">
                                        Edit
                                        <i class="typcn typcn-edit btn-icon-append"></i>                          
                                    </a>
                                    <a href="{{route('material.delete',['id' => $item->id])}}" class="btn btn-danger btn-sm btn-icon-text mr-3">
                                        Delete
                                        <i class="typcn typcn-delete-outline btn-icon-append"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="100%" class="text-center">
                                <h5>Data Tidak Ditemukan</h5>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection