@extends('dashboard.layouts.main')

@section('container')
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Add District</h1>
        </div> 

        @if (@session()->has('success'))
            <div class="alert alert-primary" role="alert">
                {{ session('success') }}
            </div>
        @endif

        <div class="col-8 card">
            <form action="/dashboard/admin/districts/distritc/edit/{{ $district->id }}" method="POST">
            @csrf
                <div class="card-body">
                    <div class="mb-3">
                        <label for="namaLapangan" class="form-label">Nama Kecamatan</label>
                        <input type="text" name="name" value="{{ old('name', $district->name) }}" class="form-control" id="name" placeholder="Masukkan Nama Kecamatan">
                    </div>
                    <div class="mb-3">
                        <label for="kecamatan" class="form-label">Slug</label>
                        <input type="text" name="slug" value="{{ old('slug', $district->slug) }}" class="form-control" id="slug" placeholder="Slug">
                    </div>
                    <button type="submit" class="btn btn-dark">Submit</button>
                </div>

            </form>
        </div>

@endsection
