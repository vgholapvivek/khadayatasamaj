@extends('admin.layouts.master')
@section('content')
@section('title', 'Edit Event')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Event</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        @can('event-create')
                        <div>
                            <a href="{{ url('admin/events') }}" class="btn btn-info btn-sm text-white mb-0 me-0" type="button"> <i class="fa fa-arrow-left"></i> Back</a> 
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
                            <h3 class="card-title">Edit Event</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                       <form method="POST" action="{{ url('admin/events/' . $event->id) }}" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            {{ csrf_field() }}
                                @include ('admin.events.form', ['formMode' => 'edit'])

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<script>
    $('.deleteImage').on('click', function() {

        var data_id = $(this).data('id');
        var data_value = $(this).data('value');

        if(confirm("Are you sure you want to delete this?"))
        {
            $.ajax({
                            method: "POST",
                            url: "/admin/event/deleteImage",
                            data: {
                                _token: "{{ csrf_token() }}",
                                id: data_id,
                                value : data_value
                            },
                            success: function(response) 
                            {
                                if (response == 1) 
                                {
                                    $('.imageDivI' + data_id).remove();
                                    alert('Image Removed');
                                    
                                } 
                                else 
                                {
                                   alert('something went wrong');
                                }
                            }
            });           
        }
        else
        {
            return false;
        }
    });
</script>  
@endsection


