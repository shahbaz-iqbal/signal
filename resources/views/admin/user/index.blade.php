@extends('admin.layout.app')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <h4 class="page-title">All Users</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->
                <!-- end row-->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Join date</th>
                                            <th>status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if($users)
                                        @foreach($users as $value)
                                        <tr>
                                            <td>{{$value ->id}}</td>
                                            <td>{{$value ->name}}</td>
                                            <td>{{$value ->email }}</td>
                                            <td>{{$value ->created_at }}</td>
                                            <td><span class="badge badge-success">Active</span></td>
                                            <td>
                                                <a href="#" class="btn btn-primary btn-sm px-1 py-0" title="Edit">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a href="{{route('user_chat', $value->id)}}" class="btn btn-info btn-sm px-1 py-0" title="Edit">
                                                    <i class="fa fa-comments"></i>
                                                </a>
                                                <a href="#" class="btn btn-primary btn-sm px-1 py-0" title="view">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                                <a href="#" class="btn btn-danger btn-sm px-1 py-0" title="Edit">
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                        @endif
                                    </tbody>
                                </table>

                            </div> <!-- end card body-->
                        </div> <!-- end card -->
                    </div><!-- end col-->
                </div>
                <!-- end row-->
            </div>
    </section>
</div>
@endsection
@section('script')

@endsection