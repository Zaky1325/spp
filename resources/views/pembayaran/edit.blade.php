@extends('layouts.master')
@section('content')

<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Edit Data Pembayaran</h6>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <form action="{{ route('pembayaran.update', $pembayaran->id) }}" method="POST">
                                @csrf
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <form>
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Id Pembayaran</label>
                                                <input class="form-control" type="number" value="{{ $pembayaran->id_pembayaran }}" name="id_pembayaran" id="example-text-input">
                                            </div>
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Id Petugas</label>
                                                <input class="form-control" type="number" value="{{ $pembayaran->id_petugas }}" name="id_petugas" id="example-text-input">
                                            </div>
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">NISN</label>
                                                <input class="form-control" type="number" value="{{ $pembayaran->nisn }}" name="nisn" id="example-text-input">
                                            </div>
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Tanggal Bayar</label>
                                                <input class="form-control" type="date" value="{{ $pembayaran->tgl_bayar }}" name="tgl_bayar" id="example-text-input">
                                            </div>
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Bulan Dibayar</label>
                                                <input class="form-control" type="text" value="{{ $pembayaran->bulan_dibayar }}" name="bulan_dibayar" id="example-text-input">
                                            </div>
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Tahun DIbayar</label>
                                                <input class="form-control" type="number" value="{{ $pembayaran->tahun_dibayar }}" name="tahun_dibayar" id="example-text-input">
                                            </div>
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Id SPP</label>
                                                <input class="form-control" type="number" value="{{ $pembayaran->id_spp }}" name="id_spp" id="example-text-input">
                                            </div>
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Jumlah Dibayar</label>
                                                <input class="form-control" type="number" value="{{ $pembayaran->jumlah_bayar }}" name="jumlah_bayar" id="example-text-input">
                                            </div>
                                        </form>
                                    </thead>
                                    <tbody>
                                        <button type="submit" class="btn btn-primary">Edit</button>
                                    </tbody>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection