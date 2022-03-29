<div class="modal fade" id="pageModal" tabindex="-1" aria-labelledby="pageModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title page-modal-title">Create New Group</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="page-name" class="col-form-label">Name Your Group</label>
                        <input type="text" class="form-control" id="page-name" name="group_title" value="<?= !empty($error) ? $_POST['group_title'] : ""; ?>" >
                    </div>
                    <div class="mb-3">
                        <label for="page-cat" class="col-form-label">Select Privacy</label>
                        <select id="page-cat" class="form-select group-modal-privacy-menu"
                                aria-label="Default select example" name="group_privacy" >
                            <?php
                            foreach ($groupPrivacy as $key => $val) {
                                ?>
                                <option value="<?= $key; ?>"><?= $val; ?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="page-cat1" class="col-form-label">Category</label>
                        <select id="page-cat1" name="group_category" class="form-select" aria-label="Default select example">
                            <option value="">Select Category</option>
                            <?php
                            foreach ($category as $val) {
                                ?>
                                <option <?= !empty($error) ? ($_POST['group_category'] == $val['category_id'] ? 'selected="selected"' : "") : ""; ?>
                                        value="<?= $val['category_id']; ?>"><?= $val['category_name']; ?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="page-summary" class="col-form-label">Summary</label>
                        <textarea class="form-control" id="page-summary" name="group_description"><?= !empty($error) ? $_POST['group_description'] : ""; ?></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-dark page-modal-btn" data-bs-dismiss="modal">
                            Cancel
                        </button>
                        <input type="submit" name="submit" value="Submit"
                               class="btn btn-outline-dark page-modal-btn">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    var exampleModal = document.getElementById('pageModal')
    exampleModal.addEventListener('show.bs.modal', function (event) {
        var button = event.relatedTarget
        var modalTitle = exampleModal.querySelector('.modal-title')
        var modalBodyInput = exampleModal.querySelector('.modal-body input')
    });
</script>


<?php
if (!empty($error)) {
    ?>
    <script type="text/javascript">
        $(window).on('load', function () {
            $('#pageModal').modal('show');
        });
    </script>
    <?php
}
?>