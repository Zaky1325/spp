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
                            <form action="{{ route('spp.update', $spp->id_spp) }}" method="POST">
                                @csrf
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <form>
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Tahun</label>
                                                <input class="form-control" type="number" value="{{ $spp->tahun }}" name="tahun" id="example-text-input">
                                            </div>
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Nominal</label>
                                                <input class="form-control" type="number" value="{{ $spp->nominal }}" name="nominal" id="example-text-input">
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