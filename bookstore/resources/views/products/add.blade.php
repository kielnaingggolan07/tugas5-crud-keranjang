@extends('app')

@section('content')
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<form action="{{ url('/product') }}" method="POST" style="margin-top:10px">
    @csrf
    <div class="mb-3">
      <label for="exampleInputjudul" class="form-label">Judul Buku</label>
      <input type="text" class="form-control" id="exampleInputjudul" aria-describedby="emailHelp" name="product_judul">
    </div>
    <div class="mb-3">
      <label for="exampleInputpengarang" class="form-label">Pengarang</label>
      <input type="text" class="form-control" id="exampleInputpengarang" aria-describedby="emailHelp" name="product_pengarang">
    </div>
    <div class="mb-3">
      <label for="exampleInputpenerbit" class="form-label">Penerbit</label>
      <input type="text" class="form-control" id="exampleInputpenerbit" aria-describedby="emailHelp" name="product_penerbit">
    </div>
    <div class="mb-3">
      <label for="exampleInputtahun" class="form-label">Tahun Terbit</label>
      <input type="text" class="form-control" id="exampleInputtahun" aria-describedby="emailHelp" name="product_tahunterbit">
    </div>
    <div class="mb-3">
      <label for="exampleInputharga" class="form-label">Harga</label>
      <input type="text" class="form-control" id="exampleInputharga" aria-describedby="emailHelp" name="product_harga">
    </div>
    <select class="form-select" aria-label="Default select example" style="margin-bottom: 10px" name="category_id">
        <option selected>Pilih Kategori</option>
        @foreach ($categories as $item)
        <option value="1">{{ $item->genre }}</option>
        @endforeach
      </select>
    <button type="submit" class="btn btn-primary">Tambah</button>
  </form>
  @endsection