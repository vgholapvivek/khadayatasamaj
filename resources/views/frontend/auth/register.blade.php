@extends('frontend.layouts.master')
@section('content')
@section('title', 'register')
<style>
    label {
    font-weight: 600;
    color: #000;
    }
    .box8{
    box-shadow: 0px 0px 5px 1px #999;
    padding: 55px 55px;
    } 
    .mx-t3{
    margin-top: -3rem;
    }
</style>
<link href="{{asset('frontend/css/fine-uploader-gallery.min.css')}}" rel="stylesheet">
<script src="{{asset('frontend/js/jquery.fine-uploader.js')}}"></script>
<?php

list($url,$file)=explode('register',request()->fullUrl());
	
$postdata=$_REQUEST;
if(!empty($postdata) && $postdata['memobershipno']!='')
{
	/* Getting file name */
	$filename = $_FILES['file']['name'];
	/* Location */
	$user_avatar_name_copy = date('YmdHis') . '-' . $filename;
	$location = "ksadmin/uploads/user/".$user_avatar_name_copy;
	$location2 = $user_avatar_name_copy;
	$uploadOk = 1;
	$imageFileType = pathinfo($location,PATHINFO_EXTENSION);
	/* Valid Extensions */
	$valid_extensions = array("jpg","jpeg","png");
	/* Check file extension */
	if( !in_array(strtolower($imageFileType),$valid_extensions) ) {
	   $uploadOk = 0;
	}
	if($uploadOk == 0){
	   echo 0;
	}else{
		/* Upload file */
		if($filename!=''){
		   if(move_uploaded_file($_FILES['file']['tmp_name'],$location)){
			  $postdata['avatar']=$location2;
		   }else{
			  echo 0;
		   }
		}

	   
		$url2=$url.'ksadmin/administrator/user/add_save_user';
	}
}
    ?>
			    <!-- banner area 1 -->
                <section class="khadayat-samaj-sponser animate fadeInLeft one">
        <div class="sponser-photo">
            <img src="{{asset('frontend/images/ad1.webp')}}" class="img-fluid" alt="ad1">
        </div>
        <div class="sponser-photo-mob">
            <img src="{{asset('frontend/images/mobile-banner1.webp')}}" class="img-fluid" alt="ad1">
        </div>
    </section>

    <!-- Membership Samaj section  -->
    <section class="samaj-updates-section membership-register-section animate fadeInDown two">
        <div class="wrapper">
            <div class="container mt-4 box8">
                <form action="register.php" method="post" name="form_user" id="form_user" enctype="multipart/form-data">
					<input type="hidden" name="full_name" value="" />
					<input type="hidden" name="group[]" value="4" />

                    <div class="row jumbotron  register-form">
                        <div class="col-sm-12 mx-t3 mb-4">
                            <h2 class="text-center">Membership Form</h2>
                            <p>Content will come here ........Content will come here ........Content will come here ........Content will come here ........Content will come here ........Content will come here ........Content will come here ........Content will come here ........Content will come here ........Content will come here ........Content will come here ........Content will come here ........Content will come here ........Content will come here ........</p>
                        </div>
                        <div class="col-sm-12 form-group">
                            <label for="name-f">Membership No. / Receipt No.</label>
                            <input type="text" class="form-control" name="memobershipno" id="memobershipno" placeholder="Enter Membership No. / Receipt No"  required>
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="name-f">First Name</label>
                            <input type="text" class="form-control" name="firstname" id="firstname" placeholder="Enter your first name"  required>
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="name-l">Last name</label>
                            <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Enter your last name" required>
                        </div> 
                        <div class="col-sm-6 form-group">
                            <label for="tel">Whatsapp No.</label>
                            <input type="text" name="whatsappno" class="form-control" id="whatsappno" placeholder="Enter Your Whatsapp No" required>
                        </div> 
                        <div class="col-sm-6 form-group">
                            <label for="sex">Gender</label>
                            <select id="gender" name="gender" class="form-control browser-default custom-select">
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="Date">Date Of Birth</label>
                            <input type="Date" name="dateofbirth" class="form-control" id="dateofbirth" placeholder="" required>
                        </div> 
                        <div class="col-sm-6 form-group">
                            <label for="name-f">Blood Group</label>
                            <input type="text" class="form-control" name="bloodgroup" id="bloodgroup" placeholder="Enter your Blood Group"  required>
                        </div>
                        <div class="col-sm-6 form-group reg-mart">
                            <div class="col-sm-3 form-group">
                                <label for="name-f">Marital Status:</label> 
                            </div>
                            <div class="marital-form">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="marital_status" id="flexRadioDefault1" value="Married">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Married 
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="marital_status" id="flexRadioDefault2" value="Unmarried" checked>
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Unmarried
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="name-f">Anniversary Date</label>
                            <input type="date" class="form-control" name="anniversarydate" id="anniversarydate" placeholder="Anniversary Date"  required>
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="tel">PAN No.</label>
                            <input type="text" name="panno" class="form-control" id="panno" placeholder="Enter Your PAN No" required>
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="address-1">Address</label>
                            <input type="text" class="form-control" name="address" id="address" placeholder="Locality/House/Street no" required>
                        </div> 
                        <div class="col-sm-6 form-group">
                            <label for="address-2">Native Place</label>
                            <input type="text" class="form-control" name="nativplace" id="nativplace" placeholder="Native Place"  required>
                        </div>
                        <div class="col-sm-4 form-group">
                            <label for="State">State</label>
                            <input type="text" class="form-control" name="state" id="state" placeholder="Enter your state name" required>
                        </div>
                        <div class="col-sm-2 form-group">
                            <label for="zip">Pin Code</label>
                            <input type="text" class="form-control" name="pincode" id="pincode" placeholder="Pin Code" required>
                        </div>
                        
                        <div class="col-sm-6 form-group">
                            <label for="name-f">Username</label>
                            <input type="text" class="form-control" name="username" id="username" placeholder="Username"  required>
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" name="email" id="email" placeholder="email" required>
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="pass">Password</label>
                            <input type="password" name="password" class="form-control" id="pass" placeholder="Enter your password" required>
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="pass2">Confirm Password</label>
                            <input type="password" name="cnf-password" class="form-control" id="pass2" placeholder="Re-enter your password" required>
                        </div>
                        <div class="col-sm-6 form-group">
                            <label>Member's Photo</label>
                            <input style="background: white;" type="file" id="file" name="file" accept="image/*" />
                            <div id="img-preview" class="profile-pre">
                                <p>Member's Photo Preview</p>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <input type="checkbox" class="d-inline" id="chb" required value="1"><label for="chb"
                                class="form-check-label">&nbsp;I accept all terms and conditions.
                            </label>
                        </div>
						
                        <div class="col-sm-12 form-group reg-submit">
                        <input type="hidden" name="banned" value="1" />
							<button id="btn_save" type="button" value="submit" class="btn btn-style1 float-right">Submit</button>
							<span class="loading loading-hide"><img src="{{asset('frontendksadmin/asset/img/loading-spin-primary.svg')}}"> <i>Loading, Saving Data</i></span>
                        </div> 
                    </div>
                </form>
				<div class="register-tabl"> 
                    <div class="row">
                        <div class="col-md-6">
                            <div class="container table-responsive"> 
                                <table class="table table-bordered table-hover">
                                    <thead class="thead-dark">
                                        <tr>
                                            <!-- <th scope="col">#</th> -->
                                            <th scope="col">text will come here</th>
                                            <th scope="col">text will come here</th>
                                            <th scope="col">text will come here</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <!-- <th scope="row">1</th> -->
                                            <td>text will come here</td>
                                            <td>text will come here</td>
                                            <td>text will come here</td>
                                        </tr>
                                        <tr>
                                            <!-- <th scope="row">2</th> -->
                                            <td>text will come here</td>
                                            <td>text will come here</td>
                                            <td>text will come here</td>
                                        </tr>
                                        <tr>
                                        <!-- <th scope="row">3</th> -->
                                            <td>text will come here</td>
                                            <td>text will come here</td>
                                            <td>text will come here</td>
                                        </tr>
                                        <tr>
                                        <!-- <th scope="row">4</th> -->
                                            <td>text will come here</td>
                                            <td>text will come here</td>
                                            <td>text will come here</td>
                                        </tr>
                                        <tr>
                                        <!-- <th scope="row">5</th> -->
                                            <td>text will come here</td>
                                            <td>text will come here</td>
                                            <td>text will come here</td>
                                        </tr>
                                        <tr>
                                        <!-- <th scope="row">6</th> -->
                                            <td>text will come here</td>
                                            <td>text will come here</td>
                                            <td>text will come here</td>
                                        </tr>
                                        <tr>
                                        <!-- <th scope="row">7</th> -->
                                            <td>text will come here</td>
                                            <td>text will come here</td>
                                            <td>text will come here</td>
                                        </tr>
                                        <tr>
                                        <!-- <th scope="row">8</th> -->
                                            <td>text will come here</td>
                                            <td>text will come here</td>
                                            <td>text will come here</td>
                                        </tr>
                                        <tr>
                                        <!-- <th scope="row">9</th> -->
                                            <td>text will come here</td>
                                            <td>text will come here</td>
                                            <td>text will come here</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="container table-responsive"> 
                                <table class="table table-bordered table-hover">
                                    <thead class="thead-dark">
                                        <tr>
                                            <!-- <th scope="col">#</th> -->
                                            <th scope="col">text will come here</th>
                                            <th scope="col">text will come here</th>
                                            <th scope="col">text will come here</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <!-- <th scope="row">1</th> -->
                                            <td>text will come here</td>
                                            <td>text will come here</td>
                                            <td>text will come here</td>
                                        </tr>
                                        <tr>
                                            <!-- <th scope="row">2</th> -->
                                            <td>text will come here</td>
                                            <td>text will come here</td>
                                            <td>text will come here</td>
                                        </tr>
                                        <tr>
                                        <!-- <th scope="row">3</th> -->
                                            <td>text will come here</td>
                                            <td>text will come here</td>
                                            <td>text will come here</td>
                                        </tr>
                                        <tr>
                                        <!-- <th scope="row">4</th> -->
                                            <td>text will come here</td>
                                            <td>text will come here</td>
                                            <td>text will come here</td>
                                        </tr>
                                        <tr>
                                        <!-- <th scope="row">5</th> -->
                                            <td>text will come here</td>
                                            <td>text will come here</td>
                                            <td>text will come here</td>
                                        </tr>
                                        <tr>
                                        <!-- <th scope="row">6</th> -->
                                            <td>text will come here</td>
                                            <td>text will come here</td>
                                            <td>text will come here</td>
                                        </tr>
                                        <tr>
                                        <!-- <th scope="row">7</th> -->
                                            <td>text will come here</td>
                                            <td>text will come here</td>
                                            <td>text will come here</td>
                                        </tr>
                                        <tr>
                                        <!-- <th scope="row">8</th> -->
                                            <td>text will come here</td>
                                            <td>text will come here</td>
                                            <td>text will come here</td>
                                        </tr>
                                        <tr>
                                        <!-- <th scope="row">9</th> -->
                                            <td>text will come here</td>
                                            <td>text will come here</td>
                                            <td>text will come here</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div> 
                </div>
            </div> 
            
        </div>
    </section>

    <section class="khadayat-samaj-matrimonials animate fadeInRight three">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="matrimonials-samaj">
                        <div class="mat-det">
                            <img src="{{asset('frontend/images/men1.webp')}}" class="img-fluid" alt="matrimonials">
                            <p><b>Name: </b></p>
                            <p><b>Age: </b></p>
                        </div>
                        <div class="mat-det">
                            <img src="{{asset('frontend/images/men2.webp')}}" class="img-fluid" alt="matrimonials">
                            <p><b>Name: </b></p>
                            <p><b>Age: </b></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="matrimonilas-title">
                        <h4>Matrimonials Ad 2 Banner</h4>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="matrimonials-samaj">
                        <div class="mat-det">
                            <img src="{{asset('frontend/images/girl.webp')}}" class="img-fluid" alt="matrimonials">
                            <p><b>Name: </b></p>
                            <p><b>Age: </b></p>
                        </div>
                        <div class="mat-det">
                            <img src="{{asset('frontend/images/girl1.webp')}}" class="img-fluid" alt="matrimonials">
                            <p><b>Name: </b></p>
                            <p><b>Age: </b></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    

    <!-- Fixed Banner Donate Now -->
    <section class="khadayat-donate-join animate fadeInLeft four">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="donate-bord">
                        <div class="khadyat-donate-detail">
                            <a href="#">
                                <div class="donate-photo">
                                    <img src="{{asset('frontend/images/donation.webp')}}" class="img-fluid" alt="donation">
                                    <h4>Donate Now</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="donate-bord">
                        <div class="khadyat-donate-detail">
                            <a href="#">
                                <div class="donate-photo">
                                    <img src="{{asset('frontend/images/join.webp')}}" class="img-fluid" alt="Join Us">
                                    <h4>Join Us</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="donate-bord">
                        <div class="khadyat-donate-detail">
                            <a href="tel:+91 9821020582">
                                <div class="donate-photo">
                                    <img src="{{asset('frontend/images/call.webp')}}" class="img-fluid" alt="Call Us">
                                    <h4>Call Us</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="donate-bord donate-bord2">
                        <div class="khadyat-donate-detail">
                            <a target="_blank" href="https://wa.me/919821020582?text=Welcome%20to%20Khadayata%20Samaj%20Community">
                                <div class="donate-photo">
                                    <img src="{{asset('frontend/images/whats.webp')}}" class="img-fluid" alt="Whats App Us">
                                    <h4>WhatsApp Us</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Fixed Banner Area 3 - Sponser Banner -->
    <section class="khadayat-samaj-sponser animate fadeInRight five">
        <div class="sponser-photo">
            <img src="{{asset('frontend/images/ad6.webp')}}" class="img-fluid" alt="ad1">
        </div>
        <div class="sponser-photo-mob">
            <img src="{{asset('frontend/images/mobile-banner4.webp')}}" class="img-fluid" alt="ad1">
        </div>
    </section>

