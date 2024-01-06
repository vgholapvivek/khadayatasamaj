<form method="POST" id="matrimonialForm" action="/member/submit-matrimonial" enctype="multipart/form-data">
    @csrf    
    @include ('frontend.member.matrimonials.form', ['formMode' => 'create'])
</form> 