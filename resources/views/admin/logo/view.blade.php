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
                            <h4>View Logo & Title</h4>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="page-header-breadcrumb">
                        <a href="{{route('logo')}}" class="btn btn-warning">Back</a>
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

                            <div class="col-md-12 col-sm-12">

                                <table class="table table-responsive invoice-order table-borderless">
                                    <tbody>
                                        <tr>
                                            <td>Title</td>
                                            <td>:</td>
                                        
                                            <td>{{$data->title}}</td>
                                        </tr>
                                      
                                        <tr>
                                            <td>Logo</td>
                                            <td>:</td>
                                        
                                            <td>
                                                <img src="{{ asset('/images/'.$data->logo) }}" style="width: 100px;">
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