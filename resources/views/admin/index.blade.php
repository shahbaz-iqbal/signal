@extends('admin.layout.app')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <h4 class="page-title">Dashboard</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-md-6 col-xl-3">
                        <div class="widget-rounded-circle card-box">
                            <div class="row">
                                <div class="col-6">
                                    <div class="avatar-lg rounded-circle bg-soft-primary border-primary border">
                                        <i class="fe-heart font-22 avatar-title text-primary"></i>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="text-right">
                                        <h3 class="mt-1"><span data-plugin="counterup">58,947</span></h3>
                                        <p class="text-muted mb-1 text-truncate">Users</p>
                                    </div>
                                </div>
                            </div> <!-- end row-->
                        </div> <!-- end widget-rounded-circle-->
                    </div> <!-- end col-->

                    <div class="col-md-6 col-xl-3">
                        <div class="widget-rounded-circle card-box">
                            <div class="row">
                                <div class="col-6">
                                    <div class="avatar-lg rounded-circle bg-soft-success border-success border">
                                        <i class="fe-shopping-cart font-22 avatar-title text-success"></i>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="text-right">
                                        <h3 class="text-dark mt-1"><span data-plugin="counterup">127</span></h3>
                                        <p class="text-muted mb-1 text-truncate">Groups</p>
                                    </div>
                                </div>
                            </div> <!-- end row-->
                        </div> <!-- end widget-rounded-circle-->
                    </div> <!-- end col-->

                    <div class="col-md-6 col-xl-3">
                        <div class="widget-rounded-circle card-box">
                            <div class="row">
                                <div class="col-6">
                                    <div class="avatar-lg rounded-circle bg-soft-info border-info border">
                                        <i class="fe-bar-chart-line- font-22 avatar-title text-info"></i>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="text-right">
                                        <h3 class="text-dark mt-1"><span data-plugin="counterup">58</span></h3>
                                        <p class="text-muted mb-1 text-truncate">Conversion</p>
                                    </div>
                                </div>
                            </div> <!-- end row-->
                        </div> <!-- end widget-rounded-circle-->
                    </div> <!-- end col-->

                    <div class="col-md-6 col-xl-3">
                        <div class="widget-rounded-circle card-box">
                            <div class="row">
                                <div class="col-6">
                                    <div class="avatar-lg rounded-circle bg-soft-warning border-warning border">
                                        <i class="fe-eye font-22 avatar-title text-warning"></i>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="text-right">
                                        <h3 class="text-dark mt-1"><span data-plugin="counterup">78</span></h3>
                                        <p class="text-muted mb-1 text-truncate">Blocked</p>
                                    </div>
                                </div>
                            </div> <!-- end row-->
                        </div> <!-- end widget-rounded-circle-->
                    </div> <!-- end col-->
                </div>
                <!-- end row-->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Recent Users</h4>
                                <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Address</th>
                                            <th>Join date</th>
                                            <th>status</th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                        <tr>
                                            <td>8723423</td>
                                            <td>Tiger Nixon</td>
                                            <td>Architect@demo.com</td>
                                            <td>Edinburgh</td>
                                            <td>2011/04/25</td>
                                            <td><span class="badge badge-success">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td>8723423</td>
                                            <td>Tiger Nixon</td>
                                            <td>Architect@demo.com</td>
                                            <td>Edinburgh</td>
                                            <td>2011/04/25</td>
                                            <td><span class="badge badge-success">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td>8723423</td>
                                            <td>Tiger Nixon</td>
                                            <td>Architect@demo.com</td>
                                            <td>Edinburgh</td>
                                            <td>2011/04/25</td>
                                            <td><span class="badge badge-danger">Blocked</span></td>
                                        </tr>
                                        <tr>
                                            <td>8723423</td>
                                            <td>Tiger Nixon</td>
                                            <td>Architect@demo.com</td>
                                            <td>Edinburgh</td>
                                            <td>2011/04/25</td>
                                            <td><span class="badge badge-success">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td>8723423</td>
                                            <td>Tiger Nixon</td>
                                            <td>Architect@demo.com</td>
                                            <td>Edinburgh</td>
                                            <td>2011/04/25</td>
                                            <td><span class="badge badge-success">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td>8723423</td>
                                            <td>Tiger Nixon</td>
                                            <td>Architect@demo.com</td>
                                            <td>Edinburgh</td>
                                            <td>2011/04/25</td>
                                            <td><span class="badge badge-success">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td>8723423</td>
                                            <td>Tiger Nixon</td>
                                            <td>Architect@demo.com</td>
                                            <td>Edinburgh</td>
                                            <td>2011/04/25</td>
                                            <td><span class="badge badge-success">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td>8723423</td>
                                            <td>Tiger Nixon</td>
                                            <td>Architect@demo.com</td>
                                            <td>Edinburgh</td>
                                            <td>2011/04/25</td>
                                            <td><span class="badge badge-success">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td>8723423</td>
                                            <td>Tiger Nixon</td>
                                            <td>Architect@demo.com</td>
                                            <td>Edinburgh</td>
                                            <td>2011/04/25</td>
                                            <td><span class="badge badge-success">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td>8723423</td>
                                            <td>Tiger Nixon</td>
                                            <td>Architect@demo.com</td>
                                            <td>Edinburgh</td>
                                            <td>2011/04/25</td>
                                            <td><span class="badge badge-success">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td>8723423</td>
                                            <td>Tiger Nixon</td>
                                            <td>Architect@demo.com</td>
                                            <td>Edinburgh</td>
                                            <td>2011/04/25</td>
                                            <td><span class="badge badge-success">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td>8723423</td>
                                            <td>Tiger Nixon</td>
                                            <td>Architect@demo.com</td>
                                            <td>Edinburgh</td>
                                            <td>2011/04/25</td>
                                            <td><span class="badge badge-success">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td>8723423</td>
                                            <td>Tiger Nixon</td>
                                            <td>Architect@demo.com</td>
                                            <td>Edinburgh</td>
                                            <td>2011/04/25</td>
                                            <td><span class="badge badge-success">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td>8723423</td>
                                            <td>Tiger Nixon</td>
                                            <td>Architect@demo.com</td>
                                            <td>Edinburgh</td>
                                            <td>2011/04/25</td>
                                            <td><span class="badge badge-success">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td>8723423</td>
                                            <td>Tiger Nixon</td>
                                            <td>Architect@demo.com</td>
                                            <td>Edinburgh</td>
                                            <td>2011/04/25</td>
                                            <td><span class="badge badge-success">Active</span></td>
                                        </tr>

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