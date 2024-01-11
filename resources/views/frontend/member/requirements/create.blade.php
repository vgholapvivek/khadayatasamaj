<form method="POST" id="requirementForm" action="/member/submit-requirement" enctype="multipart/form-data">
    @csrf    
    @include ('frontend.member.requirements.form', ['formMode' => 'create'])
</form> 