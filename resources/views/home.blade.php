@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <img src="{{ url('image/logo.jpg')  }}" class="rounded mx-auto d-block" width="500">
        </div>
        
        @foreach ($barangs as $barang)
            <div class="col-md-3 p-2">
                <div class="card" >
                    <img src="{{ url('image') }}/{{ $barang->gambar }}" class="align-items-lg-center flex-auto"/>
                
                    <div class="card-body">
                      <h5 class="card-title">{{ $barang->nama_barang }}</h5>
                      <p class="card-text">
                        <strong>Harga :</strong> Rp. {{ number_format($barang->harga) }} <br>
                        <hr>
                        <strong>Keterangan :</strong> <br>
                        {{ $barang->keterangan }}
                      </p>
                      <a href="{{ url('pesan') }}/{{ $barang->id }}" class="btn btn-primary"><i class="ri-shopping-cart-line"></i> Pesan </a>
                    </div>
                  </div>

            </div>
        @endforeach
        
    </div>
</div>
@endsection

