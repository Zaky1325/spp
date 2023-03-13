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
              <h1>Data SPP</h1>

            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
              <form method="post" action="{{ route('spp.store') }}">
                   @csrf
                <table class="table align-items-center mb-0">
              <thead>
                  
              <form>
                <div class="form-group">
                 <label for="example-text-input" class="form-control-label">Tahun</label>
                 <input class="form-control" type="number" name="tahun" id="example-text-input">
                </div>
                <div class="form-group">
                 <label for="example-text-input" class="form-control-label">Nominal</label>
                 <input class="form-control" type="number" name="nominal" id="example-text-input">
                </div>
              </form>
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

  