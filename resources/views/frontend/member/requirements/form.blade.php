    <div class="form-check">
        <input class="form-check-input" type="radio" name="ad_type_r" id="flexRadioDefault1a_r" value="0">
        <label class="form-check-label" for="flexRadioDefault1a_r">
        I would like to do a free post for requirments
        </label>
    </div>

    <div class="form-check">
        <input class="form-check-input" type="radio" name="ad_type_r" id="flexRadioDefault2a_r" checked value="1">
        <label class="form-check-label" for="flexRadioDefault2a_r">
        Would Like My Post to be in Common Listing + Premium Banners Area (Paid Post)
        </label>
    </div>

    <div class="profile-mes2">
        <label>Add the Title of Post</label>
        <input type="text" name="title" placeholder="Title Of Post" required>
    </div>

    <div class="profile-mes2">
        <label>Date</label>
        <input type="date" name="date"  required>
    </div>

    <div class="profile-mes2">
        <label>Details of Post(500 words)</label>
        <textarea type="text" name="description" placeholder="Add Details Here(500 words)" required rows="3"></textarea>
    </div>

    <div class="profile-mes2 bannerSection_r">
        <label>Banner Photo</label>
        <input type="file" name="banner" id="requirement_banner" accept="image/*">
        <span class="text-danger" id="requirement_bannerError"></span>
    </div>

    <div class="profile-mes2">
        <label>Add Photo (4)</label>
        <input type="file" name="images[]" id="requirement_images" accept="image/*" multiple="multiple">
        <span class="text-danger" id="requirement_imagesError"></span>
    </div>

    <div class="row">
            
        <div class="col-md-4 paidClass_r">
            <div class="achie-agree">
                <h4><u>2000 INR</u></h4>
                <p>I Agree to <u>terms and conditions</u></p>
                <button type="submit"  class="btn btn-style05 payNow submitAchievement"  >Pay Now & Submit</button>
            </div>
        </div>

        <div class="col-md-4 freeClass_r">
            <div class="achie-agree">
                <p>I Agree to <u>terms and conditions</u></p>
                <button type="submit"  class="btn btn-style05 submitAchievement"  >Submit</button>
            </div>
        </div>

    </div>