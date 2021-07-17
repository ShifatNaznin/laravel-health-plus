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
                            <h4>Add Contact Information</h4>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="page-header-breadcrumb">
                        <a href="{{route('contactinformation')}}" class="btn btn-warning">Back</a>
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

                            <form method="post" action="{{route('contactinformation_insert')}}" enctype="multipart/form-data">
                                @csrf
                            
                                
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="email" class="form-control" value="{{old('email')}}" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">phone</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="phone" class="form-control" value="{{old('phone')}}" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">address</label>
                                    <div class="col-sm-9">

                                        <textarea id="my-editor" name="address" value="{{old('address')}}" id=""
                                            cols="100" rows="10">{{old('address')}}</textarea>
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
                                    <label class="col-sm-2 col-form-label">Facebook Link</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="facebook_link" class="form-control" value="{{old('facebook_link')}}">
                                    </div>
                                </div>

                           
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Twitter Link</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="twitter_link" class="form-control" value="{{old('twitter_link')}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Instragram</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="instragram_link" class="form-control" value="{{old('instragram_link')}}">
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
                    $.get(location.origin+'/get-contactinformation-subcat/'+value,function(response){
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