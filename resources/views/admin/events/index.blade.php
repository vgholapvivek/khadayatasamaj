@extends('admin.layouts.master')
@section('content')
@section('title', 'Events')

<div class="content-wrapper">
    <section class="content-header">
        @include('admin.layouts.alert')
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Event List</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        @can('event-create')
                            <div>
                                <a href="{{  url('admin/event/create') }}" class="btn btn-primary btn-sm text-white mb-0 me-0"
                                    type="button"> <i class="fa fa-plus"></i> Add new event</a>
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
                            <h3 class="card-title">Event List</h3>

                            <div class="card-tools">
                                    {!! Form::open(['method' => 'GET', 'url' => '/events', 'role' => 'search'])  !!}

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
                            <th>#</th>
                            <th>Title</th>
                            <th>Venue</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Ticket Price</th>
                            <th>Status</th>
                            <th>Actions</th>

                        </tr>
                    </thead>
                    <tbody>

                      @foreach($events as $item)
                            <tr>
                                <td>{{ (($events->currentPage() - 1 ) * $events->perPage() ) + $loop->iteration }}</td>
                                
                                <td>{{ $item->title }}</td>
                                <td>{{ $item->venue }}</td>
                                <td>{{ $item->date }}</td>
                                <td>{{ $item->time }}</td>
                                <td>{{ $item->ticket_price }}</td>
                                <td>{{ $item->status == 1 ? 'Active' : 'Inactive' }}</td>
                                <td>
                                    @can('event-edit')
                                    <a href="{{ url('admin/events/' . $item->id . '/edit') }}" title="Edit Event"><button class="btn btn-primary btn-sm"><i class="fa fa-pen" aria-hidden="true"></i> Edit</button></a>
                                    @endcan

                                    @can('event-delete')
                                    <form method="POST" action="{{ url('admin/events' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <button type="submit"  class="btn btn-danger btn-sm" title="Delete Event" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                    </form>
                                    @endcan

                                </td>
                            </tr>
                        @endforeach

                
                        </tbody>
                        </table>
                           <br>
                        <div class="pagination-wrapper"> {!! $events->appends(['search' => Request::get('search')])->render() !!} </div>

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
