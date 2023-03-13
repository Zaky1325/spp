@extends('layouts.master')
@section('content')


<div class="container-fluid py-4">
  <div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0">
      
              <h1>Data SPP</h1>
              <a href="{{ route('spp.create') }}" class="btn btn-sm text-white bg-success"><i class='fa fa-edit'> Create</i></a>

          <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
             
            <form action=" {{ route('spp.store') }}" method="post">
                        @csrf
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">No</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tahun</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nominal</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                    
                    </tr>
                  </thead>
                  <tbody>

                        @foreach($spp as $item)
                        
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{$item->tahun}}</td>
                            <td>{{$item->nominal}}</td>
                            <td>
                                    <a href="{{ route('spp.edit',  $item->id_spp) }}" class="btn btn-sm text-white bg-warning" data-id="{{ $item->id_spp }}"><i class='fa fa-edit'> Edit</i></a>
                                    <a href="{{ route('spp.delete', $item->id_spp) }}" data-toggle="modal" data-target="#exampleModal{{$item->id_spp}}" class="btn btn-sm text-white bg-danger"><i class='fa fa-trash'> Delete</i></i></a>
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
