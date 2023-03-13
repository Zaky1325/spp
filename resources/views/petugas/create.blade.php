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
              <h1>Data Petugas</h1>

            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
              <form method="post" action="{{ route('petugas.store') }}">
                   @csrf
                <table class="table align-items-center mb-0">
              <thead>
                  
              <form>
                <div class="form-group">
                 <label for="example-text-input" class="form-control-label">Username</label>
                 <input class="form-control" type="text" name="username" id="example-text-input">
                </div>
                <div class="form-group">
                 <label for="example-text-input" class="form-control-label">Password</label>
                 <input class="form-control" type="password" name="password" id="example-text-input">
                </div>
                <div class="form-group">
                 <label for="example-text-input" class="form-control-label">Nama Petugas</label>
                 <input class="form-control" type="text" name="nama_petugas" id="example-text-input">
                </div>
                <div class="form-group">
                 <label for="example-text-input" class="form-control-label">Role</label>
                 <select class="form-control" type="text" name="role" id="example-text-input">
                    <option value="">Pilih role</option>
                    <option value="petugas">Petugas</option>
                    <option value="admin">Admin</option>
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

  