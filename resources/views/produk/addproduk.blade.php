@extends('template._master')

@section('title', 'Tambah Produk')

@section('content')

    <div class="az-content-body pd-lg-l-40 d-flex flex-column">
        <div class="container">
            <div class="az-content-body pd-lg-l-40 d-flex flex-column">
                <h2 class="az-content-label mg-b-12 mt-4">Tambah Produk</h2>
                <form action="/produk" method="POST">
                    @csrf
                    <div class="form-group">
                        <label class="col-form-label">Nama Produk :</label>
                        <input type="text" class="form-control @error('nama_produk') is-invalid @enderror" id=""
                            name="nama_produk">
                        @error('nama_produk')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Jenis Produk :</label>
                        <input type="text" class="form-control @error('jenis_produk') is-invalid @enderror"
                            id="" name="jenis_produk">
                        @error('jenis_produk')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Stok :</label>
                        <input type="number" class="form-control @error('stok') is-invalid @enderror" id=""
                            name="stok">
                        @error('stok')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Harga Produk :</label>
                        <input type="number" class="form-control @error('harga') is-invalid @enderror" id=""
                            name="harga">
                        @error('harga')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Deskripsi :</label>
                        <input type="text" class="form-control @error('deskripsi') is-invalid @enderror" id=""
                            name="deskripsi">
                        @error('deskripsi')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>

        </div>
    </div>

@endsection
