@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Gallery</h1>
      <a href="{{route('gallery.create')}}" class="btn btn-sm btn-primary shadow-sm">
        <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Gallery
      </a>
    </div>
    
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @else
        
    @endif

    <div class="card-shadow">
        <div class="card-body">
            <form action="{{ route('gallery.store') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="travel_packages_id">Paket Travel</label>
                    <select name="travel_packages_id" required class="form-control">
                        <option value="">Pilih Paket</option>
                        @foreach ($travel_package as $travel_packages)
                            <option value="{{ $travel_packages->id }}">
                                {{ $travel_packages->title }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" name="image" placeholder="Image">
                </div>
                <button type="submit" class="btn btn-primary btn-block">
                    Simpan
                </button>
            </form>
        </div>
    </div>
</div>
    <!-- /.container-fluid -->
@endsection

