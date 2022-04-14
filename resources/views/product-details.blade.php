@extends('layouts.main')

@section('content')
<div class="container mb-3">
    <div class="row">
        <div class="col-md-4">
            <img src="{{ asset($product -> gambar) }}" alt="" width="100%" class="rounded" style="max-height: 350px">
        </div>
        <div class="col-md-8">
            <h1>{{ $product -> nama }}</h1>
            <h3>Rp. {{ number_format($product -> harga) }}</h3>
            <p>{{ $product -> deskripsi }}</p>
            <p>Stok : {{ $product -> stok }}</p>
            <p>Warna : {{ $product -> warna }}</p>
            <p>Kategori : {{ $product -> kategori }}</p>
            <p>Ukuran : {{ $product -> ukuran }}</p>
            <p>
            <form action="/product/{{ $product->id }}" method="POST">
                @method('DELETE')
                @csrf
                <a href="/product/{{ $product -> id }}/edit" class="btn btn-sm btn-warning">Edit</a>
                <button type="submit" class="btn btn-sm btn-danger d-inline">Delete</button>
            </form>
            </p>
        </div>
    </div>
</div>
@endsection