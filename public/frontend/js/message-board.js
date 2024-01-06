$('.freeClass').hide();
$('.freeClass_j').hide();
$('.freeClass_r').hide();
$('.freeClass_m').hide();

$('input[type=radio][name=ad_type_a]').change(function() {
        if (this.value == 1) 
        {
            $('.bannerSection').show();
            $('.paidClass').show();
            $('.freeClass').hide();
            
        }else if (this.value == 0) 
        {
            $('.bannerSection').hide();
            $('.paidClass').hide();
            $('.freeClass').show();
            $('#achievement_banner').val('');
        }
});

$('input[type=radio][name=ad_type_j]').change(function() {
    if (this.value == 1) 
    {
        $('.bannerSection_j').show();
        $('.paidClass_j').show();
        $('.freeClass_j').hide();
        
    }
    else if (this.value == 0) 
    {
        $('.bannerSection_j').hide();
        $('.paidClass_j').hide();
        $('.freeClass_j').show();
        $('#job_banner').val('');
    }
});


$('input[type=radio][name=ad_type_r]').change(function() {
    if (this.value == 1) 
    {
        $('.bannerSection_r').show();
        $('.paidClass_r').show();
        $('.freeClass_r').hide();
        
    }
    else if (this.value == 0) 
    {
        $('.bannerSection_r').hide();
        $('.paidClass_r').hide();
        $('.freeClass_r').show();
        $('#requirement_banner').val('');
    }
});

$('input[type=radio][name=ad_type_m]').change(function() {
    if (this.value == 1) 
    {
        $('.bannerSection_m').show();
        $('.paidClass_m').show();
        $('.freeClass_m').hide();
        
    }
    else if (this.value == 0) 
    {
        $('.bannerSection_m').hide();
        $('.paidClass_m').hide();
        $('.freeClass_m').show();
        $('#matrimonial_banner').val('');
    }
});

$('#achievementForm').submit(function(e) {

        var ad_type = $('input[name="ad_type_a"]:checked').val();        
        var maxFiles = 4;

        if(ad_type == 0)
        {
            var files = $('#achievement_images')[0].files;
            if (files.length > maxFiles) 
            {
                $('#imagesError').html('').append('Please select only up to ' + maxFiles + ' files.');
                $('#achievement_images').val('');
                return false;
            }
        }
        else if(ad_type == 1)
        {
            var postBanner = $('#achievement_banner')[0].files;
        
            if (postBanner.length == 0) 
            {
                $('#bannerError').html('').append('Please select banner file.');
                return false;
            }
        
            var files = $('#achievement_images')[0].files;
            if (files.length > maxFiles) 
            {
                $('#imagesError').html('').append('Please select only up to ' + maxFiles + ' files.');
                $('#achievement_images').val('');
                return false;
            }
        }

        return true;
}); 

$('#jobForm').submit(function(e) {

    var ad_type = $('input[name="ad_type_j"]:checked').val();        
    var maxFiles = 4;

    if(ad_type == 0)
    {
        // var files = $('#achievement_images')[0].files;
        // if (files.length > maxFiles) 
        // {
        //     $('#imagesError').html('').append('Please select only up to ' + maxFiles + ' files.');
        //     $('#achievement_images').val('');
        //     return false;
        // }
    }
    else if(ad_type == 1)
    {
        var postBanner = $('#job_banner')[0].files;
    
        if (postBanner.length == 0) 
        {
            $('#job_bannerError').html('').append('Please select banner file.');
            return false;
        }
    
        // var files = $('#achievement_images')[0].files;
        // if (files.length > maxFiles) 
        // {
        //     $('#imagesError').html('').append('Please select only up to ' + maxFiles + ' files.');
        //     $('#achievement_images').val('');
        //     return false;
        // }
    }

    return true;
}); 

$('#requirementForm').submit(function(e) {

    var ad_type = $('input[name="ad_type_r"]:checked').val();        
    var maxFiles = 4;

    if(ad_type == 0)
    {
        var files = $('#requirement_images')[0].files;
        if (files.length > maxFiles) 
        {
            $('#requirement_imagesError').html('').append('Please select only up to ' + maxFiles + ' files.');
            $('#requirement_images').val('');
            return false;
        }
    }
    else if(ad_type == 1)
    {
        var postBanner = $('#requirement_banner')[0].files;
    
        if (postBanner.length == 0) 
        {
            $('#requirement_bannerError').html('').append('Please select banner file.');
            return false;
        }
    
        var files = $('#requirement_images')[0].files;
        if (files.length > maxFiles) 
        {
            $('#requirement_imagesError').html('').append('Please select only up to ' + maxFiles + ' files.');
            $('#requirement_images').val('');
            return false;
        }
    }

    return true;
}); 

$('#matrimonialForm').submit(function(e) {

    var ad_type = $('input[name="ad_type_m"]:checked').val();        
    var maxFiles = 4;

    if(ad_type == 0)
    {
        var files = $('#matrimonial_images')[0].files;
        if (files.length > maxFiles) 
        {
            $('#matrimonial_imagesError').html('').append('Please select only up to ' + maxFiles + ' files.');
            $('#matrimonial_images').val('');
            return false;
        }
    }
    else if(ad_type == 1)
    {
        var postBanner = $('#matrimonial_banner')[0].files;
    
        if (postBanner.length == 0) 
        {
            $('#matrimonial_bannerError').html('').append('Please select banner file.');
            return false;
        }
    
        var files = $('#matrimonial_images')[0].files;
        if (files.length > maxFiles) 
        {
            $('#matrimonial_imagesError').html('').append('Please select only up to ' + maxFiles + ' files.');
            $('#matrimonial_images').val('');
            return false;
        }
    }

    return true;
}); 