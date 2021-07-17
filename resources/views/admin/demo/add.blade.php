@extends('layouts.admin')
@section('content')
<div class="main-body">
    <div class="page-wrapper">
        <!-- Page-header start -->
        <div class="page-header card">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="icofont icofont-file-code bg-c-blue"></i>
                        <div class="d-inline">
                            <h4>Basic Form Inputs</h4>
                          
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

        <!-- Page body start -->
        <div class="page-body">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Basic Form Inputs card start -->
                    <div class="card">
                        <div class="card-header">
                            {{-- <h5>Basic Form Inputs</h5> --}}
                            

                        </div>
                        <div class="card-block">
                            
                            <form>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Simple
                                        Input</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row justify-content-center">
                                   
                                    <div class="col-sm-12 text-center">
                                        <button type="submit" class="btn btn-primary m-b-0">Submit</button>
                                    </div>
                                </div>
                              
                            </form>
                       
                        </div>
                    </div>
                    <!-- Basic Form Inputs card end -->
                
                </div>
            </div>
        </div>
        <!-- Page body end -->
    </div>
</div>
@endsection