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
                            <h4>View Product</h4>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="page-header-breadcrumb">
                        <a href="{{route('product')}}" class="btn btn-warning">Back</a>
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
                                @php
                                $cat=DB::table('categories')->where('id',$data->category)->first();
                                $subcat=DB::table('sub_categories')->where('id',$data->sub_category)->first();

                                @endphp
                                <?php
                                if(!empty($data->image)){
                                    $val= $data->image;
                                  $v=json_decode($val);
                               
                                }
                             
                                 ?>
                                 
                               

                                <table class="table table-responsive invoice-order table-borderless">
                                    <tbody>
                                        <tr>
                                            <td>Category</td>
                                            <td class="space-view">:</td>


                                            <td>{{$cat->category ?? NUll}}</td>
                                        </tr>
                                        <tr>
                                            <td>Sub Category</td>
                                            <td>:</td>
                                            <td>{{$subcat->subcategory ?? NUll}}</td>
                                        </tr>
                                        <tr>
                                            <td>Name</td>
                                            <td>:</td>
                                            <td>{{$data->name}}</td>
                                        </tr>
                                        <tr>
                                            <td>Price</td>
                                            <td>:</td>
                                            <td>{{$data->price}}</td>
                                        </tr>
                                        <tr>
                                            <td>Details</td>
                                            <td>:</td>
                                            <td>{!!$data->details!!}</td>
                                        </tr>
                                        <tr>
                                            <td>Description</td>
                                            <td>:</td>
                                            <td>{!!$data->description!!}</td>
                                        </tr>
                                        <tr>
                                            <td>Image</td>
                                            <td>:</td>
                                           
                                            @if(isset($v))
                                          
                                            <td>
                                                <?php
                                                for ($x=0; $x < count($v) ; $x++) {
                        
                                                ?>
                                                <img src="{{ asset('images') }}/{{$v[$x]}}" style="width: 60px;">
                                                <?php } ?>
                                            </td>
                                            @endif
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