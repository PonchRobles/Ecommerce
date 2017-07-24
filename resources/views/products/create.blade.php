@extends("layouts.app");
@section("content")
<div class="cointainer white">
<h1>Nuevo producto</h1>
@include('products.form' ,['product' => $product, 'url' => '/products', 'method' => 'POST'])
</div>
@endsection
