<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/banner.php') ?>

<div class="container-fluid d-flex justify-content-center">
    <div class="col-lg-5">

        <form method="post" action="/post/store">

            <div class="mb-3">
                <label for="title" class="form-label">title</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="enter title"
                    value="<?= isset($_POST['title']) ? $_POST['title'] : '' ?>">
                <?php if (isset($errors_title['title'])) : ?>
                <div class="alert alert-danger mt-4">
                    <?= $errors_title['title'] ?>
                </div>
                <?php endif;  ?>
            </div>

            <div class="mb-3">
                <label for="body" class="form-label">Body</label>
                <textarea class="form-control" name="body" id="body" rows="3"
                    placeholder="enter body"><?= isset($_POST['body']) ? $_POST['body'] : '' ?></textarea>
                <?php if (isset( $errors_body['body'])) : ?>
                <div class="alert alert-danger mt-4">
                    <?=  $errors_body['body'] ?>
                </div>
                <?php endif;  ?>
            </div>

            <button type="submit" class="btn btn-primary">Save</button>

        </form>

    </div>
</div>


<?php require base_path('views/partials/footer.php') ?>