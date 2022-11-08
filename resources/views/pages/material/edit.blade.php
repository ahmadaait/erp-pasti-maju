@extends('layouts.dashboard')

@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-xl-6 grid-margin stretch-card flex-column">
            <div class="row">
                <h3>Edit Bahan Baku</h3>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form method="POST" enctype=multipart/form-data action="{{route('material.update', ['id' => $material->id])}}">
                <div class="card">
                    <div class="card-body">
                        @csrf
                        <input name="_method" type="hidden" value="PATCH">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="code">Kode Bahan Baku</label>
                                    <input id="code" type="text" class="form-control" name="code" placeholder="Kode Bahan Baku" value="{{$material->code}}" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="name">Nama Bahan Baku</label>
                                    <input id="name" type="text" class="form-control" name="name" placeholder="Nama Bahan Baku" value="{{$material->name}}">
                                </div>
                                <div class="form-group">
                                    <label for="qty">Jumlah Bahan Baku</label>
                                    <input id="qty" type="number" class="form-control" name="qty" placeholder="Jumlah Bahan Baku" value="{{$material->qty}}">
                                </div>
                                <div class="form-group">
                                    <label for="price">Harga Bahan Baku</label>
                                    <input id="price" type="number" class="form-control" name="price" placeholder="Harga Bahan Baku" value="{{$material->price}}">
                                </div>
                                <button type="submit" class="btn btn-primary btn-lg" tabindex="4">
                                    Update Bahan Baku
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
