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
<form action="{{ url('/category') }}" method="POST" style="margin-top:10px">
    @csrf
    <div class="mb-3">
      <label for="exampleInputjudul" class="form-label">Genre</label>
      <input type="text" class="form-control" id="exampleInputjudul" aria-describedby="emailHelp" name="category_genre">
    </div>
    <div class="mb-3">
      <label for="exampleInputpengarang" class="form-label">Deskripsi</label>
      <input type="text" class="form-control" id="exampleInputpengarang" aria-describedby="emailHelp" name="category_description">
    </div>
    <button type="submit" class="btn btn-primary">Tambah</button>
  </form>
  @endsection