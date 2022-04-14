@extends('layouts.main')

@section('content')
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Products Tables</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/home">Home</a></li>
            <li class="breadcrumb-item">Tables</li>
            <li class="breadcrumb-item active" aria-current="page">Products Tables</li>
        </ol>
    </div>

    <div class="row">
        <div class="col-lg-12 mb-4">
            <!-- Simple Tables -->
            <div class="card">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Products Tables</h6>
                </div>
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th>#</th>
                                <th>Gambar</th>
                                <th>Nama</th>
                                <th>Kategori</th>
                                <th>Harga</th>
                                <th>Stok</th>
                                <th>Warna</th>
                                <th width="270px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                            <tr>
                                <td>{{ $loop -> iteration }}</td>
                                <td>
                                    <img src="{{ asset( $product -> gambar) }}" alt="" height="100px">
                                </td>
                                <td>{{ $product -> nama }}</td>
                                <td>{{ $product -> kategori }}</td>
                                <td>Rp. {{ number_format($product -> harga) }}</td>
                                <td>{{ $product -> stok }}</td>
                                <td>{{ $product -> warna }}</td>

                                <td>
                                    <form action="/product/{{ $product -> id }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <a href="/product/{{ $product -> id }}"
                                            class="btn btn-sm btn-primary">Detail</a>
                                        <a href="/product/{{ $product -> id }}/edit"
                                            class="btn btn-sm btn-warning">Edit</a>
                                        <button type="submit" class="btn btn-sm btn-danger"> Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer"></div>
            </div>
        </div>
    </div>
    <!--Row-->

    <div class="d-flex justify-content-lg-center">
        {{ $products->links() }}
    </div>


</div>
@endsection