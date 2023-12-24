@extends('admin.layouts.master')
@section('content')
@section('title', 'Statuses')

<div class="content-wrapper">
    <section class="content-header">
        @include('admin.layouts.alert')
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Status List</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        @can('orderstatus-create')
                            <div>
                                <a href="{{  url('/statuses/create') }}" class="btn btn-primary btn-sm text-white mb-0 me-0"
                                    type="button"> <i class="fa fa-plus"></i> Add new Status</a>
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
                            {{-- <h3 class="card-title">Status List</h3> --}}

                            <div class="card-tools">
                                    {!! Form::open(['method' => 'GET', 'url' => '/statuses', 'role' => 'search'])  !!}

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
                            <table class="table display nowrap myDataTable" style="width:100%">
                                     <thead>
                        <tr>
                            <th>#</th><th>Status Name</th><th>Status</th><th>Actions</th>

                        </tr>
                    </thead>
                    <tbody>

                      @foreach($statuses as $item)
                            <tr>
                                <td>{{ (($statuses->currentPage() - 1 ) * $statuses->perPage() ) + $loop->iteration }}</td>
                                
                                <td>{{ $item->name }}</td>
                                <td><label class="badge badge-{{ $item->status == 1 ? 'success' : 'danger' }}">{{ $item->status==1?'Active':'Inactive' }}</label></td>
                                <td>
                                    @can('status-edit')
                                    <a href="{{ url('admin/statuses/' . $item->id . '/edit') }}" title="Edit Status"><button class="btn btn-primary btn-sm"><i class="fa fa-pen" aria-hidden="true"></i> Edit</button></a>
                                    @endcan

                                    @can('status-delete')
                                    <form method="POST" action="{{ url('admin/statuses' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <button type="submit"  class="btn btn-danger btn-sm" title="Delete Status" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                    </form>
                                    @endcan

                                </td>
                            </tr>
                        @endforeach

                
                        </tbody>
                        </table>
                           <br>
                        <div class="pagination-wrapper"> {!! $statuses->appends(['search' => Request::get('search')])->render() !!} </div>

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
