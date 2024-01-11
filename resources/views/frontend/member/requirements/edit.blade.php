<form method="POST" action="/submit-requirement/'{{$requirement->id }}" enctype="multipart/form-data">
    {{ method_field('PATCH') }}
    @csrf
    
    @include ('frontend.member.requirements.form', ['formMode' => 'update'])

</form> 