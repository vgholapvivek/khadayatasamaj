@extends('admin.layouts.master')
@section('content')
@section('title', 'Show  Event')

<div class="content-wrapper">
    <section class="content-header">
        @include('admin.layouts.alert')
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-4">
                    <h1>Event</h1>
                </div>
                <div class="col-sm-3">
                    <a class="btn btn-success btn-sm" href="{{ url('admin/events') }}">Back</a>
                    @can('event-edit')
                        <a class="btn btn-primary btn-sm" href="{{ url('admin/events/' . $event->id . '/edit') }}">Edit</a>
                    @endcan
                    @can('event-delete')
                        <form method="POST" action="{{ url('admin/events' . '/' . $event->id) }}" accept-charset="UTF-8" style="display:inline">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Event" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                            </form>
                    @endcan
                </div>
                <div class="col-sm-5">
                  
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">

                <!-- /.card -->

                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Show Table</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $event->id }}</td>
                                    </tr>
                                    <tr><th> Title </th><td> {{ $event->title }} </td></tr>
                                    <tr><th> Venue </th><td> {{ $event->venue }} </td></tr>
                                    <tr><th> Details </th><td> {{ $event->details }} </td></tr>
                                    <tr><th> Description </th><td> {{ $event->description }} </td></tr>
                                    <tr><th> Max Ticket Book </th><td> {{ $event->max_ticket_book }} </td></tr>
                                    <tr><th> Ticket Price </th><td> {{ $event->ticket_price }} </td></tr>
                                    <tr><th> Date </th><td> {{ $event->date }} </td></tr>
                                    <tr><th> Time </th><td> {{ $event->time }} </td></tr>
                                    <tr><th> Status </th><td> {{ $event->status }} </td></tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->

                    </div>

                </div>
            </div>
        </div>
    </section>
</div>


@endsection
