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
                            <h4>View Footer Three</h4>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="page-header-breadcrumb">
                        <a href="{{route('footer_three')}}" class="btn btn-warning">Back</a>
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
                                            <td>Name</td>
                                            <td>:</td>
                                        
                                            <td>{{$data->name}}</td>
                                        </tr>
                                        <tr>
                                            <td>LInk</td>
                                            <td>:</td>
                                      
                                            <td class="text-break">
                                                {!!$data->Link!!}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Image</td>
                                            <td>:</td>
                                        
                                           
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