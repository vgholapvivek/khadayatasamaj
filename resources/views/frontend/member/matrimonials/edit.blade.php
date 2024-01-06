<form method="POST" action="/submit-matrimonial/'{{$matrimonial->id }}" enctype="multipart/form-data">
    {{ method_field('PATCH') }}
    @csrf
    
    @include ('frontend.member.matrimonials.form', ['formMode' => 'update'])

</form> 