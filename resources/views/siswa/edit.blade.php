@extends('layouts.master')
@section('content')

<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Edit Data Kelas</h6>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <form action="{{ route('siswa.update', $siswa->id) }}" method="POST">
                                @csrf
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <form>
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">NISN</label>
                                                <input class="form-control" type="number" value="{{ $siswa->nisn }}" name="nisn" id="example-text-input">
                                            </div>
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">NIS</label>
                                                <input class="form-control" type="number" value="{{ $siswa->nis }}" name="nis" id="example-text-input">
                                            </div>
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Nama</label>
                                                <input class="form-control" type="text" value="{{ $siswa->nama }}" name="nama" id="example-text-input">
                                            </div>
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Id Kelas</label>
                                                <input class="form-control" type="number" value="{{ $siswa->id_kelas }}" name="id_kelas" id="example-text-input">
                                            </div>
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Alamat</label>
                                                <input class="form-control" type="text" value="{{ $siswa->alamat }}" name="alamat" id="example-text-input">
                                            </div>
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Nomor Telfon</label>
                                                <input class="form-control" type="number" value="{{ $siswa->no_telp }}" name="no_telp" id="example-text-input">
                                            </div>
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Id Spp</label>
                                                <input class="form-control" type="number" value="{{ $siswa->id_spp }}" name="id_spp" id="example-text-input">
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