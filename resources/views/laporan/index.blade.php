@extends('layouts.master')
@section('content')


<div class="container-fluid py-4">
  <div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0">
      
              <h1>Laporan</h1>             

          <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
                        @csrf
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">No</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Id Pembayaran</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Id Petugas</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">NISN</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tanggal Bayar</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Bulan Dibayar</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tahun Dibayar</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Id SPP</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jumlah Bayar</th>
                    
                    </tr>
                  </thead>
                  <tbody>

                        @foreach($laporan as $item)
                        <?php
                        $i = 0;
                        ?>
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{$item->id_pembayaran}}</td>
                            <td>{{$item->id_petugas}}</td>
                            <td>{{$item->nisn}}</td>
                            <td>{{$item->tgl_bayar}}</td>
                            <td>{{$item->bulan_dibayar}}</td>
                            <td>{{$item->tahun_dibayar}}</td>
                            <td>{{$item->id_spp}}</td>
                            <td>{{$item->jumlah_bayar}}</td>
                        </tr>
                      @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
