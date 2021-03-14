@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Paket Travel</h1>
      <a href="{{route('travel-package.create')}}" class="btn btn-sm btn-primary shadow-sm">
        <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Paket
      </a>
    </div>
    
    <div class="row">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Title</th>
                  <th>Country</th>
                  <th>Location</th>
                  <th>Type</th>
                  <th>Depature Date</th>
                  <th>Type</th>
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
                  <td>{{ $item->title }}</td>
                  <td>{{ $item->country }}</td>
                  <td>{{ $item->location }}</td>
                  <td>{{ $item->type }}</td>
                  <td>{{ $item->departure_date }}</td>
                  <td>{{ $item->type }}</td>
                  <td>
                    <a href="{{route('travel-package.edit', $item->id)}}" class="btn btn-info">
                      <i class="far fa-edit">
                      </i>
                    </a>
                    <form action="{{route('travel-package.destroy', $item->id)}}" method="post" class="d-inline">
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

