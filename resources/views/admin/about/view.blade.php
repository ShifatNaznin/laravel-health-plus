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
                            <h4>View About</h4>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="page-header-breadcrumb">
                        <a href="{{route('about')}}" class="btn btn-warning">Back</a>
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
                                            <td>Heading</td>
                                            <td>:</td>
                                        
                                            <td>{{$data->heading}}</td>
                                        </tr>
                                        <tr>
                                            <td>Sub Heading</td>
                                            <td>:</td>
                                      
                                            <td class="text-break">
                                                {!!$data->sub_heading!!}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Image</td>
                                            <td>:</td>
                                        
                                            <td>
                                                <img src="{{ asset('/images/'.$data->image) }}" style="width: 100px;">
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