    <div class="form-check">
        <input class="form-check-input" type="radio" name="ad_type_m" id="flexRadioDefault1a_m" value="0">
        <label class="form-check-label" for="flexRadioDefault1a_m">
        I would like to do a free post for matrimonial
        </label>
    </div>

    <div class="form-check">
        <input class="form-check-input" type="radio" name="ad_type_m" id="flexRadioDefault2a_m" checked value="1">
        <label class="form-check-label" for="flexRadioDefault2a_m">
        Would Like My Post to be in Common Listing + Premium Banners Area (Paid Post)
        </label>
    </div>

    <div class="matri-gen">
        <div class="form-check">
            <input class="form-check-input" type="radio" name="gender" value="Male" id="flexRadioDefault3_m" checked>
            <label class="form-check-label" for="flexRadioDefault3_m">Male</label>
        </div>
        <div class="form-check chk2">
            <input class="form-check-input" type="radio" name="gender" value="Female" id="flexRadioDefault4_m">
            <label class="form-check-label" for="flexRadioDefault4_m">Female</label>
        </div>
    </div>

    <div class="profile-mes3">
        <label>Full Name</label>
        <input type="text" name="first_name" placeholder="First Name" required>
        <input type="text" name="middle_name" placeholder="Middle Name">
        <input type="text" name="last_name" placeholder="Last Name" required>
    </div>

    <div class="profile-mes4">
        <label>Profile of Person (500 words)</label>
        <textarea type="text" name="profile_desc" placeholder="Add Details Here(500 words)" required="" rows="3"></textarea>
    </div>
    <div class="profile-mes4">
        <label>Interest / Hobbies</label>
        <input type="text" name="interest" placeholder="Enter with Separated Commas (,)" required="">
    </div>
    <div class="profile-mes4">
        <label>Partner Profile Expected </label>
        <textarea type="text" name="partner_profile" placeholder="Add Details Here(500 words)" required="" rows="3"></textarea>
    </div>
    <div class="profile-mes4">
        <label>Family Details (enter in brief)</label>
        <textarea type="text" name="family_details" placeholder="Add Details Here(500 words)" required="" rows="3"></textarea>
    </div>

    <div class="profile-mes2">
        <label>Posting Date</label>
        <input type="date" name="date" required>
    </div>

    {{-- <div class="profile-mes2">
        <label>Details of Post(500 words)</label>
        <textarea type="text" name="description" placeholder="Add Details Here(500 words)" required rows="3"></textarea>
    </div> --}}

    <div class="profile-mes2 bannerSection_m">
        <label>Banner Photo</label>
        <input type="file" name="banner" id="matrimonial_banner" accept="image/*">
        <span class="text-danger" id="matrimonial_bannerError"></span>
    </div>

    <div class="profile-mes2">
        <label>Add Photo (4)</label>
        <input type="file" name="images[]" id="matrimonial_images" accept="image/*" multiple="multiple">
        <span class="text-danger" id="matrimonial_imagesError"></span>
    </div>

    <div class="row">
            
        <div class="col-md-4 paidClass_m">
            <div class="achie-agree">
                <h4><u>2500 INR</u></h4>
                <p>I Agree to <u>terms and conditions</u></p>
                <button type="submit"  class="btn btn-style05 payNow submitAchievement"  >Pay Now & Submit</button>
            </div>
        </div>

        <div class="col-md-4 freeClass_m">
            <div class="achie-agree">
                <p>I Agree to <u>terms and conditions</u></p>
                <button type="submit"  class="btn btn-style05 submitAchievement"  >Submit</button>
            </div>
        </div>

    </div>