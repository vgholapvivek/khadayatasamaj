@extends('admin.layouts.master')
@section('content')
@section('title', 'Edit Ad Banner')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        @can('adBanner-create')
                        <div>
                            <a href="{{ url('admin/adBanner') }}" class="btn btn-info btn-sm text-white mb-0 me-0" type="button"> <i class="fa fa-arrow-left"></i> Back</a> 
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
                            <h3 class="card-title">Edit Ad Banner</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                       <form method="POST" action="{{ url('admin/adBanner/' . $adBanner->id) }}" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            {{ csrf_field() }}
                                @include ('admin.adBanners.form', ['formMode' => 'edit'])

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection


