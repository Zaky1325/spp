@extends('layouts.master')
@section('content')


<div class="container-fluid py-4">
  <div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0">
      
              <h1>Data Kelas</h1>
              <a href="{{ route('kelas.create') }}" class="btn btn-sm text-white bg-success"><i class='fa fa-edit'> Create</i></a>

          <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
             
            <form action=" {{ route('kelas.store') }}" method="post">
                        @csrf
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">No</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Id Kelas</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Kelas</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">kompetensi_keahlian</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                    
                    </tr>
                  </thead>
                  <tbody>

                        @foreach($kelas as $item)
                        <?php
                        $i = 0;
                        ?>
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{$item->id_kelas}}</td>
                            <td>{{$item->nama_kelas}}</td>
                            <td>{{$item->kompetensi_keahlian}}</td>
                            <td>
                                    <a href="{{ route('kelas.edit', ['id' => $item->id]) }}" class="btn btn-sm text-white bg-warning" data-id="{{ $item->id }}"><i class='fa fa-edit'> Edit</i></a>
                                    <a href="{{ route('kelas.delete', ['id' => $item->id]) }}" data-toggle="modal" data-target="#exampleModal{{$item->id}}" class="btn btn-sm text-white bg-danger"><i class='fa fa-trash'> Delete</i></i></a>
                            </td>
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
