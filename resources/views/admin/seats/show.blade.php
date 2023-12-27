@extends('admin.layouts.master')
@section('content')
@section('title', 'Show  Seat')

<div class="content-wrapper">
    <section class="content-header">
        @include('admin.layouts.alert')
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-4">
                    <h1> Seat</h1>
                </div>
                <div class="col-sm-3">
                    <a class="btn btn-success btn-sm" href="{{ url('admin/seats') }}">Back</a>
                    @can('seat-edit')
                        <a class="btn btn-primary btn-sm" href="{{ url('admin/seats/' . $seat->id . '/edit') }}">Edit</a>
                    @endcan
                    @can('seat-delete')
                        <form method="POST" action="{{ url('admin/seats' . '/' . $seat->id) }}" accept-charset="UTF-8" style="display:inline">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Seat" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
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
                                    <tr><th>ID</th><td>{{ $seat->id }}</td></tr>
                                    <tr><th> Row Number </th><td> {{ $seat->row_number }} </td></tr>
                                    <tr><th> Seat Number </th><td> {{ $seat->seat_number }} </td></tr>
                                    <tr><th> Status </th><td> {{ $seat->status }} </td></tr>
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
