<div class="content-form d-flex justify-content-center align-items-center flex-wrap">
    <div class="heading-tertiary">Add Post</div>
    <form action="" enctype="multipart/form-data" method="post" name="multifilesub" id="multifilesub" class="profile-form">
        <div>
            <label class="subtitle-style">Every freer post/ad can be maximum posted for 30 days</label>
        </div>
        <div class="profile-form__styling">
            <label for="post_title" class="label-style">Ads Title</label>
            <input type="text" name="post_title" id="post_title" placeholder="Enter your title" autocomplete="off" required class="input-style">
        </div>
        <div class="profile-form__styling">
            <label for="post_price_type" class="label-style">Select Price</label>
            <select name="post_price_type" id="post_price_type" class="form-control select-style">
                <option value="free" selected>Free</option>
                <option value="standard">Standard</option>
                <option value="premium">Premium</option>
            </select>
        </div>
        <div class="profile-form__styling">
            <label for="startDate" class="label-style">Start Date</label>
            <input type="date" name="post_dateStart" id="startDate" max="3000-12-30" class="input-style" required
                   placeholder="yyyy-mm-dd" autocomplete="off">
        </div>
        <div class="d-flex justify-content-around align-items-center flex-wrap">
            <div class="profile-form__left-select">
                <label for="ad_category" class="label-style">Select Category</label>
                <select name="ad_category" id="ad_category" class="select-style form-control" required>
                    <option value="1" selected>Realestate</option>
                    <option value="2">Jobs</option>
                    <option value="3">Antiques</option>
                </select>
            </div>

            <div class="profile-form__right-select">
                <label for="ad_subcategory" class="label-style">Select Sub-Category</label>
                <select name="ad_subcategory" id="ad_subcategory" class="select-style form-control" required>
                    <option value="1" selected>House</option>
                    <option value="2">Vila</option>
                    <option value="3">Unit</option>
                    <option value="4">Townhouse</option>
                    <option value="5">Appartment</option>
                </select>
            </div>
        </div>

        <div class="profile-form__styling">
            <label for="specific_item" class="label-style">Add Your Images</label>
            <input type="file" name="file[]" class="form-control input-style"
                   multiple="multiple" required id="specific_item"
            >
        </div>

        <div class="d-flex justify-content-around align-items-end profile-form__item-price">
            <div class="">
                <label for="post_price" class="label-style">Price</label>
                <input type="text" name="post_price" id="post_price" placeholder="$100" autocomplete="off" class="input-style" readonly>
            </div>

            <div class="profile-form__item-price-radio">
                <div class="profile-form__radio-group">
                    <input type="radio" name="radio_price" id="amount" class="profile-form__radio-input" value="amount">
                    <label for="amount" class="profile-form__radio-label">
                        <span class="profile-form__radio-button"></span>Amount
                    </label>
                </div>

                <div class="profile-form__radio-group">
                    <input type="radio" name="radio_price" id="negotiable" class="profile-form__radio-input" value="negotiable">
                    <label for="negotiable" class="profile-form__radio-label">
                        <span class="profile-form__radio-button"></span>Negotiable
                    </label>
                </div>

                <div class="profile-form__radio-group">
                    <input type="radio" name="radio_price" id="swap_trade" class="profile-form__radio-input" value="swap_trade">
                    <label for="swap_trade" class="profile-form__radio-label">
                        <span class="profile-form__radio-button"></span>Swap/Trade
                    </label>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-between flex-wrap">
            <div class="">
                <label for="company_email" class="label-style">Your Email</label>
                <input type="email" name="company_email" id="company_email" class="input-style" placeholder="Enter Your Email" autocomplete="off"
                       required>
            </div>

            <div class="">
                <label for="name" class="label-style">Your Company/Name</label>
                <input type="text" name="name" id="name" class="input-style" placeholder="Enter Your Name" autocomplete="off"
                       required>
            </div>

            <div class="">
                <label for="number" class="label-style">Your Number</label>
                <input type="text" name="number" id="number" class="input-style" placeholder="Enter Your Number/Phone" autocomplete="off"
                       required>
            </div>
        </div>

        <div class="">
            <label for="summernote" class="label-style">Content/Body of  your message</label>
            <div id="summernote"></div>
        </div>

        <div class="">
            <div class="">
                <label for="condition" class="label-style">Condition</label>
            </div>

            <div class="profile-form__radio-group">
                <input type="radio" class="profile-form__radio-input" id="new" value="new" name="condition">
                <label for="new" class="profile-form__radio-label">
                    <span class="profile-form__radio-button"></span>New
                </label>
            </div>
            <div class="profile-form__radio-group">
                <input type="radio" class="profile-form__radio-input" id="used" value="used" name="condition">
                <label for="used" class="profile-form__radio-label">
                    <span class="profile-form__radio-button"></span>Used
                </label>
            </div>
        </div>
        <div class="">
            <button class="btn btn-success form-btn" id="submit_post" type="submit">Publish</button>
        </div>
    </form>
</div>
