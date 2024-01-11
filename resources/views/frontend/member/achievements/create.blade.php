<form method="POST" id="achievementForm" action="/member/submit-achievement" enctype="multipart/form-data">
    @csrf    
    @include ('frontend.member.achievements.form', ['formMode' => 'create'])
</form> 