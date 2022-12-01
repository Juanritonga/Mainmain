@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Products</h2>
            </div>
            <div class="pull-right">
                @can('product-create')
                <a class="btn btn-success" href="{{ route('products.create') }}"> Create New Product</a>
                @endcan
                @can('product-create')
                <a class="btn btn-success" href="/products/trash">Deleted Data</a>
                @endcan
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
            <th>ID Penjual</th>
            <th>ID Pembeli</th>
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
                <form action="{{ route('products.destroy',$product->id_produk) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('products.show',$product->id_produk) }}">Show</a>
                    @can('product-edit')
                    <a class="btn btn-primary" href="{{ route('products.edit',$product->id_produk) }}">Edit</a>
                    @endcan
                    @csrf
                    @method('DELETE')
                    @can('product-delete')
                    <button type="submit" class="btn btn-danger">Delete</button>
                    @endcan
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    {!! $products->links() !!}
    <p class="text-center text-primary"><small>Tutorial by LaravelTuts.com</small></p>
@endsection