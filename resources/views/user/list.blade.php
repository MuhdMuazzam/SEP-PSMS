@extends('master')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Users</h1>
        <a href="user/create" class="btn btn-sm btn-primary" >
            <i class="fas fa-plus"></i> Add New
        </a>
    </div>

    {{-- Alert Messages --}}
    @if (session('success'))
        <span class="text-sucess">
            {{ session('success')}}
        </span>
    @endif
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">All Users</h6>
            
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($users as $user)
                           <tr>
                               <td>{{$user->name}}</td>
                               <td>{{$user->email}}</td>
                               <td style="display: flex">
                                   <a href="{{ route('user.edit', ['user' => $user->id]) }}" class="btn btn-primary m-2">
                                   <i class="fa-solid fa-pen"></i> Edit
                                   </a>
                                   <form method="POST" action="{{ route('user.destroy', ['user' => $user->id]) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger m-2" type="submit">
                                            <i class="fa fa-trash"></i> Delete
                                        </button>
                                   </form>
                               </td>
                           </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>


@endsection