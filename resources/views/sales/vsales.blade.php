@extends('template._master')

@section('title', 'Pembelian Produk')

@section('content')



    <div class="az-content-body pd-lg-l-40 d-flex flex-column">
        <div class="container">
            <div class="az-content-body pd-lg-l-40 d-flex flex-column">
                <h2 class="az-content-label mg-b-12 mt-4">Pembelian Produk</h2>
                <p class="mg-b-20">Data Pembelian</p>
                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        {{-- <button type="button" class="btn btn-danger" data-bs-dismiss="alert" aria-label="Close"></button> --}}
                    </div>
                @endif

                <div class="text-right">
                    <a class="btn btn-primary" href="/sales/create">Tambah
                        Pembelian</a>
                </div>
                <hr class="mg-y-30">

                <div class="table-responsive">
                    <table class="table table-striped mg-b-0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Pembeli</th>
                                <th>Nama Produk</th>
                                <th>Jumlah</th>
                                <th>Harga</th>
                                <th>Total Bayar</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($data as $row)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $row->nama_pembeli }}</td>
                                    <td>{{ $row->produk->nama_produk }}</td>
                                    <td>{{ $row->jumlah }}</td>
                                    <td>{{ $row->produk->harga }}</td>
                                    <td>{{ $row->jumlah * $row->produk->harga }}</td>
                                    <td>
                                        <form action="/sales/{{ $row->id }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"
                                                onclick="return confirm('Yakin ingin menghapus?')">
                                                hapus
                                            </button>
                                            <a href="/sales/{{ $row->id }}/edit" class="btn btn-warning">
                                                edit
                                            </a>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <br>
                    {{ $data->links() }}

                </div>
            </div>
        </div>
    </div>

@endsection
