@extends('layouts.admin')
@section('content')
@php
$ur = Auth::user()->user_role;
@endphp
@if ($ur <3) <div class="main-body">
    <div class="page-wrapper">

        <div class="page-body">
            <div class="row">
                <!-- card1 start -->
                <div class="col-md-6 col-xl-3">
                    <div class="card widget-card-1">
                        <div class="card-block-small">
                            <i class="icofont icofont-user bg-c-blue card1-icon"></i>
                            <span class="text-c-blue f-w-600">User</span>
                            <h4>{{Auth::user()->count()}}</h4>
                            <div>
                                {{-- <span class="f-left m-t-10 text-muted">
                                    <i class="text-c-blue f-16 icofont icofont-warning m-r-10"></i>Get more space
                                </span> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- card1 end -->
                <!-- card1 start -->
                <div class="col-md-6 col-xl-3">
                    <div class="card widget-card-1">
                        <div class="card-block-small">
                            <i class="icofont icofont-ui-home bg-c-pink card1-icon"></i>
                            <span class="text-c-pink f-w-600">Revenue</span>
                            <h4>0</h4>
                            <div>
                               
                            </div>
                        </div>
                    </div>
                </div>
                <!-- card1 end -->
                <!-- card1 start -->
                <div class="col-md-6 col-xl-3">
                    <div class="card widget-card-1">
                        <div class="card-block-small">
                            <i class="icofont icofont-warning-alt bg-c-green card1-icon"></i>
                            <span class="text-c-green f-w-600">Fixed issue</span>
                            <h4>0</h4>
                            <div>
                               
                            </div>
                        </div>
                    </div>
                </div>
                <!-- card1 end -->
                <!-- card1 start -->
                <div class="col-md-6 col-xl-3">
                    <div class="card widget-card-1">
                        <div class="card-block-small">
                            <i class="icofont icofont-social-twitter bg-c-yellow card1-icon"></i>
                            <span class="text-c-yellow f-w-600">Followers</span>
                            <h4>0</h4>
                            <div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <!-- card1 end -->

            </div>
        </div>
    </div>


    </div>
    @endif

    @endsection