@endsection
@section('scripts')
<script>
$(document).ready(function () {
    
			var data_post=<?php echo json_encode($postdata);?>;
			$.ajax({
				url: 'ksadmin/administrator/user/add_save_user',
				type: 'POST',
				dataType: 'json',
				data: data_post,
			})
            .done(function (res) {
                if (res.success) {
                    var id = $('#user_avatar_galery').find('li').attr('qq-file-id');

                   //alert('Registerd successfully');
                   window.location.href='register_thank_you.php';
                } else {
                    alert(res.message);
                }

            })
            .fail(function () {
                alert('Error save data');
            });
            
	$('#btn_save').on('click', function (evt) {
		evt.preventDefault();
		var form_user = $('#form_user');
		var submitform=true;
		
		$("#form_user").find("input[type=text],input[type=date],input[type=password],input[type=checkbox],input[type=radio]").each(function(e){
				if($(this).val()=='' && $(this).attr('name')!='search'){
					alert("Please fill required field's");//+$(this).attr('name'));
					submitform=false;
					return false;
				}
		});
		$("input[name='full_name']").val($("input[name='firstname']").val()+" "+$("input[name='lasttname']").val())
		if(submitform)
		{
		if($("#pass").val()!=$("#pass2").val())
		{
			alert('Password and Confirm password does not matched!');
			return false;
		}
		//$('.message').fadeOut();
		if($("#chb:checked").val()==1){
        form_user.submit();
        var data_post = form_user.serializeArray();
        var save_type = $(this).attr('data-stype');

        data_post.push({
            name: 'save_type',
            value: save_type
        });

        $('.loading').show();
		}
		}
    }); /*end btn save*/

});
				</script>
@endsection