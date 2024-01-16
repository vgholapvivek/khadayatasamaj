<form method="POST" id="jobForm" action="/member/submit-job" enctype="multipart/form-data">
    @csrf    
    @include ('frontend.member.jobs.form', ['formMode' => 'create'])
</form> 