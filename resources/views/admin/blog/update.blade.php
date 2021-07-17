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
                            <h4>Edit Blog</h4>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="page-header-breadcrumb">
                        <a href="{{route('blog')}}" class="btn btn-warning">Back</a>
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
                        <strong>Update Successfully</strong>
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

                            <form method="post" action="{{route('blog_update')}}" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{$data->id}}">

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Blog Category</label>
                                    <div class="col-sm-9">


                                        @php
                                        $ca=DB::table('blog_categories')->where('id', $data->blogcategory)->first();

                                        @endphp
                                        <select name="blogcategory" class="form-control" required>
                                            <option value="{{$data->blogcategory}}">{{$ca->blogcategory ?? Null}}
                                            </option>
                                            @php
                                            $cat=DB::table('blog_categories')->orderBy('id','DESC')->get();

                                            @endphp
                                            @foreach($cat as $category)
                                            <option value="{{ $category->id}}">{{ $category->blogcategory}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Heading</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="heading" class="form-control"
                                            value="{{$data->heading}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Sub Heading</label>
                                    <div class="col-sm-9">
                                    
                                        <textarea id="my-editor" name="sub_heading" value="{{old('sub_heading')}}" id=""
                                            cols="100" rows="10">{{$data->sub_heading}}</textarea>
                                        <script
                                            src="{{asset('contents/admin')}}/files/assets/pages/ckeditor/ckeditor.js">
                                        </script>
                                        <script>
                                            var options = {
                                          width: "100%",
                                      };
                                      CKEDITOR.replace('my-editor', options);
                                        </script>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Image</label>
                                    <div class="col-sm-7">
                                        <input type="file" class="form-control" name="image">
                                    </div>
                                    <div class="col-sm-2">
                                        <img src="{{ asset('images/'.$data->image) }}" alt=""
                                            style="width:112px; margin: 0px 0px 0px 35px;">
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