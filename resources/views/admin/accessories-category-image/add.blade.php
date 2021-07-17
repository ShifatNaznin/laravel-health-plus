@extends('layouts.admin')
@section('content')
<div class="main-body">
    <div class="page-wrapper">
        <!-- Page-header start -->
        <div class="page-header card">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="icofont icofont-edit bg-c-blue"></i>
                        <div class="d-inline">
                            <h4>Add Accessories Category Image</h4>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="page-header-breadcrumb">
                        <a href="{{route('accessories_image')}}" class="btn btn-warning">Back</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page-header end -->

        <!-- Page body start -->
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
                    @if(Session::has('error'))
                    <div class="alert alert-danger" role="alert">
                        Error
                    </div>
                    @endif
                    <div class="card">
                        <div class="card-header">
                            {{-- <h5>Basic Form Inputs</h5> --}}


                        </div>

                        <div class="card-block">

                            <form method="post" action="{{route('accessories_image_insert')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Category</label>
                                    <div class="col-sm-9">
                                        <select name="category_id" class="form-control" required>
                                            <option value="">Select Category
                                            </option>
                                            @php
                                            $data=DB::table('accessories_categories')->orderBy('id','DESC')->get();
        
                                            @endphp
                                             
                                            @foreach($data as $category)
                                            @php
                                            $cat=DB::table('categories')->where('id', $category->category_id)->first();
    
                                            @endphp
                                            <option value="{{ $category->category_id}}">{{ $cat->category ?? Null}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Image</label>
                                    <div class="col-sm-9">
                                        <input type="file" name="image" class="form-control" required>
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