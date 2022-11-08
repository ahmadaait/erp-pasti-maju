@extends('layouts.dashboard')

@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-xl-6 grid-margin stretch-card flex-column">
            <div class="row">
                <h3>Edit Produk</h3>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form method="POST" enctype=multipart/form-data action="{{ route('product.update', ['id' => $product->id]) }}">
                <div class="card">
                    <div class="card-body">
                        @csrf
                        <input name="_method" type="hidden" value="PATCH">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="code">Kode Produk</label>
                                    <input id="code" type="text" class="form-control" name="code" placeholder="Kode Produk" value="{{$product->code}}" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="name">Nama Produk</label>
                                    <input id="name" type="text" class="form-control" name="name" placeholder="Nama Produk" value="{{$product->name}}">
                                </div>
                                <div class="form-group">
                                    <label for="qty">Jumlah Produk</label>
                                    <input id="qty" type="number" class="form-control" name="qty" placeholder="Jumlah Produk" value="{{$product->qty}}">
                                </div>
                                <div class="form-group">
                                    <label for="price">Harga Produk</label>
                                    <input id="price" type="number" class="form-control" name="price" placeholder="Harga Produk" value="{{$product->price}}">
                                </div>
                                <button type="submit" class="btn btn-primary btn-lg" tabindex="4">
                                    Update Produk
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
