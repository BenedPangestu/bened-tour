@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Edit transaction</h1>
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
            <form action="{{ route('transaction.update', $item->id) }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                @method('PUT')
                <div class="form-grup">
                    <label for="transaction_status">Status</label>
                    <select name="transaction_status" required class="form-control">
                        <option value="{{ $item->transaction_status}}">
                            Jangan Diubah({{ $item->transaction_status}})
                        </option>
                        <option value="IN_CART">In Cart</option>
                        <option value="PENDING">Pending</option>
                        <option value="SUCCES">Succes</option>
                        <option value="CANCEL">In Cancel</option>
                        <option value="FAILED">Failed</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary btn-block">
                    Ubah
                </button>
            </form>
        </div>
    </div>
    
</div>

@endsection