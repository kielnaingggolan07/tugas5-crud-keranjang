@extends('app')

@section('content')
{{-- @if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif --}}
<form action="/product/{{ $product->id }}" method="POST" style="margin-top:10px">
    @method('PUT')
    @csrf
    <div class="mb-3">
      <label for="exampleInputjudul" class="form-label">Judul Buku</label>
      <input type="text" class="form-control" id="exampleInputjudul" aria-describedby="emailHelp" name="product_judul"  value="{{ $product->judul }}">
    </div>
    <div class="mb-3">
      <label for="exampleInputpengarang" class="form-label">Pengarang</label>
      <input type="text" class="form-control" id="exampleInputpengarang" aria-describedby="emailHelp" name="product_pengarang" value="{{ $product->pengarang }}">
    </div>
    <div class="mb-3">
      <label for="exampleInputpenerbit" class="form-label">Penerbit</label>
      <input type="text" class="form-control" id="exampleInputpenerbit" aria-describedby="emailHelp" name="product_penerbit" value="{{ $product->penerbit }}">
    </div>
    <div class="mb-3">
      <label for="exampleInputtahun" class="form-label">Tahun Terbit</label>
      <input type="text" class="form-control" id="exampleInputtahun" aria-describedby="emailHelp" name="product_tahunterbit" value="{{ $product->tahunterbit }}">
    </div>
    <div class="mb-3">
      <label for="exampleInputharga" class="form-label">Harga</label>
      <input type="text" class="form-control" id="exampleInputharga" aria-describedby="emailHelp" name="product_harga" value="{{ $product->harga }}">
    </div>
    <select class="form-select" aria-label="Default select example" style="margin-bottom: 10px" name="category_id">
        <option selected>Pilih Kategori</option>
        @foreach ($categories as $category)
        <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>
            {{ $category->genre }}
        </option>
        {{-- <option value="1">{{ $category->genre }}</option> --}}
        @endforeach
      </select>
    <button type="submit" class="btn btn-primary">Ubah</button>
  </form>
  @endsection