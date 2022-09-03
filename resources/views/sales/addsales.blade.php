@extends('template._master')

@section('title', 'Pembelian Produk')

@section('content')

    <div class="az-content-body pd-lg-l-40 d-flex flex-column">
        <div class="container">
            <div class="az-content-body pd-lg-l-40 d-flex flex-column">
                <h2 class="az-content-label mg-b-12 mt-4">Pembelian Produk</h2>
                <form action="/sales" method="POST">
                    @csrf
                    <div class="form-group">
                        <label class="col-form-label">Nama Pembeli :</label>
                        <input type="text" class="form-control @error('nama_pembeli') is-invalid @enderror" id=""
                            name="nama_pembeli">
                        @error('nama_pembeli')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Nama Produk :</label>
                        <select class="form-control select2 @error('produk_id') is-invalid @enderror" name="produk_id">
                            <option disabled value selected>Pilih Produk</option>
                            @foreach ($produk as $row)
                                <option value="{{ $row->id }}">{{ $row->nama_produk }}</option>
                            @endforeach
                        </select>
                        @error('produk_id')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">jumlah :</label>
                        <input type="number" class="form-control @error('jumlah') is-invalid @enderror" id="jumlah"
                            name="jumlah">
                        @error('jumlah')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    {{-- <div class="form-group">
                        <label class="col-form-label">Harga :</label>
                        <input type="hidden" class="form-control @error('bayar') is-invalid @enderror" id="bayar"
                            name="">
                        @error('bayar')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Total Bayar :</label>
                        <input type="text" class="form-control @error('total_bayar') is-invalid @enderror" id="total"
                            name="total_bayar">
                        @error('total_bayar')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div> --}}
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>

        </div>
    </div>


@endsection
