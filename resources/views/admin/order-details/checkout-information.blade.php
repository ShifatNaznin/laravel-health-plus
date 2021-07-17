@extends('layouts.admin')
@section('content')
@push('css')
<link rel="stylesheet" type="text/css"
    href="{{asset('contents/admin')}}/files/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" type="text/css"
    href="{{asset('contents/admin')}}/files/assets/pages/data-table/css/buttons.dataTables.min.css">
<link rel="stylesheet" type="text/css"
    href="{{asset('contents/admin')}}/files/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css">
@endpush


<!-- Main-body start -->
<div class="main-body">
    <div class="page-wrapper">
        <!-- Page-header start -->
        <div class="page-header card">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="icofont icofont-table bg-c-blue"></i>
                        <div class="d-inline">
                            <h4>Checkout Information</h4>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="page-header-breadcrumb">

                    </div>
                </div>
            </div>
        </div>
        <!-- Page-header end -->

        <!-- Page-body start -->
        <div class="page-body">
            <div class="row">
                <div class="col-sm-12">
                    @if(Session::has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Added Successfully</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                    @if(Session::has('success-del'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Delete Successfully</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                    @if(Session::has('error'))
                    <div class="alert alert-danger" role="alert">
                        Error
                    </div>
                    @endif
                    <div class="card">
                        <div class="card-header">

                            <div class="card-header-right"><i class="icofont icofont-spinner-alt-5"></i></div>
                        </div>
                        <div class="card-block">
                            <div class="dt-responsive table-responsive">
                                <table id="simpletable" class="table table-striped table-bordered nowrap">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Company Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Address</th>
                                            <th>City</th>
                                            <th>Zip Code</th>
                                            <th>Other Information</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                        $c=1;
                                        @endphp
                                        @foreach ($value as $data)

                                        <tr>
                                            <td>{{$c}}</td>

                                            <td>{{$data->f_name}} {{$data->l_name}}</td>
                                            <td>{{$data->c_name}}</td>
                                            <td>{{$data->email}}</td>
                                            <td>{{$data->phone}}</td>
                                            <td>{!!$data->address!!}</td>
                                            <td>{{$data->city}}</td>
                                            <td>{{$data->zip}}</td>
                                            <td>{!!$data->other_information!!}</td>





                                        </tr>
                                        @php
                                        $c++;
                                        @endphp
                                        @endforeach
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- Zero config.table end -->

                </div>
            </div>
        </div>
        <!-- Page-body end -->
    </div>
</div>



@push('js')
<script src="{{asset('contents/admin')}}/files/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="{{asset('contents/admin')}}/files/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js">
</script>
<script src="{{asset('contents/admin')}}/files/assets/pages/data-table/js/jszip.min.js"></script>
<script src="{{asset('contents/admin')}}/files/assets/pages/data-table/js/pdfmake.min.js"></script>
<script src="{{asset('contents/admin')}}/files/assets/pages/data-table/js/vfs_fonts.js"></script>
<script src="{{asset('contents/admin')}}/files/bower_components/datatables.net-buttons/js/buttons.print.min.js">
</script>
<script src="{{asset('contents/admin')}}/files/bower_components/datatables.net-buttons/js/buttons.html5.min.js">
</script>
<script src="{{asset('contents/admin')}}/files/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js">
</script>
<script
    src="{{asset('contents/admin')}}/files/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js">
</script>
<script
    src="{{asset('contents/admin')}}/files/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js">
</script>
@endpush
@endsection