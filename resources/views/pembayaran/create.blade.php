@extends('layouts.master')
@section('content')

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-lite.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-lite.js"></script>

<!--main content start-->
<div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h1>Data Pembayaran</h1>

            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
              <form method="post" action="{{ route('pembayaran.store') }}">
                   @csrf
                <table class="table align-items-center mb-0">
              <thead>
                  
                <div class="form-group">
                 <label for="example-text-input" class="form-control-label">Id Pembayaran</label>
                 <input class="form-control" type="number" name="id_pembayaran" id="example-text-input">
                </div>
                <div class="form-group">
                 <label for="example-text-input" class="form-control-label">Id Petugas</label>
                 <input class="form-control" type="number" name="id_petugas" id="example-text-input">
                </div>
                <div class="form-group">
                 <label for="example-text-input" class="form-control-label">NISN</label>
                 <input class="form-control" type="number" name="nisn" id="example-text-input">
                </div>
                <div class="form-group">
                 <label for="example-text-input" class="form-control-label">Tanggal Bayar</label>
                 <input class="form-control" type="date" name="tgl_bayar" id="example-text-input">
                </div>
                <div class="form-group">
                 <label for="example-text-input" class="form-control-label">Bulan Dibayar</label>
                 <input class="form-control" type="text" name="bulan_dibayar" id="example-text-input">
                </div>
                <div class="form-group">
                 <label for="example-text-input" class="form-control-label">Tahun Dibayar</label>
                 <input class="form-control" type="number" name="tahun_dibayar" id="example-text-input">
                </div>
                <div class="form-group">
                 <label for="example-text-input" class="form-control-label">Id SPP</label>
                 <input class="form-control" type="number" name="id_spp" id="example-text-input">
                </div>
                <div class="form-group">
                 <label for="example-text-input" class="form-control-label">Jumlah Bayar</label>
                 <input class="form-control" type="number" name="jumlah_bayar" id="example-text-input">
                </div>
            </div>
          </thead>
          <tbody>
            <button type="submit" class="btn btn-primary">Create</button>
          </tbody>
        </form>
      </div>
    </div>
  </div>
  </div>
</div>

@endsection

  