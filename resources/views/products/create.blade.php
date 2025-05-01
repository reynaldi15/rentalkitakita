<!-- @extends('layouts.admin')

@section('content')
<h2>Tambah Produk</h2>

<form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
    @csrf
    @include('products.form')
</form>
@endsection -->