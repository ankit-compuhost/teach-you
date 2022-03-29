<!-- modal -->
<div class="modal form-group fade" id="exampleModal" tabindex="-1"
     aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title modal-event" id="exampleModalLabel">Create New Event</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?= !empty($error) ? $error : ""; ?>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Name Your Event</label>
                        <input type="text" name="event_title" class="form-control"
                               id="recipient-name"
                               value="<?= !empty($error) ? $_POST['event_title'] : ""; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Location</label>
                        <input type="text" name="event_location" class="form-control"
                               id="recipient-name"
                               value="<?= !empty($error) ? $_POST['event_location'] : ""; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Start Date</label>
                        <input type="datetime-local" name="event_start_date" class="form-control"
                               id="birthdaytime"
                               value="<?= !empty($error) ? $_POST['event_start_date'] : ""; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">End Date</label>
                        <input type="datetime-local" name="event_end_date" class="form-control"
                               id="birthdaytime"
                               value="<?= !empty($error) ? $_POST['event_end_date'] : ""; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Selet Privacy</label>
                        <select name="event_privacy" class="form-select fa"
                                aria-label=".form-select-lg example">
                            <option value="">Open this select menu</option>
                            <?php
                            foreach ($eventPrivacy as $key => $val) {
                                ?>
                                <option value="<?= $key; ?>"><?= $val; ?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Category</label>
                        <select name="event_category" class="form-select fa"
                                aria-label=".form-select-lg example">
                            <option value="">Open this select menu</option>
                            <?php
                            foreach ($category as $val) {
                                ?>
                                <option <?= !empty($error) ? ($_POST['event_category'] == $val['category_id'] ? 'selected="selected"' : "") : ""; ?>
                                    value="<?= $val['category_id']; ?>"><?= $val['category_name']; ?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Cover Image</label><br>
                        <input type="file" name="event_cover">
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Summary</label>
                        <textarea name="event_description" class="form-control"
                                  placeholder="Leave a comment here"
                                  id="floatingTextarea"><?= !empty($error) ? $_POST['event_description'] : ""; ?></textarea>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary modal-cancel"
                            data-bs-dismiss="modal">Cancel
                    </button>
                    <input type="submit" name="submit" class="btn btn-primary modal-submit"
                           value="Submit">
                </div>
            </div>
        </form>
    </div>
</div>
<!-- end -->


<?php
if (!empty($error)) {
    ?>
    <script type="text/javascript">
        $(window).on('load', function () {
            $('#exampleModal').modal('show');
        });
    </script>
    <?php
}
?>