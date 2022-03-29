<!-- modal -->
<div class="modal fade" id="pageModal" tabindex="-1" aria-labelledby="pageModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title page-modal-title">Create New Page</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <?= !empty($error) ? $error : ""; ?>
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="page-name" class="col-form-label">Name Your Page</label>
                        <input type="text" name="page_title" value="<?= !empty($error) ? $_POST['page_title'] : ""; ?>" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="page-cat" class="col-form-label">Category</label>
                        <select id="page-cat" name="page_category" class="form-select"
                                aria-label="Default select example">
                            <option value="">Select Category</option>
                            <?php
                            foreach ($category as $val) {
                                ?>
                                <option <?= !empty($error) ? ($_POST['page_category'] == $val['category_id'] ? 'selected="selected"' : "") : ""; ?>
                                        value="<?= $val['category_id']; ?>"><?= $val['category_name']; ?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="page-summary" class="col-form-label">Summary</label>
                        <textarea name="page_description" class="form-control" id="page-summary"><?= !empty($error) ? $_POST['page_description'] : ""; ?></textarea>
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
<!-- end -->


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