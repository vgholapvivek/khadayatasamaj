@extends('admin.layouts.master')
@section('content')
@section('title', 'Show  MOM')

<div class="content-wrapper">
    <section class="content-header">
        @include('admin.layouts.alert')
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-4">
                    <h1>MOM</h1>
                </div>
                <div class="col-sm-3">
                    <a class="btn btn-success btn-sm" href="{{ url('admin/moms') }}">Back</a>
                    @can('mom-edit')
                        <a class="btn btn-primary btn-sm" href="{{ url('admin/moms/' . $mom->id . '/edit') }}">Edit</a>
                    @endcan
                    @can('mom-delete')
                        <form method="POST" action="{{ url('admin/moms' . '/' . $mom->id) }}" accept-charset="UTF-8" style="display:inline">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-danger btn-sm" title="Delete MOM" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
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

                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Show MOM</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $mom->id }}</td>
                                    </tr>
                                    <tr><th> Date </th><td> {{ date('d-m-Y',strtotime($mom->date)) }} </td></tr>
                                    <tr><th> Meeting Details </th><td> {{ $mom->mom_details }} </td></tr>
                                    <tr><th> Document/Attachment </th><td> <a href="{{$item->file}}" target="_blank"> View/Download <a> </td></tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
</div>


@endsection
