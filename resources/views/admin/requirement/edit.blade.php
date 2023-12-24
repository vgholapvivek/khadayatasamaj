@extends('admin.layouts.master')
@section('content')
@section('title', 'Edit Requirement')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        @can('requirement-create')
                        <div>
                            <a href="{{ url('admin/requirement') }}" class="btn btn-info btn-sm text-white mb-0 me-0" type="button"> <i class="fa fa-arrow-left"></i> Back</a> 
                        </div>
                        @endcan
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card card-success">
                        <div class="card-header">
                            <h3 class="card-title">Edit Requirement</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                       <form method="POST" action="{{ url('admin/requirement/' . $requirement->id) }}" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            {{ csrf_field() }}
                                @include ('admin.requirement.form', ['formMode' => 'edit'])

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection


