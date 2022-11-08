@extends('layouts.dashboard')

@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-xl-6 grid-margin stretch-card flex-column">
            <div class="row">
                <h3>Tambah Bahan Baku</h3>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form method="POST" enctype=multipart/form-data action="{{route('material.store')}}">
                <div class="card">
                    <div class="card-body">
                        @csrf
                        <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="code">Kode Bahan Baku</label>
                                <input id="code" type="text" class="form-control" name="code" placeholder="Kode Bahan Baku">
                            </div>
                            <div class="form-group">
                                <label for="name">Nama Bahan Baku</label>
                                <input id="name" type="text" class="form-control" name="name" placeholder="Nama Bahan Baku">
                            </div>
                            <div class="form-group">
                                <label for="qty">Jumlah Bahan Baku</label>
                                <input id="qty" type="number" class="form-control" name="qty" placeholder="Jumlah Bahan Baku">
                            </div>
                            <div class="form-group">
                                <label for="price">Harga Bahan Baku</label>
                                <input id="price" type="number" class="form-control" name="price" placeholder="Harga Bahan Baku">
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg" tabindex="4">
                                Tambah Bahan Baku
                            </button>
                        </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
