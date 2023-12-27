@extends('admin.layouts.master')
@section('content')
@section('title', 'Past Event')

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
                        @can('event-create')
                            <div>
                            <a href="{{  url('admin/update/create') }}" class="btn btn-primary btn-sm text-white mb-0 me-0"
                                    type="button"> <i class="fa fa-plus"></i> Add new Event</a>
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
                            <h3 class="card-title">Update List</h3>

                            <div class="card-tools">
                                    {!! Form::open(['method' => 'GET', 'url' => '/update', 'role' => 'search'])  !!}

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
                            <table class="table table-head-fixed">
                                     <thead>
                        <tr>
                            <th>#</th><th>Name</th><th>Update Image</th><th>Mobile Update Image</th><th>Venue</th><th>Details</th><th>Date</th><th>Total People In Event</th><th>Vip Guest Names</th><th>Sequence</th><th>Status</th>
                            <th>Actions</th>

                        </tr>
                    </thead>
                    <tbody>

                    @foreach($event as $item)
                            <tr>
                                <td>{{ (($event->currentPage() - 1 ) * $event->perPage() ) + $loop->iteration }}</td>
                                <td>{{@$item->title}}</td>
                                <td>@if($item->event_image)<img src="{{ asset($item->event_image) }}" style="width:30%" alt="Image">@endif</td>
                                <td>@if($item->mobile_event_image)<img src="{{ asset($item->mobile_event_image) }}" style="width:30%" alt="Mobile Image">@endif</td>
                                <td>{{ @$item->venue }}</td>
                                <td>{{ @$item->details }}</td>
                                <td>{{ @$item->date }}</td>
                                <td>{{ @$item->total_person_in_event }}</td>
                                <td>{{@$item->vip_guest_name}}</td>
                                <td>{{ @$item->sequence }}</td>
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
                                    @can('event-edit')
                                        <a href="{{ url('admin/update/' . $item->id . '/edit') }}" title="Edit event">
                                            <button class="btn btn-primary btn-sm"><i class="fa fa-pen" aria-hidden="true"></i> Edit</button>
                                        </a>
                                    @endcan
                                </td>
                            </tr>
                    @endforeach
                        </tbody>
                        </table>
                           <br>
                        <div class="pagination-wrapper"> {!! $event->appends(['search' => Request::get('search')])->render() !!} </div>

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
