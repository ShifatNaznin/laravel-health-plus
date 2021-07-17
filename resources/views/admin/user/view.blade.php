@extends('layouts.admin')
@section('content')


<div class="main-body">
    <div class="page-wrapper">
        <!-- Page-header start -->
        <div class="page-header card">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="icofont icofont-tasks-alt bg-c-blue"></i>
                        <div class="d-inline">
                            <h4>View User</h4>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="page-header-breadcrumb">
                        <a href="{{route('user')}}" class="btn btn-warning">Back</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page-header end -->
        <!-- Page body start -->
        <div class="page-body">
            <!-- Container-fluid starts -->

            <div>
                <!-- Invoice card start -->
                <div class="card">

                    <div class="card-block">
                        <div class="row invoive-info">

                            <div class="col-md-4 col-sm-6">

                                <table class="table table-responsive invoice-table invoice-order table-borderless">
                                    <tbody>
                                        <tr>
                                            <th>Name :</th>
                                            <td>{{$data->name}}</td>
                                        </tr>
                                        <tr>
                                            <th>Email :</th>
                                            <td>
                                                {{$data->email}}
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>

                        </div>

                    </div>
                </div>

            </div>

        </div>
        <!-- Page body end -->
    </div>
</div>


@endsection