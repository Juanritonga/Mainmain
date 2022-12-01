@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Products</h2>
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered">
        <tr>
            <th>ID Produk</th>
            <th>Nama Pakain</th>
            <th>Harga</th>
            <th>Stock</th>
            <th>ID Jenis</th>
            <th>ID Ukuran</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($products as $product)
        <tr>
            <td>{{  $product->id_produk}}</td>
            <td>{{ $product->nama_baju }}</td>
            <td>{{ $product->harga}}</td>
            <td>{{ $product->stok}}</td>
            <td>{{ $product->id_jenis}}</td>
            <td>{{ $product->id_ukuran}}</td>
            <td>
                    <a class="btn btn-primary" href="/products/trash/{{ $product->id_produk }}/restore">Restore</a>
                    <a class="btn btn-primary" href="/products/trash/{{ $product->id_produk }}/forcedeleete">Force Delete</a>
            </td>
        </tr>
        @endforeach
    </table>
    {!! $products->links() !!}
    <p class="text-center text-primary"><small>Tutorial by LaravelTuts.com</small></p>
@endsection