<form method="POST" action="/submit-job/'{{$job->id }}" enctype="multipart/form-data">
    {{ method_field('PATCH') }}
    @csrf
    
    @include ('frontend.member.jobs.form', ['formMode' => 'update'])

</form> 