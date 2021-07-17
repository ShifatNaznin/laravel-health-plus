@extends('layouts.admin')
@section('content')
@push('css')
<link rel="stylesheet" type="text/css"
    href="{{asset('contents/admin')}}/files/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" type="text/css"
    href="{{asset('contents/admin')}}/files/assets/pages/data-table/css/buttons.dataTables.min.css">
<link rel="stylesheet" type="text/css"
    href="{{asset('contents/admin')}}/files/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css">
@endpush


<!-- Main-body start -->
<div class="main-body">
    <div class="page-wrapper">
        <!-- Page-header start -->
        <div class="page-header card">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="icofont icofont-table bg-c-blue"></i>
                        <div class="d-inline">
                            <h4>Featured Products List</h4>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="page-header-breadcrumb">
                        <a href="{{route('featuredproducts_add')}}" class="btn btn-warning">Add</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page-header end -->

        <!-- Page-body start -->
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
                    @if(Session::has('success-update'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Status Change Successfully</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                    @if(Session::has('success-del'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Delete Successfully</strong>
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

                            <div class="card-header-right"><i class="icofont icofont-spinner-alt-5"></i></div>
                        </div>
                        <div class="card-block">
                            <div class="dt-responsive table-responsive">
                                <table id="simpletable" class="table table-striped table-bordered nowrap">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Products Name</th>
                                            <th>Image</th>
                                            <th>Status</th>
                                            <th>Manage</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                        $i=1;
                                        @endphp
                                        @foreach ($value as $data)
                                        @php
                                        $product=DB::table('products')->where('id', $data->product_id)->first();

                                        @endphp
                                        <?php
                                           if(!empty($product->image)){
                                               $val= $product->image;
                                             $v=json_decode($val);
                                          
                                           }
                                        
                                            ?>
                                        <tr>
                                            <td>{{$i}}</td>
                                            <td>{{$product->name ?? Null}}</td>
                                            @if(isset($v))

                                            <td><img src="{{ asset('images') }}/{{$v[0]}}" style="width: 60px;">
                                            </td>
                                            @endif


                                            <td>
                                                @if ($data->status == 1)
                                                <button
                                                    class="btn btn-success btn-sm dropdown-toggle waves-effect waves-light "
                                                    type="button" id="dropdown-3" data-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="true">Publish</button>
                                                <div class="dropdown-menu" aria-labelledby="dropdown-3"
                                                    data-dropdown-in="fadeIn" data-dropdown-out="fadeOut"
                                                    x-placement="bottom-start"
                                                    style="position: absolute; transform: translate3d(0px, 40px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                    <a class="dropdown-item waves-light waves-effect"
                                                        style="border-bottom: 2px solid #000;">Chnage Status</a>
                                                    <form method="post" action="{{route('featuredproducts_update')}}"
                                                        enctype="multipart/form-data">
                                                        @csrf
                                                        <input type="hidden" name="id" value="{{$data->id}}">
                                                        <input type="hidden" name="product_id"
                                                            value="{{$data->product_id}}">
                                                        <input type="hidden" name="status" value="2">
                                                        {{-- <a class="dropdown-item waves-light waves-effect" type="submit">
                                                            <input type="hidden" name="status" value="1"> Publish</a> --}}
                                                        <button class="dropdown-item waves-light waves-effect"
                                                            type="submit">

                                                            Not Publish</button>
                                                    </form>
                                                </div>
                                                @endif
                                                @if ($data->status == 2)
                                                <button
                                                    class="btn btn-warning btn-sm dropdown-toggle waves-effect waves-light "
                                                    type="button" id="dropdown-3" data-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="true">Not Publish</button>

                                                <div class="dropdown-menu" aria-labelledby="dropdown-3"
                                                    data-dropdown-in="fadeIn" data-dropdown-out="fadeOut"
                                                    x-placement="bottom-start"
                                                    style="position: absolute; transform: translate3d(0px, 40px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                    <a class="dropdown-item waves-light waves-effect" href="#"
                                                        style="border-bottom: 2px solid #000;">Chnage Status</a>
                                                    <form method="post" action="{{route('featuredproducts_update')}}"
                                                        enctype="multipart/form-data">
                                                        @csrf
                                                        <input type="hidden" name="id" value="{{$data->id}}">
                                                        <input type="hidden" name="product_id"
                                                            value="{{$data->product_id}}">
                                                        <button class="dropdown-item waves-light waves-effect"
                                                            type="submit">
                                                            <input type="hidden" name="status" value="1">
                                                            Publish</button>
                                                        {{-- <a class="dropdown-item waves-light waves-effect" type="submit">
                                                            <input type="hidden" name="status" value="2">
                                                            Not Publish</a> --}}
                                                    </form>
                                                </div>
                                                @endif

                                            </td>
                                            <td>
                                                <div class="btn-group " role="group" data-toggle="tooltip"
                                                    data-placement="top">
                                                    {{-- <a href="{{route('blog_view',$data->id)}}"
                                                    class="btn btn-info btn-mini waves-effect waves-light text-white"
                                                    title="View"><i class="ti-eye"></i></a>
                                                    <a href="{{route('blog_edit',$data->id)}}"
                                                        class="btn btn-warning btn-mini waves-effect waves-light text-white"
                                                        title="Edit"><i class="ti-pencil-alt"></i></a> --}}
                                                    <form method="post" action="{{route('featuredproducts_delete')}}"
                                                        enctype="multipart/form-data">
                                                        @csrf
                                                        <input type="hidden" name="id" value="{{$data->id}}">
                                                        <input type="hidden" name="product_id"
                                                                value="{{$data->product_id}}">
                                                        <button type="submit"
                                                            class="btn btn-danger btn-sm waves-effect waves-light text-white"
                                                            title="Delete">
                                                            
                                                            Delete</button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>

                                        @php
                                        $i++;
                                        @endphp
                                        @endforeach
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- Zero config.table end -->

                </div>
            </div>
        </div>
        <!-- Page-body end -->
    </div>
</div>



@push('js')
<script src="{{asset('contents/admin')}}/files/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="{{asset('contents/admin')}}/files/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js">
</script>
<script src="{{asset('contents/admin')}}/files/assets/pages/data-table/js/jszip.min.js"></script>
<script src="{{asset('contents/admin')}}/files/assets/pages/data-table/js/pdfmake.min.js"></script>
<script src="{{asset('contents/admin')}}/files/assets/pages/data-table/js/vfs_fonts.js"></script>
<script src="{{asset('contents/admin')}}/files/bower_components/datatables.net-buttons/js/buttons.print.min.js">
</script>
<script src="{{asset('contents/admin')}}/files/bower_components/datatables.net-buttons/js/buttons.html5.min.js">
</script>
<script src="{{asset('contents/admin')}}/files/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js">
</script>
<script
    src="{{asset('contents/admin')}}/files/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js">
</script>
<script
    src="{{asset('contents/admin')}}/files/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js">
</script>
@endpush
@endsection