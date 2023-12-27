@extends('admin.layouts.master')
@section('content')
@section('title', 'Member')

<div class="content-wrapper">
    <section class="content-header">
        @include('admin.layouts.alert')
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Member List</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        @can('member-create')
                            <div>
                                <a href="{{  url('admin/member/create') }}" class="btn btn-primary btn-sm text-white mb-0 me-0"
                                    type="button"> <i class="fa fa-plus"></i> Add new
                                    member</a>
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
                            <h3 class="card-title">MemberList</h3>

                            <div class="card-tools">
                                    {!! Form::open(['method' => 'GET', 'url' => 'admin/member', 'role' => 'search'])  !!}

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
                            <th>#</th><th>Membership No</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>WhatsApp No</th>
                            <th>Gender</th>
                            <th>Dob</th>
                            <th>Blood Group</th>
                            <th>Marital Status</th>
                            <th>Anniversary Date</th>
                            <th>Pan No</th>
                            <th>Address</th>
                            <th>Native Place</th>
                            <th>State</th>
                            <th>Pin Code</th>
                            <th>Member Photo</th>
                        </tr>
                    </thead>
                    <tbody>

                      @foreach($member as $item)
                            <tr>
                                <td>{{ (($member->currentPage() - 1 ) * $member->perPage() ) + $loop->iteration }}</td>
                                
                                <td>{{ $item->membershipNo  }}</td>
                                <td>{{ $item->firstName  }}</td>
                                <td>{{ $item->lastName  }}</td>
                                <td>{{ $item->whatsappNo  }}</td>
                                <td>{{ $item->gender  }}</td>
                                <td>{{ $item->dob  }}</td>
                                <td>{{ $item->bloodGroup  }}</td>
                                <td>{{ $item->maritalStatus  }}</td>
                                <td>{{@$item->anniversaryDate}}</td>
                                <td>{{@$item->panNo}}</td>
                                <td>{{@$item->address}}</td>
                                <td>{{@$item->nativePlace}}</td>
                                <td>{{@$item->state}}</td>
                                <td>{{@$item->pinCode}}</td>
                                <td>@if($item->memberPhoto)<img src="{{ asset($item->memberPhoto) }}" style="width:50%" alt="Banner Image">@endif</td>
                                <td>
                                    @can('member-edit1')
                                    <a href="{{ url('admin/member/' . $item->id . '/edit') }}" title="Edit Member"><button class="btn btn-primary btn-sm"><i class="fa fa-pen" aria-hidden="true"></i> Edit</button></a>
                                    @endcan

                                   
                                </td>
                            </tr>
                        @endforeach

                
                        </tbody>
                        </table>
                           <br>
                        <div class="pagination-wrapper"> {!! $member->appends(['search' => Request::get('search')])->render() !!} </div>

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
