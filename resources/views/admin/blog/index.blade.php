@extends('admin.layouts.master')
@section('content')
@section('title', 'Blog')

<div class="content-wrapper">
    <section class="content-header">
        @include('admin.layouts.alert')
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                   <h2></h2>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        @can('blog-create')
                            <div>
                            <a href="{{  url('admin/blog/create') }}" class="btn btn-primary btn-sm text-white mb-0 me-0"
                                    type="button"> <i class="fa fa-plus"></i> Add new blog</a>
                            </div>
                        @endcan
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="container-fluid">
            
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Blog List</h3>

                            <div class="card-tools">
                                    {!! Form::open(['method' => 'GET', 'url' => '/blog', 'role' => 'search'])  !!}

                                <div class="input-group input-group-sm" style="width: 150px;">

                                    <input type="text" name="search" class="form-control float-right"
                                        placeholder="Search">

                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                                    {!! Form::close() !!}

                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0" style="height: 600px;">
                            <table class="table table-head-fixed text-nowrap">
                                     <thead>
                        <tr>
                            <th>#</th><th>Name</th><th>Image</th><th>Mobile Image</th><th>Description</th><th>Sequence</th><th>Show In Homepage</th><th>User Type</th><th>Status</th>
                            <th>Actions</th>

                        </tr>
                    </thead>
                    <tbody>

                    @foreach($blog as $item)
                            <tr>
                                <td>{{ (($blog->currentPage() - 1 ) * $blog->perPage() ) + $loop->iteration }}</td>
                                <td>{{ @$item->name }}</td>
                                <td>@if($item->image)<img src="{{ asset($item->image) }}" style="width:30%" alt="Image">@endif</td>
                                <td>@if($item->mobile_image)<img src="{{ asset($item->mobile_image) }}" style="width:30%" alt="Mobile Image">@endif</td>
                                <td>{{ @$item->description }}</td>
                                <td>{{ @$item->sequence }}</td>
                                <td>{{ @$item-> show_in_homepage}}</td>
                                <td>{{@$item->type}}</td>
                                <td>
                                @if(!empty($item->status) && $item->status==0)
                                  <lable class="badge badge-danger">{{@$item->statusflag->name}}</lable>
                                @elseif(!empty($item->status) && $item->status==1)  
                                  <lable class="badge badge-success">{{@$item->statusflag->name}}</lable>
                                @elseif(!empty($item->status) && $item->status==2)  
                                  <lable class="badge badge-black">{{@$item->statusflag->name}}</lable>  
                                @else
                                   {{'-'}}
                                @endif
                                </td>
                                
                                <td>
                                    @can('blog-edit')
                                        <a href="{{ url('admin/blog/' . $item->id . '/edit') }}" title="Edit blog">
                                            <button class="btn btn-primary btn-sm"><i class="fa fa-pen" aria-hidden="true"></i> Edit</button>
                                        </a>
                                    @endcan
                                </td>
                            </tr>
                    @endforeach
                        </tbody>
                        </table>
                           <br>
                        <div class="pagination-wrapper"> {!! $blog->appends(['search' => Request::get('search')])->render() !!} </div>

                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
</div>


@endsection
