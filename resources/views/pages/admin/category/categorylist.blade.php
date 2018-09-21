@extends('layouts.admin.master')

@section('title','Dashboard')
@section('after-style')


@endsection

@section('content')


    <div class="form-control">
        <h1>Category List</h1>
    </div>

    <!-- start: Content -->
    <div id="content" class="span10">


        <div class="row-fluid sortable">
            <div class="box span12">
                <div class="box-header" data-original-title>
                    <h2><i class="halflings-icon user"></i><span class="break"></span>Brand List</h2>
                    <div class="box-icon">
                        <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                        <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                        <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
                    </div>
                </div>
                <div class="box-content">
                    <table class="table table-striped table-bordered bootstrap-datatable datatable">
                        <thead>
                        <tr>
                            <th>Category ID</th>
                            <th>Category Name</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                        </thead>

                        <tbody>
                        {{--@if($items[0])--}}
                        @foreach($items as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td class="center">{{$item->cat_name}}</td>
                                <td class="center">{{$item->description}}</td>
                                <td class="center">
                                    @if($item->status==1)
                                        <span class="label label-success">Active</span>
                                    @else
                                        <span class="label label-danger">Deactive</span>
                                    @endif
                                </td>

                                <td class="center">
                                    @if($item->status==1)
                                        <a class="btn btn-danger" href="{{route('deactivate',$item->id)}}">
                                            <i class="halflings-icon white thumbs-down"></i>
                                        </a>
                                    @else

                                        <a class="btn btn-success" href="{{route('activate',$item->id)}}">
                                            <i class="halflings-icon white thumbs-up"></i>
                                        </a>
                                    @endif
                                    <a class="btn btn-info" href="{{route('editCategory', $item->id)}}">
                                        <i class="halflings-icon white edit"></i>
                                    </a>
                                    <a class="btn btn-danger" href="{{route('deleteCategory', $item->id)}}" id="delete">
                                        <i class="halflings-icon white trash"></i>
                                    </a>
                                </td>
                            </tr>

                        @endforeach
                        {{--@endif--}}
                        </tbody>

                    </table>
                </div>
            </div><!--/span-->
        </div><!--/row-->
    </div><!--/.fluid-container-->

    <!-- end: Content -->

@endsection


<script src="{{asset('admin/assets/js/vendor/jquery-2.1.4.min.js')}}"></script>
<script src="{{asset('admin/assets/js/popper.min.js')}}"></script>
<script src="{{asset('admin/assets/js/plugins.js')}}"></script>
<script src="{{asset('admin/assets/js/main.js')}}"></script>


@section('script')
@endsection