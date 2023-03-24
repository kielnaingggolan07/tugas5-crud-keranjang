{{-- 
@extends('app')

@section('content')
    <a href="{{ url('/product/add') }}">
    <button class="btn btn-primary mt-4" type="button">+ Tambah Produk</button>
    </a>
@foreach ($products as $item)
    <body>
        <div class="card mt-3" style="width: 18rem;">
            <div class="card-body">
                <div class="card-title">
                <b> {{ $item->judul }} </b> <span><h6 class="card-subtitle text-muted" style="font-size:10px">{{ $item->category->genre }}</h6></span>
                </div>
                <hr> 
                <div class="card-row" style="display:flex">
                    <div class="card-col card-text-left" style="font-size: 10px; width:65%; text-align:left">
                        <p>Pengarang: {{ $item->pengarang }}</p>
                        <p>Penerbit: {{ $item->penerbit }}</p>
                        <p>Tahun Terbit: {{ $item->tahunterbit }}</p>
                    </div>
                    <div class="card-col card-text-right" style="font-size: 10px; width:35%; text-align:right">
                        <p>Harga: Rp. {{ $item->harga }}</p>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <footer>
    </footer>
  @endforeach
@endsection --}}