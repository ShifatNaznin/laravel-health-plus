@extends('layouts.admin')
@section('content')
@push('css')

<link href="{{asset('contents/admin')}}/files/assets/pages/jquery.filer/css/jquery.filer.css" type="text/css"
    rel="stylesheet" />
<link href="{{asset('contents/admin')}}/files/assets/pages/jquery.filer/css/themes/jquery.filer-dragdropbox-theme.css"
    type="text/css" rel="stylesheet" />
@endpush
<div class="main-body">
    <div class="page-wrapper">
        <!-- Page-header start -->
        <div class="page-header card">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="icofont icofont-edit bg-c-blue"></i>
                        <div class="d-inline">
                            <h4>Edit Product</h4>

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

                            <form method="post" action="{{route('product_update')}}" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{$data->id}}">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Category</label>
                                    <div class="col-sm-9">
                                        @php
                                        $scat=DB::table('categories')->where('id',$data->category)->first();
                                        $asubcat=DB::table('sub_categories')->where('id',$data->sub_category)->first();
                                        @endphp
                                        <select name="category" id="cat-id" class="form-control">
                                            <option value="{{$data->category}}">{{$scat->category ?? NUll}}
                                            </option>
                                            @php
                                            $cat=DB::table('categories')->orderBy('id','DESC')->get();

                                            @endphp
                                            @foreach($cat as $category)
                                            <option value="{{ $category->id}}">{{ $category->category}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Sub Category</label>
                                    <div class="col-sm-9">
                                        <select name="sub_category" id="subcategory" class="form-control">
                                            <option value="{{$data->sub_category}}">{{$asubcat->subcategory ?? NUll}}
                                            </option>
                                            {{-- @php
                                            $cat=DB::table('categories')->orderBy('id','DESC')->get();

                                            @endphp
                                            @foreach($cat as $category)
                                            <option value="{{ $category->id}}">{{ $category->category}}</option>
                                            @endforeach --}}
                                        </select>
                                       
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="name" class="form-control" value="{{$data->name}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">price</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="price" class="form-control" value="{{$data->price}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">details</label>
                                    <div class="col-sm-9">

                                        <textarea id="my-editor" name="details" value="{{$data->details}}" id=""
                                            cols="100" rows="10">{{$data->details}}</textarea>
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
                                    <label class="col-sm-2 col-form-label">description</label>
                                    <div class="col-sm-9">

                                        <textarea id="my-editor2" name="description" value="{{$data->description}}"
                                            id="" cols="100" rows="10">{{$data->description}}</textarea>
                                        <script
                                            src="{{asset('contents/admin')}}/files/assets/pages/ckeditor/ckeditor.js">
                                        </script>
                                        <script>
                                            var options = {
                                                width: "100%",
                                            };
                                            CKEDITOR.replace('my-editor2', options);

                                        </script>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Image</label>
                                    <div class="col-sm-9">
                                        <input type="file" name="image[]" id="filer_input" multiple="multiple">
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
@push('js')
<script>
    $(document).ready(function () {
        $('#cat-id').on('change', function () {

            // alert('ok');
            // console.log($(this).children("option:selected").val());
            let value  = $(this).children("option:selected").val();
                    $.get(location.origin+'/get-product-subcat/'+value,function(response){
                        $('#subcategory').html(response);
                        // console.log("ok");
                        console.log(response);
                    })


        });
    });

</script>
<script src="{{asset('contents/admin')}}/files/assets/pages/jquery.filer/js/jquery.filer.min.js"></script>
<script src="{{asset('contents/admin')}}/files/assets/pages/filer/custom-filer.js" type="text/javascript"></script>
<script src="{{asset('contents/admin')}}/files/assets/pages/filer/jquery.fileuploads.init.js" type="text/javascript">
</script>


@endpush
@endsection