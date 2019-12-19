<section class="popup-section start" id="modal-popup">
    <div class="popup">
        <div class="popup-content">
            <div class="popup-header">
                <h3 class="popup-header__title heading-modal">Add Photo</h3>
                <a href="#" class="close popup-header__close">&times;</a>
            </div>
            <div class="popup-body">
                <form action="../php/add-photo.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="file" name="file" id="file" class="form-control input-style" required>
                    </div>
                    <div class="popup-submit">
                        <input type="submit" name="img_submit" class="btn btn-success popup-submit__btn-modal" value="Submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
