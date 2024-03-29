@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Gallery Travel</h1>
      <a href="{{route('gallery.create')}}" class="btn btn-sm btn-primary shadow-sm">
        <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Gallery
      </a>
    </div>
    
    <div class="row">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Travel</th>
                  <th>Gambar</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @php
                    $no = '0';
                @endphp
                @forelse ($items as $item)
                @php
                    $no++;
                @endphp
                <tr>
                  <td>{{ $no }}</td>
                  <td>{{ $item->travel_package->title }}</td>
                  <td>
                    <img src="{{ Storage::url($item->image) }}" alt="" style="width: 150px" class="img-thumbnnail"/>
                  </td>
                  <td>
                    <a href="{{route('gallery.edit', $item->id)}}" class="btn btn-info">
                      <i class="far fa-edit">
                      </i>
                    </a>
                    <form action="{{route('gallery.destroy', $item->id)}}" method="post" class="d-inline">
                      @csrf
                      @method('delete')
                      <button class="btn-danger btn">
                        <i class="fa fa-trash"> 
                        </i>
                      </button>
                    </form>
                  </td>
                </tr>
                @empty
                    <tr>
                      <td colspan="7" class="text-center">
                        Data Kosong
                      </td>
                    </tr>
                @endforelse
              </tbody>
            </table>
          </div>
        </div>
    </div>
    
</div>
    <!-- /.container-fluid -->
@endsection

